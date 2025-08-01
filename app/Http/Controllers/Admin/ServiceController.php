<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Helpers\FileUploader;

class ServiceController extends Controller
{
    /**
     * Display a listing of services.
     */
    public function index()
    {
        $services = Service::latest()->paginate(10);
        return view('admin.service.index', compact('services'));
    }

    /**
     * Store a new service.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'status' => 'sometimes|in:active,blocked',
        ]);
        
        if ($request->hasFile('image')) {
            $validated['image'] = FileUploader::uploadFile($request->file('image'), 'images/services');
        }
        
        // Set default status if not provided
        if (!isset($validated['status'])) {
            $validated['status'] = 'active';
        }
        
        $service = Service::create($validated);
        
        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Service created successfully',
                'redirect' => route('admin.services.index')
            ]);
        }
        
        return redirect()->route('admin.services.index')
            ->with('success', 'Service created successfully.');
    }

    /**
     * Show the form for editing the specified service.
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        $isEdit = true;
        return view('admin.service.view-edit', compact('service', 'isEdit'));
    }

    /**
     * Display a specific service with view capability.
     */
    public function view($id)
    {
        $service = Service::findOrFail($id);
        $isEdit = false;
        return view('admin.service.view-edit', compact('service', 'isEdit'));
    }

    /**
     * Update the specified service.
     */
    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'status' => 'sometimes|in:active,blocked',
        ]);
        
        if ($request->hasFile('image')) {
            $validated['image'] = FileUploader::uploadFile($request->file('image'), 'images/services', $service->image);
        }
        
        // Retain current status if not authorized to change
        if (auth()->user()->user_role != 1 && isset($validated['status'])) {
            unset($validated['status']);
        }
        
        $service->update($validated);
        
        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Service updated successfully'
            ]);
        }
        
        return redirect()->route('admin.services.view', $service->id)
            ->with('success', 'Service updated successfully.');
    }

    /**
     * Remove the specified service.
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        
        // Delete the image using FileUploader or your app's file deletion method
        if ($service->image) {
            FileUploader::deleteFile($service->image);
        }
        
        $service->delete();
        
        return redirect()->route('admin.services.index')
            ->with('success', 'Service deleted successfully.');
    }

    /**
     * Update service status
     */
    public function status(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:services,id',
            'status' => 'required|in:active,blocked',
        ]);
        
        // Check if user has permission to change status
        if (auth()->user()->user_role != 1) {
            return response()->json([
                'warning' => 'You do not have permission to change service status'
            ]);
        }
        
        $service = Service::findOrFail($request->id);
        $service->status = $request->status;
        $service->save();
        
        return response()->json([
            'success' => true,
            'message' => 'Service status updated successfully'
        ]);
    }
}

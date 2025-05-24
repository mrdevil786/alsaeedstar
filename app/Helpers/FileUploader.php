<?php

namespace App\Helpers;

use Exception;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileUploader
{
    public static function uploadFile(UploadedFile $uploadedFile, string $targetPath, ?string $deleteOldFile = null): string
    {
        try {
            if ($deleteOldFile && file_exists(public_path($deleteOldFile))) {
                unlink(public_path($deleteOldFile));
            }
    
            $fileName = Str::random(25) . '.' . $uploadedFile->getClientOriginalExtension();
    
            $targetDirectory = public_path('storage/' . $targetPath);
            if (!is_dir($targetDirectory)) {
                mkdir($targetDirectory, 0777, true);
            }
    
            $uploadedFile->move($targetDirectory, $fileName);
    
            return 'storage/' . $targetPath . '/' . $fileName;
        } catch (Exception $e) {
            throw new Exception("Failed to upload file: " . $e->getMessage());
        }
    }    

    /**
     * Delete a file from storage
     *
     * @param string $filePath
     * @return bool
     */
    public static function deleteFile($filePath)
    {
        if (!$filePath) {
            return false;
        }

        try {
            // Handle different file path formats
            $path = $filePath;
            
            // If path starts with 'storage/', remove it for disk operations
            if (str_starts_with($path, 'storage/')) {
                $path = str_replace('storage/', '', $path);
            }
            
            // If path starts with public_path, convert to relative path
            if (str_starts_with($path, public_path())) {
                $path = str_replace(public_path('storage/'), '', $path);
            }

            // Try to delete from public disk first
            if (Storage::disk('public')->exists($path)) {
                return Storage::disk('public')->delete($path);
            }
            
            // Fallback: try to delete from public folder directly
            $publicPath = public_path('storage/' . $path);
            if (File::exists($publicPath)) {
                return File::delete($publicPath);
            }
            
            // Try original path as well
            if (File::exists($filePath)) {
                return File::delete($filePath);
            }

            return true; // File doesn't exist, consider it deleted
            
        } catch (\Exception $e) {
            // Log the error if needed
            Log::error('File deletion failed: ' . $e->getMessage());
            return false;
        }
    }
}
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    // RETRIEVE ALL CONTACTS AND DISPLAY THEM IN A VIEW
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('admin.contact.index', compact('contacts'));
    }

    // CREATE PAGE FOR A SPECIFIC CONTACT (Assumed to be a contact form view)
    public function create()
    {
        return view('admin.contact.create');
    }

    // VALIDATE AND STORE A NEW CONTACT
    public function store(Request $request)
    {
        // Validation based on the schema you provided
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:contacts,email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Store the contact data in the database
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        // Redirect back to the contacts index with a success message
        return redirect()->route('admin.contacts.index')->with('success', 'Contact created successfully!');
    }

    // FIND A SPECIFIC CONTACT AND SHOW THE EDIT FORM
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        $isEdit = true;
        return view('admin.contact.view-edit', compact('contact', 'isEdit'));
    }

    // VIEW A SPECIFIC CONTACT (Could be for a more detailed view)
    public function view($id)
    {
        $contact = Contact::findOrFail($id);
        $isEdit = false;
        return view('admin.contact.view-edit', compact('contact', 'isEdit'));
    }

    // UPDATE A CONTACT'S DETAILS
    public function update(Request $request, $id)
    {
        // Validation based on the schema you provided
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:contacts,email,' . $id,
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Update the contact data in the database
        $contact = Contact::findOrFail($id);
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        // Redirect back to the contacts index with a success message
        return redirect()->route('admin.contacts.index')->with('success', 'Contact updated successfully!');
    }

    // DELETE A CONTACT
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('admin.contacts.index')->with('success', 'Contact deleted successfully!');
    }
}

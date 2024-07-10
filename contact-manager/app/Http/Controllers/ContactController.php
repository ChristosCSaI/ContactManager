<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    // Display a listing of the resource
    public function index(Request $request)
    {
        $search = $request->input('search');

        if ($search) {
            $contacts = Contact::where('first_name', 'like', "%$search%")
                                ->orWhere('last_name', 'like', "%$search%")
                                ->paginate(10);
        } else {
            $contacts = Contact::paginate(10);
        }

        return view('contacts.index', compact('contacts'));
    }

    // Show the form for creating a new resource
    public function create()
    {
        return view('contacts.create');
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone' => 'nullable|numeric',
            'description' => 'nullable|string',
        ]);

        Contact::create($validated);

        return redirect()->route('contacts.index');
    }

    // Display the specified resource
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.show', compact('contact'));
    }

    // Show the form for editing the specified resource
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.edit', compact('contact'));
    }

    // Update the specified resource in storage
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone' => 'nullable|numeric',
            'description' => 'nullable|string',
        ]);

        $contact = Contact::findOrFail($id);
        $contact->update($validated);

        return redirect()->route('contacts.index');
    }

    // Remove the specified resource from storage
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('contacts.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string|max:1000',
        ]);

        // Send an email or save the contact form data to the database
        Mail::to('info@example.com')->send(new ContactFormMail($validatedData));

        return redirect()->back()->with('success', 'Thank you for contacting us. We will get back to you soon.');
    }
}

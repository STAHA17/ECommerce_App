<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:20',
            'position' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        Application::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'position' => $request->input('position'),
            'message' => $request->input('message'),
        ]);

        return redirect()->back()->with('success', 'Application submitted successfully!');
    }
}

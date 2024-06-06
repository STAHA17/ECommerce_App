<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all(); // Fetch all jobs from the database
        return view('available-jobs', compact('jobs')); // Pass the jobs variable to the view
    }
    
    public function show($id)
    {
        $job = Job::findOrFail($id);
        return view('jobs.show', compact('job'));
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'responsibilities' => 'required|string',
            'requirements' => 'required|string',
        ]);

        Job::create($request->all());

        return redirect()->route('available-jobs')->with('success', 'Job created successfully.');
    }
}

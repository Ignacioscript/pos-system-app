<?php

namespace App\Http\Controllers;

use App\Models\JobType;
use Illuminate\Http\Request;

class JobTypeController extends Controller
{
    public function index()
    {
        $jobTypes = JobType::all();
        return view('jobs.index', compact('jobTypes'));
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'job_title' => 'required|string|max:100',
            'salary' => 'required|numeric|min:0'
        ]);

        JobType::create($request->all());
        return redirect()->route('jobs.index');
    }

    public function edit(JobType $jobType)
    {
        return view("jobs.edit", compact('jobType'));
    }

    public function update(Request $request, JobType $jobType)
    {
        $request->validate([
            'job_title' => 'required|string|max:100',
            'salary' => 'required|numeric|min:0'
        ]);

        $jobType->update($request->all());
        return redirect()->route('jobs.index');
    }

    public function destroy(JobType $jobType)
    {
        $jobType->delete();
        return redirect()->route('jobs.index');
    }

}

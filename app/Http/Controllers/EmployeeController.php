<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\JobType;
use App\Models\Location;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        $jobs = Job::all();
        $locations = Location::all();
        return view('employees.create', compact('jobs', 'locations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            "phone_number" => 'required|string|max:20',
            'jobType_id' => 'required|exists:job_types,id',
            'hired_date' => 'required|date',
            'location_id' => 'required|exists:locations,id'
        ]);

        Employee::create($request->all());
        return redirect()->route('employees.index');
    }

    public function edit(Employee $employee)
    {
        $jobs = JobType::all();
        $locations = Location::all();
        return view('employees.edit', compact('employee',    'jobs', 'locations'));
    }

    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            "phone_number" => 'required|string|max:20',
            'jobType_id' => 'required|exists:job_types,id',
            'hired_date' => 'required|date',
            'location_id' => 'required|exists:locations,id'
        ]);

        $employee->update($request->all());
        return redirect()->route('employees.index');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index');
    }




}

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
        //return view('employees.index', compact('employees'));
        return response()->json($employees);
    }

    public function create()
    {
        $jobs = Job::all();
        $locations = Location::all();
        return view('employees.create', compact('jobs', 'locations'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            "phone_number" => 'required|string|max:20',
            'jobType_id' => 'required|exists:job_types,id',
            'hired_date' => 'required|date',
            'location_id' => 'required|exists:locations,id'
        ]);

        $employee = Employee::create($validated);
        //return redirect()->route('employees.index');
        return response()->json($employee, 201);
    }

    public function show(Employee $employee)
    {
        return response()->json($employee);
    }

    public function edit(Employee $employee)
    {
        $jobs = JobType::all();
        $locations = Location::all();
        return view('employees.edit', compact('employee',    'jobs', 'locations'));
    }

    public function update(Request $request, Employee $employee)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email,' . $employee->id,
            "phone_number" => 'required|string|max:20',
            'jobType_id' => 'required|exists:job_types,id',
            'hired_date' => 'required|date',
            'location_id' => 'required|exists:locations,id'
        ]);

        $employee->update($validated);
        //return redirect()->route('employees.index');
        return response()->json($employee);
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        //return redirect()->route('employees.index');
        return response()->json(null, 204);
    }




}

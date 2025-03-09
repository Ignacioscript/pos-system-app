<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
//    public function index()
//    {
//        $customers = Customer::orderBy('last_name')->get();
//        return view('customers.index', compact('customers'));
//    }

    public function index(Request $request)
    {
        $query = Customer::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('first_name', 'like', "%{$search}%")
                ->orWhere('last_name', 'like', "%{$search}%");
        }

        $customers = $query->orderBy('last_name')->get();
        return view('customers.index', compact('customers'));
    }

    public  function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name'=> 'required|string|max:255',
            'last_name'=> 'required|string|max:255',
            'phone_number'=>'required|string|max:20',
            'email' => 'required|email|max:50'
        ]);

        $customer = Customer::create($validated);
        return redirect()->route('customers.index');
        //return response()->json($customer, 201);
    }


    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));
        //return response()->json($customer);
    }

    public  function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }


    public function update(Request $request, Customer $customer)
    {
        $validated = $request->validate([
            'first_name'=> 'required|string|max:255',
            'last_name'=> 'required|string|max:255',
            'phone_number'=>'required|string|max:20',
            'email' => 'required|email|max:50'
        ]);

        $customer->update($validated);
       return redirect()->route('customers.index');
        //return response()->json($customer);
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index');
        //return response()->json(null, 204);
    }




}

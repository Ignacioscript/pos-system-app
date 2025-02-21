<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    public  function create(Request $request)
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        Request::validate([
            'first_name'=> 'required|string|max:255',
            'last_name'=> 'required|string|max:255',
            'phone_number'=>'required|string|max:20',
            'email' => 'required|email|max:50'
        ]);

        Customer::create($request->all());
        return redirect()->route('customers.index');
    }

    public  function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer)
    {
        Request::validate([
            'first_name'=> 'required|string|max:255',
            'last_name'=> 'required|string|max:255',
            'phone_number'=>'required|string|max:20',
            'email' => 'required|email|max:50'
        ]);

        $customer->update($request->all());
        return redirect()->route('customers.index');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index');
    }




}

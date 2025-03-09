<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{

    public function index()
    {
        $suppliers = Supplier::all();
        return view('suppliers.index', compact('suppliers'));
    }

    public function create()
    {
        $locations = Location::all();
        return view('suppliers.create', compact('locations'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'location_id' => 'required|exists:locations,id',
            'phone_number' => 'required|string|max:20'
        ]);

        Supplier::create($validated);
        return redirect()->route('products.create');
    }

    public function show(Supplier $supplier)
    {
        return view('suppliers.show', compact('supplier'));
    }

    public function edit(Supplier $supplier)
    {
        $locations = Location::all();
        return view('suppliers.edit', compact('supplier', 'locations'));
    }

    public function update(Request $request, Supplier $supplier)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'location_id' => 'required|exists:locations,id',
            'phone_number' => 'required|string|max:20'
        ]);

        $supplier->update($request->all());
        return redirect()->route('suppliers.index');
    }

    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect()->route('products.index');
    }
}

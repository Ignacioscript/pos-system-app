<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::all();
        return view('locations.index', compact('locations'));
    }


    public function create()
    {
        return view('locations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'city' => 'required|string|max:100',
            'address' => 'required|string|max:255'
        ]);

        Location::create($request->all());
        return redirect()->route('locations.index');
    }

    public function edit(Location $location)
    {
        return view("locations.edit", compact('location'));
    }

    public function update(Request $request, Location $location)
    {
        $request->validate([
            'city' => 'required|string|max:100',
            'address' => 'required|string|max:255'
        ]);

        $location->update($request->all());
        return redirect()->route('locations.index');
    }

    public function destroy(Location $location)
    {
        $location->delete();
        return redirect()->route('locations.index');
    }


}

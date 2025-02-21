<?php

namespace App\Http\Controllers;

use App\Models\UserType;
use Illuminate\Http\Request;

class UserTypeController extends Controller
{
    public function index()
    {
        $types = UserType::all();
        return view('userTypes.index', compact('types'));

    }

    public function create()
    {
        return view('userTypes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string|max:20'
        ]);

        return redirect()->route('userTypes.create');
    }

    public function edit(UserType $userType)
    {
        return view('userTypes.edit', compact('userType'));
    }

    public function update(Request $request, UserType $userType)
    {
        $request->validate([
            'type' => 'required|string|max:20'
        ]);

        $userType->update($request->all());
        return redirect()->route('userTypes.index');
    }

    public function destroy(UserType $userType)
    {
        return redirect()->route('userTypes.index');
    }
}

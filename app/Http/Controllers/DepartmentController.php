<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'dept_name' => 'required|string',
            'designation' => 'required|string',
        ]);

        Department::create($request->all());

        return redirect()->route('dashboard')->with('success', 'Department created successfully.');
    }
}

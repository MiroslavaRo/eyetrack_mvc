<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all()->toArray();

        return view('employees.index', ['employees' => $employees]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:4',
            'position' => 'required|min:4',
            'email' => 'required',
            'pfp' => 'required|url',
        ]);

        if (Employee::create($data)) {
            return redirect()->route('employees.index')->with('success', 'Служител е добавен успешно!');
        } else {
            return redirect()->route('employees.index')->with('error', 'Възникна грешка при добавянето на служителя!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee = Employee::find($id);
        return view('employees.edit', ['employee' => $employee]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required|min:4',
            'position' => 'required|min:4',
            'email' => 'required',
            'pfp' => 'required|url',
        ]);

        $employee = Employee::find($id);

        if ($employee->update($data)) {
            return redirect()->route('employees.index')->with('success', 'Служител е редактиран успешно!');
        } else {
            return redirect()->route('employees.index')->with('error', 'Възникна грешка при редактирането на служителя!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::find($id);

        if ($employee->delete()) {
            return redirect()->route('employees.index')->with('success', 'Служител е изтрит успешно!');
        } else {
            return redirect()->route('employees.index')->with('error', 'Възникна грешка при изтриването на служителя!');
        }

    }
}

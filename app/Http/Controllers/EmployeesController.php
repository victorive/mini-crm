<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    
    public function index()
    {
        return view('employees.index', [
            'employees' => Employee::with('company')->paginate(10)
        ]);
    }

    public function create()
    {
        return view('employees.create', [
            'companies' => Company::all()
        ]);
    }

    public function store(Request $request)
    {
        $employee = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'company' => 'required',
            'email' => 'email',
            'phone' => 'numeric',
            'website' => 'url'
        ]);

        Employee::create($employee);

        return redirect('/employees')->with('message', 'Employee created!');
    }

    public function show($id)
    {
        return view('employees.show', [
            'employee' => Employee::find($id)
        ]);
    }

    public function edit($id)
    {
        return view('employees.edit', [
            'employee' => Employee::find($id),
            'companies' => Company::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $employee = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'company' => 'required',
            'email' => 'email',
            'phone' => 'numeric',
            'website' => 'url'
        ]);

        Employee::where('id', $id)->update($employee);

        return back()->with('message', 'Employee updated!');
    }

    public function destroy($id)
    {
        Employee::where('id', $id)->delete();

        return back()->with('message', 'Employee deleted!');
    }
}

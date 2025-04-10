<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;


use function Illuminate\Log\log;

class ManageEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = employee::paginate(10);
        $latestid = employee::latest()->value('id');

        return view('layout.employeepage')
            ->with('employees', $employees)
            ->with('latestid', $latestid);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('layout.addemployeepage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'employee_id' => 'required|min:6|unique:employees',
            'fname' => 'required|min:2',
            'lname' => 'required|min:2',
            'address' => 'required',
            'contactno' => 'required|min:10'
        ], [
            'employee_id.unique' => 'This Employee ID already taken',
            'fname.required' => 'The First name is required.',
            'fname.min' => 'First name cannot be shorter than 2 characters.',
            'lname.required' => 'The Last name is required.',
            'lname.min' => 'Last name cannot be shorter than 2 characters.',
            'address.required' => 'The Address is required.',
            'contactno.required' => 'The Contact Number is required.',
            'contactno.min' => 'Contact Number cannot be shorter than 11 numbers.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validator)
                ->with('insert_error', true);
        }

        $employee = new employee;
        $employee->employee_id = $request->input('employee_id');
        $employee->fname = $request->input('fname');
        $employee->mname = $request->input('mname');
        $employee->lname = $request->input('lname');
        $employee->address = $request->input('address');
        $employee->contactno = $request->input('contactno');
        $employee->save();

        return redirect()->back()
            ->with('mode', 'bg-success ')
            ->with('message', 'Employee ' . $employee->employee_id . ' added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee = employee::findOrFail($id);
        return view('layout.employeeviewpage')
            ->with('employee', $employee);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $oldemployee = employee::findOrFail($id);
        // dd($oldemployee);
        $validator = Validator::make($request->all(), [
            'fname_edit' => 'required|min:2',
            'lname_edit' => 'required|min:2',
            'address_edit' => 'required',
            'contactno_edit' => 'required|min:10'
        ], [
            'fname_edit.required' => 'The First name is required.',
            'fname_edit.min' => 'First name cannot be shorter than 2 characters.',
            'lname_edit.required' => 'The Last name is required.',
            'lname_edit.min' => 'Last name cannot be shorter than 2 characters.',
            'address_edit.required' => 'The Address is required.',
            'contactno_edit.required' => 'The Contact Number is required.',
            'contactno_edit.min' => 'Contact Number cannot be shorter than 11 numbers.',
        ]);


        if ($validator->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validator)
                ->with('update_error', $id)
                ->with('oldemployee', $oldemployee);
        } else {
            $employee = employee::findOrFail($id);
            $employee->fname = $request->input('fname_edit');
            $employee->mname = $request->input('mname_edit');
            $employee->lname = $request->input('lname_edit');
            $employee->address = $request->input('address_edit');
            $employee->contactno = $request->input('contactno_edit');
            $employee->save();

            return redirect()->back()
                ->with('mode', 'bg-warning')
                ->with('message', 'Employee ' . $employee->employee_id . ' updated successfully');
        }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $employee = employee::findOrFail($id);
            $employee->delete();

        } catch (Exception $e) {

        }

        return redirect()->back()
            ->with('mode', 'bg-danger ')
            ->with('message', 'Employee ' . $employee->employee_id . ' deleted successfully');
    }
}

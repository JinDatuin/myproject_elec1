@extends('Layout.GeneralLayout')

@section('title')
    Employees
@endsection

@section('employee')
    active
@endsection

@section('content')
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 shadow-lg pt-2">
                <a class="btn btn-primary mb-2" href="/manageemployee">View Employee List</a>
                    <h2 class="text-gray">View Employee</h2>
                    <p class="text-gray"><b>Employee Id:</b> {{ $employee['employee_id'] }}</p>
                    <p class="text-gray"><b>First Name:</b> {{ $employee['fname'] }}</p>
                    <p class="text-gray"><b>Middle Name:</b> {{ $employee['mname'] }}</p>
                    <p class="text-gray"><b>Last Name:</b> {{ $employee['lname'] }}</p>
                    <p class="text-gray"><b>Address:</b> {{ $employee['address'] }}</p>
                    <p class="text-gray"><b>Contact No.:</b> {{ $employee['contactno'] }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection

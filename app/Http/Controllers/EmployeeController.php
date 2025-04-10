<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function greet($name = "Client")
    {
        return "Kumusta ka " . $name . "!";
    }

    public function control($grade = "Enter Your Grade to URI")
    {
        $employees = array(
            array("name" => "Zyrell", "age" => 25, "department" => "HR Department"),
            array("name" => "Miguel", "age" => 22, "department" => "IT Department"),
            array("name" => "Clarisse", "age" => 28, "department" => "Finance Department"),
            array("name" => "Nathan", "age" => 24, "department" => "Marketing Department"),
            array("name" => "Angela", "age" => 26, "department" => "Operations Department"),
            array("name" => "Jasper", "age" => 23, "department" => "IT Department"),
            array("name" => "Sophia", "age" => 27, "department" => "Customer Service"),
            array("name" => "Brandon", "age" => 29, "department" => "Sales Department"),
            array("name" => "Isabel", "age" => 21, "department" => "Legal Department"),
            array("name" => "Francis", "age" => 30, "department" => "Engineering Department")
        );

        return view('layout.controlpage')
            ->with('grade', $grade)
            ->with('employees', $employees);
    }
}

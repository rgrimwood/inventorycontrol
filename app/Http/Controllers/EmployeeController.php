<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Need to add this line to all controllers that access the database
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function show($employee) {

        // Setup with an Eloquent Model
            $employee = Employee::where('employee_id', $employee)->firstOrFail();
    
            // dd($part); // Dump and Die - Shows metadata for database calls
    
            return view('pages/employee', [
                'employee' => $employee
            ]);
        }
}

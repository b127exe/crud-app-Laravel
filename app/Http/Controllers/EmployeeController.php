<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    
    public function index(){

      $dp = DB::select('select * from employees');

      return view('employee.index')->with('dp',$dp);

    }

    public function insert(){

      $dp = DB::select('select * from departments');

      return view('employee.insert')->with('dp',$dp);

    }

}

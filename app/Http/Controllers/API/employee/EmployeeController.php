<?php

namespace App\Http\Controllers\API\employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\API\employee;
class EmployeeController extends Controller
{
    //

    public function index(){

        //$employees = Employee::all();
        return response()->json() 
    }
}

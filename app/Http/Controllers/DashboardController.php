<?php

namespace App\Http\Controllers;

use App\Student;
use App\Program;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
    	$this->middleware('web');
    }

    public function dashboard()
    {
    	$student = Student::count();
    	$program = Program::count();
		
		return view('admin.dashboard',compact('student','program'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use App\Models\Subject;
use Illuminate\Http\Request;
use Session;

class StudentDashboardController extends Controller
{
    private $enrolls;
    public function dashboard()
    {
        $this->enrolls = Enroll::where('student_id', Session::get('student_id'))->get();
        return view('student.home.home',['enrolles'=>$this->enrolls]);
    }
}

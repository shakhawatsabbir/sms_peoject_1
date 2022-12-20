<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use App\Models\Subject;
use Illuminate\Http\Request;
use Session;

class SubjectController extends Controller
{
    private $enrolls, $subject;
    public function addSubject()
    {
        return view('teacher.subject.add');
    }

    public function manageSubject()
    {
        $this->subject = Subject::where('teacher_id', Session::get('user_id'))->get();
        return view('teacher.subject.manage',[
            'subjects'=>$this->subject
        ]);
    }
    public function create(Request $request)
    {
        Subject::newSubject($request);
        return redirect()->back()->with('massage','New Subject Created Successfully');
    }
    public function approvedSubject()
    {
        $this->subject = Subject::where('teacher_id', Session::get('user_id'))->where('status', 1)->get();
        return view('teacher.subject.approved',[
            'subjects'=>$this->subject
        ]);
    }
    public  function enrolledStudent($id)
    {
        $this->enrolls = Enroll::where('subject_id', $id)->get();
        return view('teacher.subject.enrolled-student',[
            'enrolls'=>$this->enrolls
        ]);
    }
}

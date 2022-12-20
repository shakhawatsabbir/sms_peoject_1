<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class AdminCourseController extends Controller
{
    private $subject, $massage;
    public function manage()
    {
        $this->subject = Subject::orderBy('id','desc')->get();

        return view('admin.course.manage',
        [
            'subjects'=>$this->subject
        ]);
    }

    public function detail($id)
    {
        $this->subject = Subject::find($id);
        return view('admin.course.detail',[
           'subject'=>$this->subject
        ]);
    }

    public function updateStatus($id)
    {
        $this->massage = Subject::updateSubjectStatus($id);
        return redirect()->back()->with('massage',$this->massage);
    }
}

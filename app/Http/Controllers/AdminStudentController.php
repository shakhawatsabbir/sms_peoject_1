<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;
use DB;

class AdminStudentController extends Controller
{
    private $student, $students, $massage, $enrolls,$subject ,$data= [];
    public function studentManage()
    {
       $this->students =Student::orderBy('id', 'desc')-> get();
        return view('admin.student.manage-student',[
            'students'=> $this->students
        ]);
    }
    public function updateStatus($id)
    {
        $this->student = Student::find($id);
        if ($this->student->status == 1)
        {
            $this->student->status = 0;
            $this->massage = "Status Inactive Successfully.";
        }
        else
        {
            $this->student->status = 1;
            $this->massage = "Status Active Successfully.";
        }
        $this->student->save();
        return back()->with('massage',$this->massage);
    }
    public function updateEnrollStatus($id)
    {
        $this->enrolls = Enroll::find($id);
        $this->enrolls->enroll_status = 'Complete';
        $this->enrolls->payment_status = 'Complete';
        $this->enrolls->save();
        return back()->with('massage',"Enroll status update Successfully.");
    }

    public  function studentCourseManage()
    {

//        DB::table('subject')
//            ->join('enrolls','subject.id','=', 'enrolls.subject_id')
//            ->join('teacher','subject.teacher_id','=', 'teacher.id')
//            ->select('subject.*','teacher.name','enroll.*')
//            ->get();

        $this->enrolls =Enroll::orderBy('id', 'desc')-> get();
        foreach($this->enrolls as $key => $enroll)
        {
            $this->subject = Subject::find($enroll->subject_id);
            $this->data[$key]['enroll_id'] = $enroll->id;
            $this->data[$key]['course_title'] = $this->subject->title;
            $this->data[$key]['teacher_name'] = Teacher::find($this->subject->teacher_id)->name;
            $this->data[$key]['student_name'] = Student::find($enroll->student_id)->name;
            $this->data[$key]['student_mobile'] = Student::find($enroll->student_id)->mobile;
            $this->data[$key]['enroll_status'] = $enroll->enroll_status;
            $this->data[$key]['payment_status'] = $enroll->payment_status;
        }
        return view('admin.student.manage-student-course',[
            'enrolls'=>$this->data
        ]);
    }
}

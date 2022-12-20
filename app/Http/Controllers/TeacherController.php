<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    private $code, $id, $name, $teacher, $teachers, $year, $updateString;

    public function index()
    {
        return view('admin.teacher.add-teacher');
    }
    public function create(Request $request)
    {

        Teacher::newTeacher($request, $this->getTeacherCode($request));
        return redirect(route('add.teacher'))->with('massage','New Teacher Create');
    }
    private function getTeacherCode($request)
    {
        $this->teacher = Teacher::orderBy('id','desc')->first();
        if ($this->teacher)
        {
            $this->id = $this->teacher->id + 1;
        }
        else
        {
            $this->id = 1;
        }
        $this->updateString = preg_replace('/[^A-Za-z]/','',trim($request->name));

        $this->name = strtoupper(substr($this->updateString, 0,3 ));
        $this->year = date('Y');
        $this->code = $this->name.$this->year.$this->id;
        return $this->code;
    }
    public function manage()
    {
        $this->teachers= Teacher::orderBy('id','desc')->get();
        return view('admin.teacher.manage',[
            'teachers'=>$this->teachers
        ]);
    }

    public function edit($id)
    {
        $this->teacher = Teacher::find($id);
        return view('admin.teacher.edit',[
            'teacher'=>$this->teacher
        ]);
    }

    public function update(Request $request, $id)
    {
        Teacher::updateTeacher($request, $id, $this->getTeacherCode($request));
        return redirect(route('manage.teacher'))->with('massage','Teacher Info Update Successfully');
    }
    public function delete($id)
    {
        $this->teacher = Teacher::find($id);
        if ($this->teacher->image)
        {
            unlink($this->teacher->image);
        }
        $this->teacher->delete();
        return redirect(route('manage.teacher'))->with('massage','Teacher data Delete');
    }


}

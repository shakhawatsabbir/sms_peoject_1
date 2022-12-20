<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Subject extends Model
{
    use HasFactory;

    private static $subject, $directory, $image, $imagename, $imgUrl, $massage;

    public static function newSubject($request)
    {
        self::$subject =new Subject();
        self::$subject->teacher_id = Session::get('user_id');
        self::$subject->title = $request->title;
        self::$subject->code = $request->code;
        self::$subject->fee = $request->fee;
        self::$subject->short_description = $request->short_description;
        self::$subject->long_description = $request->long_description;
        self::$subject->image = self::saveImage($request);
        self::$subject->save();
    }

    public static function saveImage($request)
    {
        self::$image =$request->file('image');
        self::$imagename= rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory = 'subject-image/';
        self::$imgUrl =self::$directory.self::$imagename;
        self::$image->move(self::$directory,self::$imagename);
        return self::$imgUrl;
    }

    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher');
    }

    public static function updateSubjectStatus($id)
    {
        self::$subject = Subject::find($id);
        if (self::$subject ->status == 0)
        {
            self::$subject ->status = 1;
            self::$massage  = 'Course info Active Successfully';
        }
        else
        {
            self::$subject ->status = 0;
            self::$massage = 'Course info Inactive Successfully';
        }
        self::$subject ->save();
        return self::$massage;
    }
}

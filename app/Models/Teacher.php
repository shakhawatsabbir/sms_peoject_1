<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    private static $teacher, $image, $imageNewName, $drictory, $imgUrl ;
    private static $code, $id, $name, $teachers, $year, $updateString;

    public static function  newTeacher($request, $code)
    {
        self::$teacher = new Teacher();
        self::$teacher->name = $request->name;
        self::$teacher->code = $code;
        self::$teacher->email = $request->email;
        self::$teacher->password = bcrypt($request->mobile);
        self::$teacher->mobile = $request->mobile;
        self::$teacher->address = $request->address;
        self::$teacher->image =self::saveImage($request);
        self::$teacher->save();
    }

    public static function saveImage($request)
    {
        self::$image =$request->file('image');
        self::$imageNewName= rand().'.'.self::$image->getClientOriginalExtension();
        self::$drictory = 'teacher-image/';
        self::$imgUrl =self::$drictory.self::$imageNewName;
        self::$image->move(self::$drictory,self::$imageNewName);
        return self::$imgUrl;
    }

    public static function  updateTeacher($request, $id, $code)
    {
        self::$teacher = Teacher::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$teacher->image))
            {
                unlink(self::$teacher->image);
            }
            self::$imgUrl =self::saveImage($request);
        }
        else
        {
            self::$imgUrl = self::$teacher->image;
        }
        self::$teacher->name = $request->name;
        self::$teacher->code = $code;
        self::$teacher->email = $request->email;
        self::$teacher->password = bcrypt($request->mobile);
        self::$teacher->mobile = $request->mobile;
        self::$teacher->address = $request->address;
        self::$teacher->status = $request->status;
        self::$teacher->image =self::$imgUrl;
        self::$teacher->save();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Self_;

class Student extends Model
{
    use HasFactory;
    private static $student;
    public static function newStudent($request)
    {
        self::$student = new Student();
        self::$student->name = $request->name;
        self::$student->email = $request->email;
        self::$student->password = bcrypt($request->mobile);
        self::$student->mobile = $request->mobile;
        self::$student->save();
        return self::$student;
    }
}

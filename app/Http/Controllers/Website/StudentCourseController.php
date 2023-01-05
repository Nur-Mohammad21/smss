<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Enroll;
use Illuminate\Http\Request;

class StudentCourseController extends Controller
{
    private $enroll;
    private $course;
    private $result;
    public function detail($enroll_id)
    {
        $this->enroll = Enroll::find($enroll_id);
        $this->course = Course::find($this->enroll->course_id);
        $this->result = [
                'title'         => $this->course->title,
                'teacher_name'  => $this->course->teacher->name,
                'start_date'    => $this->course->start_date,
                'fee'           => $this->course->fee,
                'enroll_status' => $this->enroll->enroll_status,
            ];

        return view('student.course.detail',['result'=>$this->result]);
    }
}

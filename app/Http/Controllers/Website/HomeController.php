<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Enroll;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
    private $courses;
    private $course;
    private $teachers;
    private $enroll;
    private $check = false;
    public function index()
    {
        //$this->courses = Course::select('id','title','fee','image')->where('status',1)->orderBy('id','desc')->skip(2)->limit("2")->get();
        $this->courses = Course::where('status',1)->orderBy('id','desc')->take(4)->get(
            [
                'id','title','fee','image'
            ]
        );
        $this->teachers = Teacher::all();
        return view('website.home.home',['courses'=>$this->courses,'teachers'=>$this->teachers]);
    }
    public function about()
    {
        return view('website.about.about');
    }
    public function course()
    {
        return view('website.course.course');
    }
    public function detail($id)
    {
        if(Session::get('student_id'))
        {
            $this->enroll = Enroll::where('student_id',Session::get('student_id'))->where('course_id',$id)->first();
            if($this->enroll)
            {
                $this->check = true;
            }
        }
        $this->course = Course::find($id);
        return view('website.course.detail',['course'=>$this->course,'check'=> $this->check]);
    }
    public function contact()
    {
        return view('website.contact.contact');
    }
    public function login()
    {
        return view('website.login.login');
    }

}

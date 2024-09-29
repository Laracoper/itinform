<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('home');
    }

    public function courses(){
        return view('courses');
    }

    public function opening(){
        return view('opening');
    }

    public function teachers(){
        // dd(Teacher::all());
        // $teachers = Teacher::all();
        $teachers = Teacher::paginate(2);
        return view('teachers',compact('teachers'));
        // return view('teachers',["teachers"=>Teacher::all()]);
    }

    public function teachersid($id){
        // dd(Teacher::all());
        $teacher = Teacher::find($id);
        return view('teachers-id',compact('teacher'));
        // return view('teachers-id',["teacher"=>Teacher::find($id)]);
    }

    public function contact(){
        return view('contact');
    }
}

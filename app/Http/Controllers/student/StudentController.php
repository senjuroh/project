<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        $students = Student::all();
        return view('frontend.studentDetails',compact('students'));
    }

    public function store(Request $request)
    {

        $student = new Student();
        $student->name = $request->name;
        $student->address = $request->address;
        $student->contact = $request->contact;
        $student->email = $request->email;
        $student->course = $request->course;
        $student->save();
        return redirect()->back();
    }
}

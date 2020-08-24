<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create(Request $request)
    {
        $student = new Student();
        $student->student_ID = $request->student_ID;
        $student->last_name = $request->last_name;
        $student->first_name = $request->first_name;
        $student->date_of_birth = $request->date_of_birth;
        $student->gender = $request->gender;

        $student->save();

        return redirect('/');

    }

    public function view($ID)
    {
        $student = Student::findOrFail($ID);
        //$student_ID = $student->$student_ID;
        //echo $ID;
        //echo $ID;
        //echo $student->student_ID;
        return view('student', ['student' => $student]);
        
    }
}

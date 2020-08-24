<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $students = Student::all();  

        return view('studentrecords',['students' => $students]);

        //return view('studentrecords');

    }

}

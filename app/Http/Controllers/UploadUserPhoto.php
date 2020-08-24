<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Auth;

class UploadUserPhoto extends Controller
{
    public function index()
    {
        // $students = Student::all();  

        //  return view('studentrecords',['students' => $students]);

        return view('uploaduserphoto');
    }

    public function uploadUserAvatar(Request $request)
    {
        if ($request->hasFile('image'))
        {
            $filename = $request->image->getClientOriginalName();

            $request->image->storeAs('images', $filename, 'public');

            User::find(Auth::user()->id)->update(['avatar' => $filename]);
            //echo Auth::user()->id; 

        }
        
        return redirect('/');
       // return view('home');
        //return redirect()->back();

        //$request->image->store('images', 'public');
        //return 'uploadeddddd';
        //dd($request()->all());
        //dd($request->image);
        //return redirect('/uploaduserphoto');
        
        // $filename = $request->image->getClientOriginalName();
        // echo $filename;
    }


}

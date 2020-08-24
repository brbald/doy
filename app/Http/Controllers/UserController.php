<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {

    //     $data = [
    //         'name' => 'bigmamafraila',
    //         'email' => 'bigmamafraila@gmail.com',
    //         'password' => 'password',
    //     ];
    //    User::create($data);

        //$user = new User();
        // $user->name = 'doysters';
        // $user->email = 'doysters@gmail.com';
        // $user->password = bcrypt('0412');
        //$user->save();



        //User::where ('id', 1)->delete();
        
         //User::where ('id', 4)->update(['name' => 'frailabigmama']);

        // $user = User::all();

         //return $data;

        //  $user = User::all();  

        //  return $user;

        return view('/master');



    }
}

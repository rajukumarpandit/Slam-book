<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Slambook;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request){
        $email = $request->email;
        $pass = $request->password;
        $user = User::where('Email', $email)->first();
        if(Hash::check($request->password,$user->Password))
        {

            $slambook = Slambook::where('id', $user->id)->get();
            session()->put('user_id',$user->id);
            return view('dashboard', ['slambook'=>$slambook]);    
        // return view('dashboard',['questions'=>Question::all()]);
        }
        else
            return "Password Wrong ---try again!";
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return view('login');
    }
}

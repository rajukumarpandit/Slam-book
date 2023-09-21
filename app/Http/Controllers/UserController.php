<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request){
        $user = new User();
        $user->Name = $request->name;
        $user->Email = $request->email;
        $user->Password = Hash::make($request->password);
        $user->save();
        return view('login',['login'=>$user]);
    }
    public function forget(Request $request)
    {
        $user=User::where('Email', $request->email)->first();
        $user->Password=Hash::make($request->pass);
        $user->save();
        return view('login');
    }
}

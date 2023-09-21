<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Slambook;
use App\Models\User;
use Illuminate\Http\Request;

class SlambookController extends Controller
{
    public function create(Request $request)
    {
        $slam = new Slambook();
        $slam->Slambook_Name = $request->slambook;
        $slam->id = $request->userid;
        $slam->save();
        $user=User::where('id',$request->userid)->first();
        $slambook = Slambook::where('id', $user->id)->get();

        return view('dashboard', ['slambook'=>$slambook]);  
    }
    public function fetch($id)
    {
        $slam = Slambook::where('Slambook_id', $id)->first();

        $que = Question::where('Slambook_id', $slam->Slambook_id)->get();
        $ans = Answer::where('Slambook_id', $slam->Slambook_id)->get();
        return view('view',['slam'=>$slam, 'questions'=>$que, 'answer'=>$ans]);
        return view('editview',['slam'=>$slam, 'questions'=>$que, 'answer'=>$ans]);
    }
    public function fetch1($id)
    {
        $slam = Slambook::where('Slambook_id', $id)->first();
        $que = Question::where('Slambook_id', $slam->Slambook_id)->get();
        $ans = Answer::where('Slambook_id', $slam->Slambook_id)->get();
        return view('editview',['slam'=>$slam, 'questions'=>$que, 'answer'=>$ans]);
    }
}

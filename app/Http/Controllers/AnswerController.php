<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Slambook;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function answer(Request $request){

        $slambook_ids = $request->slambookid;
        $questions_ids = $request->questionid;
         $answers = $request->answer;

        for ($i=0; $i<count($questions_ids); $i++)
        {
            $ans = new Answer();
            $ans->Slambook_id=$slambook_ids[$i];
                //$ans->Question_id = $questions_ids[$i];
            $ans->Answer = $answers[$i];
            $ans->save();
        }
    }
    
    public function update(Request $request, $aid)
    {
        $ans = Answer::where('Answer_id', $aid)->first();
        $ans->Answer = $request->answer[$aid-1];
        $ans->save();
        $slambook = Slambook::where('id', session('user_id'))->get();
        return view('dashboard', ['slambook'=>$slambook]);  
    }
}

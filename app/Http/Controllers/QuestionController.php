<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Slambook;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function addquestion(Request $request)
    {
        $question = new Question();
        $question->Slambook_id=$request->slambookid;
        $question->Question = $request->question;
        $question->save();
        $slambook = Slambook::where('id', session('user_id'))->get();
        return view('dashboard', ['slambook'=>$slambook]); 
    }
    public function fetch($id)
    {
        $question = Question::where('Slambook_id', $id)->get();
        return view('editquestion',['questions'=>$question]);
    }
    public function fetch1()
    {
        $question = Question::all();
        return view('create',['questions'=>$question]);
    }
    public function update(Request $request, $qid)
    {
        $question = Question::where('Question_id', $qid)->first();
        $question->Question = $request->question[$qid-1];
        $question->save();
        $slambook = Slambook::where('id', session('user_id'))->get();
        return view('dashboard', ['slambook'=>$slambook]);  
    }
}

<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\Friendlist;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SlambookController;
use App\Http\Controllers\UserController;
use App\Models\Slambook;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::get('/register',function (){
    return view('register');
});
Route::get('/newslambook/{userid}', function($userid){
    return view('newslambook',['userid'=>$userid]);
});
Route::get('/add/{slambookid}', function($slambookid){
    return view('add',['slambookid'=>$slambookid]);
});
Route::get('/friendslist', function(){
    return view('friendlist');
});
Route::get('/forget', function(){
    return view('forget');
});


Route::get('/create', [QuestionController::class, 'fetch1']);
Route::get('/view/{id}', [SlambookController::class, 'fetch']);
Route::get('/editview/{id}', [SlambookController::class, 'fetch1']);
Route::get('/editquestion/{id}',[QuestionController::class, 'fetch']);

Route::post('/logout', [LoginController::class, 'logout']);
Route::post('/create',[SlambookController::class, 'create']);
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/add', [QuestionController::class, 'addquestion']);
Route::post('/editquestion/{qid}', [QuestionController::class, 'update']);
Route::post('/answer', [AnswerController::class, 'answer']);
Route::post('/editview/{aid}', [AnswerController::class, 'update']);
Route::post('/forget', [UserController::class, 'forget']);
Route::post('/friendlists',[Friendlist::class, 'friendlists']);

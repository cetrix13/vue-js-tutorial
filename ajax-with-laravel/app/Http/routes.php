<?php
use App\Task;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    //$data = Task::latest()->get();
    //return view('welcome',compact('data'));
    return view('welcome');
});
Route::get('api/tasks', function(){
  return Task::latest()->get();
});

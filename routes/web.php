<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Task;

// ***** Using Controller *****
// Home
Route::get('/', 'HomeController@index')->name('home');
// Tasks
Route::get('/tasks', 'TasksController@index');
// no need to pass the id as argument here
Route::get('/tasks/{task}', 'TasksController@show');
// Posts:
Route::get('/posts', 'PostController@index')->name('postPage');
Route::get('/posts/create', 'PostController@create');
Route::post('/posts', 'PostController@store');
Route::get('/posts/{post}', 'PostController@show');

// Comments
Route::post('/posts/{post}/comments', 'CommentController@store');

// Authentication
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
Route::get('/login', 'SessionController@create');
Route::post('/login', 'SessionController@store');
Route::get('/logout', 'SessionController@destroy');

// ***** Without Controller *****
// Route::get('/', function () {
//     $name = 'Laravel';
//     // return view('welcome', [
//     //   // 'name' => 'Laravel fan';
//     //   'name' => $name
//     // ]);
//     // ***** The same output with different methods *****
//     return view('welcome', compact('name'));
// });
// Route::get('/tasks', function(){
//
//   // ***** dd(): die and dump *****
//   // dd($id);
//
//   // ***** hardcoding *****
//   // $tasks = [
//   //   'Do the cleaning',
//   //   'Prepare lunch',
//   //   'Watch tutorial videos'
//   // ];
//
//   // ***** with DB query *****
//   // $tasks = DB::table('tasks')->get();
//   // ***** Laravel return the JSON *****
//   // return $tasks;
//
//   // ***** query with Eloquent (model) *****
//   // $tasks = App\Task::all();
//   // ****** with use App\Task *****
//   $tasks = Task::all();
//
//   return view('tasks/index', compact('tasks'));
// });

// Route::get('/tasks/{id}', function($id){
//
//   // ***** dd(): die and dump *****
//   // dd($id);
//
//   // ***** with DB query *****
//   // $task = DB::table('tasks')->find($id);
//   //dd($task);
//   // ****** Using Eloquent *****
//   $task = App\Task::find($id);
//
//   return view('tasks/item', compact('task'));
//   });

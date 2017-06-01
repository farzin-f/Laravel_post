<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class TasksController extends Controller
{
    // ***** this method is called controller action *****
    public function index()
    {
      $tasks = Task::all();

      return view('tasks/index', compact('tasks'));
    }

    // public function item($task)
    // {
    //   $task = Task::find($task);
    //
    //   return view('tasks/item', compact('task'));
    // }

    // ***** with model binding *****
    public function show(Task $task)
    {
      return view('tasks/show', compact('task'));
    }
}

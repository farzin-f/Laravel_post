<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
      $name = 'Laracasts';
      return view('welcome', compact('name'));
    }
}

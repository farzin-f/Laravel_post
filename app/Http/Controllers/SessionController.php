<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{

    public function __construct()
    {
      $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create()
    {
      return view('sessions/create');
    }

    public function store()
    {
      /* Authenticate user and sign in with attempt()
      * If not match, return back to login
      */

      // $email = request('email');
      // $password = request('password');

        // if(! auth()->attempt(['email'=>$email, 'password'=>$password])) {
        if(! auth()->attempt(request(['email', 'password']))) {
          // dd(request(['email','password']));
          return back()->withErrors([
            // 'message' => 'Please check your credentials and try again.'
            'message' => request(['email','password'])
          ]);
        }

      /* Redirect to posts page if login succeed */
      return redirect('posts/');
    }

    public function destroy ()
    {
      auth()->logout();
      return redirect()->home();
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
      return view('registration/create');
    }

    public function store()
    {
      /* Validate form */
      $this->validate(request(), [
        'name' => 'required|max:50',
        'email' => 'required|email',
        'password' => 'required|max:50|confirmed'
      ]);

      /* Create and save user */
      $user = User::create([
        'name' => request('name'),
        'email' => request('email'),
        'password' => bcrypt(request('password'))
      ]);

      // dd($user);

      /* Log in */
      // Using ??
      // \Auth::login();
      // Using helper function
      auth()->login($user);

      /* Redirect to a page using the naming method of routes*/
      return redirect('posts/');

    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;


class RegisterController extends Controller
{

    public function showRegistrationForm()
    {
        return view('auth.register');
    }
   public function register()
   {

       return redirect()->route('login')->with('success','confirm email please');

   }
}

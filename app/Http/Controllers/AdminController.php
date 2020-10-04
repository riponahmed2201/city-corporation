<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function showLoginForm()
    {
      $user = Auth::user();
      //return $user;
      if($user)
      {
          return redirect('dashboard');
      }
      else{
        return view('auth.login');
      }

    }
}

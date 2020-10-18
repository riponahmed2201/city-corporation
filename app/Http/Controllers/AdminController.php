<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
      $all_complains = DB::table('complains')->get();
        return view('dashboard',compact('all_complains'));
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
    public function login(Request $request)
    {
      return view('login');
    } //
}

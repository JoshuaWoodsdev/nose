<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContextController extends Controller
{  
    public function index()
   {
    return view('context');
   }
}
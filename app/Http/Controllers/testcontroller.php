<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testcontroller extends Controller
{
    // metodo de inicio

    function welcome(){

      return view('welcome');
    }
}

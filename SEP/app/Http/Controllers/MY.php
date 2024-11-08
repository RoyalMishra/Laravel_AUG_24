<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MY extends Controller
{
    function fun ($name)
    {
        return view('components.My',['name'=>$name]);
    }
}

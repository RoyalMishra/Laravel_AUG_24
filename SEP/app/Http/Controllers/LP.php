<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LP extends Controller
{
    function LP($name)
    {
        return view('components.LP',['name'=>$name]);
    }
}

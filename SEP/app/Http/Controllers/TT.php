<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use Illuminate\Validation\Rules\Exists;

class TT extends Controller
{
    function TT($name)
    {
      if (view()->exists('view.name'))
      {
          
      }('components.TT')
      {
        return View('components.TT',['name'=>$name]);
 
         }
         else {
            return "Page Does not Exist";
         }
           }
}

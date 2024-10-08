<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MyController;
// Creating Routes For the Controller 1
Route::get('user',[UserController::class,'getUser']);

// Creating Routes For the Controller 2
// Syntax Neeche jaise diya hai, वैसे ही करना है 
//  रऔट लिखने के बाद हमेशा गेट मेथड ही लिखना है , फिर कन्ट्रोलर का नाम और हमेशा array  में ही सब लिखना हैं ।


Route::get('/usr',[MyController::class,'usrname']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/Home', function () {
    return view('Home');
});

Route::get('/About', function () {
    return view('About');
});
Route::get('/Contact', function () {
    return view('Contact');
});


Route::get('/', function () {
    return "This is the Test Page";
});

// Another way of returning view page

Route::view('/direct','direct');

// Paasing User Value in the Url

Route::get('/name/{name}', function($name)
{   
    return view('User_name',['name'=>$name]);
}
);

// redirect method
Route::redirect('original_name','new_page' );



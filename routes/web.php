<?php

use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
//     Log::info("This is CloudWatch")
    Log::info("Hello user");
    Mail::to('testdevops693@gmail.com')->send(new TestMail()
    return view('welcome');
});

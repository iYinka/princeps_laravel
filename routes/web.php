<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    Log::info("This is CloudWatch")
    return view('welcome');
});

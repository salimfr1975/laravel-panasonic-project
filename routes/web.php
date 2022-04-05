<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User_Controller;
use App\Http\Controllers\Product_Controller;


Route::get('/login', function () {
    return view('login');
});

Route::post('/login',[User_Controller::class,'login']);
Route::get('/',[Product_Controller::class,'index']);


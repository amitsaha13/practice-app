<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/sms', function () {
    return view('sms');
});

Route::post('change-status',[DemoController::class, 'changeStatus'])->name('changeStatus');

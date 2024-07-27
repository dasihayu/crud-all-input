<?php

use App\Http\Controllers\FormInputController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("form", FormInputController::class);
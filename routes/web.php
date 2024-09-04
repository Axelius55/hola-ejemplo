<?php

use App\Http\Controllers\TodosLosControllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/XD',[TodosLosControllers::class, 'hola']);

Route::get('/index/{nombre}',[TodosLosControllers::class, 'index']);
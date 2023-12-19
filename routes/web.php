<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Project_uasController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource("/concert", Project_uasController::class);
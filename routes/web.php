<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ProfileController::class, 'home']);
Route::get('/About', [ProfileController::class, 'about']);
Route::get('/Projcts', [ProfileController::class, 'projects']);
Route::get('/Contact', [ProfileController::class, 'contact']);


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;


Route::get('/', [MoviesController::class, 'index'])->name('movies.index');

Route::get('/movies/{movie}',[App\Http\Controllers\MoviesController::class, 'show'])->name('movies.show');



Route::get('/actors', [App\Http\Controllers\ActorsController::class, 'index'])->name('actors.index');

Route::get('/actors/{actor}',[App\Http\Controllers\ActorsController::class, 'show'])->name('actors.show');



Route::get('/actors/page/{page?}', [App\Http\Controllers\ActorsController::class, 'index']);



Route::get('/tv', [App\Http\Controllers\TvController::class, 'index'])->name('tv.index');

Route::get('/tv/{tv}',[App\Http\Controllers\TvController::class, 'show'])->name('tv.show');

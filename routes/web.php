<?php


use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [HomepageController::class, 'homepage'])->name('home');


Route::get('/Teams', [TeamController::class,'index'])->name('Teams');

Route::get('/Teams/{slug}', [TeamController::class,'show'])->name('Teams.show');




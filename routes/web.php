<?php

use App\Http\Controllers\AdminDahboardController;
use App\Http\Controllers\FormationsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

// Amin Dashboard
Route::get("/Admin", [AdminDahboardController::class, 'index'])->name('admin.dashboard');

//Create Formations
Route::get("/Admin/Fromations/Create", [FormationsController::class, 'create'])->name("admin.formations.create");

//get all formations 
Route::get("/Admin/Fromations", [FormationsController::class, "index"])->name("admin.fomations");
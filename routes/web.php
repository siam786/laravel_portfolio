<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[PageController::class,'Home'])->name('home');
Route::get('/about',[PageController::class,'About'])->name('about');
Route::get('/project',[PageController::class,'Project'])->name('project');
Route::get('/contact',[PageController::class,'Contact'])->name('contact');
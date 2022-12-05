<?php

use App\Http\Controllers\frontend\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[PageController::class,'home'])->name('home');

Route::get('/about-us',[PageController::class,'about'])->name('about');

Route::get('/contact',[PageController::class,'contact'])->name('contact');

Route::get('/gallary', [PageController::class,'gallary'])->name('gallary');

Route::get('/gallary/{id}', [PageController::class,'album'])->name('album');

Route::get('/new-student', [PageController::class,'new'])->name('new');

Route::get('/student-details', [PageController::class,'details'])->name('details');

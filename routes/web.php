<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/blogs', [BlogController::class,'index'])->name('blogs');
Route::post('/blog', [BlogController::class,'store'])->name('store.blog');
Route::get('/blog/create', [BlogController::class,'create'])->name('create.blog');

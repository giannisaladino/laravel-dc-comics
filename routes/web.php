<?php

use App\Http\Controllers\PageController;
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
    return view('welcome');
})->name('welcome');

// COMICS CRUD

    // index
    Route::get('/comics', [PageController::class,'index'])->name('comics.index');

    Route::get('/comics/create', [PageController::class, 'create'])->name('comics.create');

    // show
    // Route::get('/comics/{comic}', [PageController::class,'show'])->name('comics.show');

    Route::post('/comics', [PageController::class, 'store'])->name('comics.store');


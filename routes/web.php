<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/upload', [\App\Http\Controllers\PDFUploadController::class, 'upload'])->name('upload');
Route::post('/parse', [\App\Http\Controllers\PDFUploadController::class, 'parse'])->name('parse');

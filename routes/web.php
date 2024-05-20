<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/upload', [\App\Http\Controllers\PDFUploadController::class, 'upload'])->name('upload');
Route::post('/parse', [\App\Http\Controllers\PDFUploadController::class, 'parse'])->name('parse');


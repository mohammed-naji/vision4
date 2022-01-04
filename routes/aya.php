<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('form3', [FormController::class, 'form3'])->name('form3');
Route::post('form3', [FormController::class, 'form3Submit']);

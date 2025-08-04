<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;


Route::view('/', 'welcome')->name('welcome');
Route::get('/feedback', [FeedbackController::class, 'create'])->name('feedback.create');
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
Route::get('/feedback/list', [FeedbackController::class, 'index'])->name('feedback.index');


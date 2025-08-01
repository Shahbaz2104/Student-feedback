<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/feedback', [FeedbackController::class, 'showFeedbackForm']);
Route::post('/feedback', [FeedbackController::class, 'showFeedbackForm'])->name('feedback.submit');
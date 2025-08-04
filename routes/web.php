<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'welcome')->name('home');

Route::get('/form', [FeedbackController::class, 'showFeedbackForm']);
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.submit');
Route::get('/feedbacks', [FeedbackController::class, 'listFeedback'])->name('feedback.list');

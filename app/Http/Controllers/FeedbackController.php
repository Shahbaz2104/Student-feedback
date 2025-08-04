<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function showFeedbackForm(Request $request)
    {
        return view('feedback');
        return $request->all();

    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'department' => 'nullable|string|max:50',
        'rating' => 'required|integer|between:1,5',
        'recommend' => 'nullable|boolean',
        'message' => 'nullable|string|max:1000',
    ]);

    Feedback::create([
        'name' => $request->name,
        'email' => $request->email,
        'department' => $request->department,
        'rating' => $request->rating,
        'recommend' => $request->has('recommend'), // checkbox: true if checked
        'message' => $request->message,
    ]);

    return view('welcome')->with('success', 'Feedback submitted successfully!');
}

public function listFeedback()
{
    $feedbacks = Feedback::all();
    return view('feedbacklist', compact('feedbacks'));  
    
}
}

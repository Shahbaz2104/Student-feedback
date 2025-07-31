<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function showFeedbackForm()
    {
        return view('feedback');
    }

    // public function submitFeedback(Request $request)
    // {
    //     // Validate and process the feedback submission
    // }
}

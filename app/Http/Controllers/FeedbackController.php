<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function showFeedbackForm(Request $request)
    {
        // return view('feedback');
        return $request->all();

    }

    // public function submitFeedback(Request $request)
    // {
    //     // Validate and process the feedback submission
    // }
}

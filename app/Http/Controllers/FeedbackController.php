<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Rules\NoOffensiveWords;


   class FeedbackController extends Controller
{
    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'department' => 'required|string|in:CS,IT,SE',
            'rating' => 'required|integer|between:1,5',
            'recommend' => 'sometimes|boolean',
            'message' => ['required', 'string', new NoOffensiveWords],
        ]);

        // Convert checkbox value to boolean
        $validated['recommend'] = $request->has('recommend');

        Feedback::create($validated);

        return redirect()->route('feedback.index')
            ->with('success', 'Feedback submitted successfully!');
    }

    public function index()
    {
        $feedbacks = Feedback::latest()->get();
        return view('feedbacks', compact('feedbacks'));
    }
}



    
  



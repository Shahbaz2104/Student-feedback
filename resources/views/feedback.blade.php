
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
<!-- // Student Feedback Form to be added here -->

@extends('layouts.app') <!-- Or use your layout file -->

@section('content')
<div class="container mt-5 p-5 neumorphic-form">
    <h2 class="mb-4 text-center text-danger">Student Feedback Form</h2>
    <form action="/feedback" method="POST">
        @csrf
        
        <!-- Name -->
        <div class="mb-3">
            <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
            <input type="text" name="name" id="name" class="form-control neumorphic-input" required>
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
            <input type="email" name="email" id="email" class="form-control neumorphic-input" required>
        </div>

        <!-- Department -->
        <div class="mb-3">
            <label for="department" class="form-label">Department</label>
            <select name="department" id="department" class="form-select neumorphic-input">
                <option value="CS">Computer Science (CS)</option>
                <option value="IT">Information Technology (IT)</option>
                <option value="SE">Software Engineering (SE)</option>
            </select>
        </div>

        <!-- Rating -->
        <div class="mb-3">
            <label class="form-label d-block">Rating</label>
            @for ($i = 1; $i <= 5; $i++)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="rating" id="rating{{ $i }}" value="{{ $i }}" required>
                    <label class="form-check-label" for="rating{{ $i }}">{{ $i }}</label>
                </div>
            @endfor
        </div>

        <!-- Recommendation -->
        <div class="mb-3 form-check">
            <input type="checkbox" name="recommend" id="recommend" class="form-check-input">
            <label class="form-check-label" for="recommend">Would you recommend this course?</label>
        </div>

        <!-- Feedback -->
        <div class="mb-3">
            <label for="message" class="form-label">Your Feedback</label>
            <textarea name="message" id="message" rows="4" class="form-control neumorphic-input" placeholder="Write your thoughts here..."></textarea>
        </div>

        <!-- Submit -->
        <button type="submit" class="btn btn-danger neumorphic-btn">Submit Feedback</button>
    </form>
</div>






<style>
/* Neumorphism Form Container */
.neumorphic-form {
  background: #e0e0e0;
  border-radius: 30px;
  box-shadow: 8px 8px 20px #bebebe, -8px -8px 20px #ffffff;
}

/* Neumorphism Input Fields */
.neumorphic-input {
  border: none;
  border-radius: 12px;
  padding: 12px;
  background: #e0e0e0;
  box-shadow: inset 4px 4px 8px #bebebe, inset -4px -4px 8px #ffffff;
  transition: all 0.3s ease-in-out;
}

.neumorphic-input:focus {
  outline: none;
  box-shadow: inset 2px 2px 6px #bebebe, inset -2px -2px 6px #ffffff;
}

/* Neumorphic Submit Button */
.neumorphic-btn {
  border: none;
  padding: 12px 30px;
  border-radius: 12px;
  background: #e0e0e0;
  color: #d30000;
  font-weight: bold;
  box-shadow: 6px 6px 12px #bebebe, -6px -6px 12px #ffffff;
  transition: all 0.3s ease;
}

.neumorphic-btn:hover {
  transform: translateY(-2px);
  box-shadow: 2px 2px 6px #bebebe, -2px -2px 6px #ffffff;
  background-color: #f8d7da;
}
</style>



@endsection

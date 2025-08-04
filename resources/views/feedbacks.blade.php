@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">All Feedback Submissions</h1>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($feedbacks->isEmpty())
        <div class="alert alert-info">
            No feedback submissions yet.
        </div>
    @else
        <div class="row">
            @foreach($feedbacks as $feedback)
            <div class="col-md-6 mb-4">
                <div class="card neumorphic-card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $feedback->name }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $feedback->email }}</h6>
                        
                        <div class="mb-2">
                            <strong>Department:</strong> 
                            {{ $feedback->department_full }}
                        </div>
                        
                        <div class="mb-2">
                            <strong>Rating:</strong>
                            @for($i = 1; $i <= 5; $i++)
                                <span class="star {{ $i <= $feedback->rating ? 'filled' : '' }}">★</span>
                            @endfor
                        </div>
                        
                        <div class="mb-3">
                            <strong>Recommend:</strong>
                            <span class="badge bg-{{ $feedback->recommend ? 'success' : 'danger' }}">
                                {{ $feedback->recommend ? 'Yes' : 'No' }}
                            </span>
                        </div>
                        
                        <div class="mb-3">
                            <strong>Feedback:</strong>
                            <p class="card-text">{{ $feedback->message }}</p>
                        </div>
                        
                        <small class="text-muted">
                            Submitted {{ $feedback->created_at->diffForHumans() }}
                            ({{ $feedback->created_at->format('d M, Y - h:i A') }})
                        </small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @endif
</div>

<style>
    .neumorphic-card {
        border-radius: 15px;
        background: #e0e0e0;
        box-shadow:  10px 10px 20px #bebebe, 
                    -10px -10px 20px #ffffff;
        border: none;
        transition: all 0.3s ease;
    }
    
    .neumorphic-card:hover {
        transform: translateY(-5px);
        box-shadow:  15px 15px 30px #bebebe, 
                    -15px -15px 30px #ffffff;
    }
    
    .star {
        color: #ddd;
        font-size: 1.2rem;
    }
    
    .star.filled {
        color: gold;
    }
    
    .badge {
        padding: 0.4em 0.6em;
        border-radius: 12px;
    }
</style>
@endsection
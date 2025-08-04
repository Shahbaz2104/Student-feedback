@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center text-primary">Submitted Feedback</h2>

    @if ($feedbacks->isEmpty())
        <p class="text-center">No feedback has been submitted yet.</p>
    @else
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Rating</th>
                    <th>Recommended</th>
                    <th>Feedback</th>
                    <th>Submitted At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($feedbacks as $index => $feedback)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $feedback->name }}</td>
                        <td>{{ $feedback->email }}</td>
                        <td>{{ $feedback->department }}</td>
                        <td>{{ $feedback->rating }}</td>
                        <td>{{ $feedback->recommend ? 'Yes' : 'No' }}</td>
                        <td>{{ $feedback->message }}</td>
                        <td>{{ $feedback->created_at->format('Y-m-d H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection

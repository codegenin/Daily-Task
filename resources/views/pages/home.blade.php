@extends('layouts.master')

@section('content')
    <h1>Plan your work, and work your plan!</h1>
    <p class="lead">
        If you don't design you own life plan,
        chances are you'll fall into someone elses plan.
        And guess what they have planned for you? Not much - Jim Rohn
    </p>
    <hr>
    <a href="{{ route('tasks.index') }}" class="btn btn-info">View Tasks</a>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Add New Task</a>
@endsection
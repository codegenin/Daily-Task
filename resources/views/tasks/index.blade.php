@extends('layouts.master')

@section('content')
    <h1>Task for {{ date('F d, Y') }}</h1>
    <p class="lead">
        Here's a list of all your tasks today. <a href="{{ route('tasks.create') }}">Add a new one?</a>
    </p>
    <hr>
    @foreach( $tasks as $task)
        <h3>{{ $task->title }}</h3>
        <p>{{ $task->description }}</p>
        <p>
            <a href="/tasks/{{ $task->slug }}" class="btn btn-info">
                View Task
            </a>
            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">
                Edit Task
            </a>
        </p>
    @endforeach
@endsection
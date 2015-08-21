@extends('layouts.master')

@section('content')
    <h1>Editing {{ $task->title }}</h1>
    <p class="lead">Edit and save this task below, or <a href="{{ route('tasks.index') }}">go back to all tasks.</a></p>
    <hr>

    @include('layouts.errors')

    <!-- Form Edit Task -->
    <!-- Form Create Task -->
    {!! Form::model($task, ['method' => 'PATCH',
    'route' => ['tasks.update', $task->id]]) !!}
    @include('tasks._form', ['submitButtonText' => 'Update Task'])
    {!! Form::close() !!}
@endsection
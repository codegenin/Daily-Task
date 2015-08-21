@extends('layouts.master')

@section('content')
    <h1>Add a New Task</h1>
    <p class="class">Add to your task list below.</p>
    <hr>
    @include('layouts.errors')

    <!-- Form Create Task -->
    {!! Form::model($task = new App\Task, ['route' => 'tasks.store']) !!}

    @include('tasks._form', ['submitButtonText' => 'Save Task'])

    {!! Form::close() !!}

@endsection
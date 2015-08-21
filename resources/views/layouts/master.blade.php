<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tasks</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style>
        body {
            margin-top: 60px;
        }
    </style>
    @yield('styles')
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ route('home') }}">Daily Tasks</a>
    </div>
    <div class="nav navbar-nav navbar-right">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('tasks.index') }}">Tasks</a></li>
    </div>
  </div>
</nav>

<main>
    <div class="container">
        @include('layouts.success')

        @yield('content')
    </div>
</main>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js" />
@yield('scripts')
</body>
</html>
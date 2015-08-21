@section('styles')
    <link href="/assets/pickadate/themes/default.css" rel="stylesheet">
    <link href="/assets/pickadate/themes/default.date.css" rel="stylesheet">
@endsection

<!-- Title Form Input -->
<div class="form-group">
    {!! Form::label('title', 'Title', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Textarea -->
<div class="form-group">
    {!! Form::label('description', 'Description', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Scheduled At Form Input -->
<div class="form-group">
    {!! Form::label('scheduled_at', 'Schedule On', ['class' => 'control-label']) !!}
    {!! Form::input('date', 'scheduled_at', $task->scheduled_at, [
        'id' => 'scheduled_at', 'class' => 'form-control']) !!}
</div>

<!-- Submit Form Button -->
{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}


@section('scripts')
    <script src="/assets/pickadate/legacy.js"></script>
    <script src="/assets/pickadate/picker.js"></script>
    <script src="/assets/pickadate/picker.date.js"></script>
    <script>
        $(function() {
            $("#scheduled_at").pickadate({
                format: "mmm-d-yyyy"
            });
        });
    </script>
@endsection
@extends('layouts.app')

@section('content')

    <h1>TASKS NEW PAGE</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
        {!! Form::label('status', 'STATUS:') !!}
        {!! Form::text('status') !!}

        {!! Form::label('content', 'TASK:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

@endsection
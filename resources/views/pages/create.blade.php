@extends('layouts.app')
@section('content')
<div class="card align-items-center">
    {!! Form::open(['action' => ['\App\Http\Controllers\PostsContoller@store'],'method'=>'POST']) !!}
    <div class="form-group">
{{Form::label('title', 'Title')}}
{{Form::text('title', '',['class'=>'form-control','placeholder'=>'Title'])}}

    </div>
    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', '',['class'=>'form-control','placeholder'=>'Content'])}}
        <br>
    </div>
    <div class="form-group">
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        <br>
    </div>
    <br>
{!! Form::close() !!}
</div>
@endsection

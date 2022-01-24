@extends('layouts.app')

@section('content')
<h3> Home</h3>
@if(count($posts) > 1)
    @foreach($posts as $post)
    <h2 class="bg-opacity-25 text-black align-content-center">{{$post->title}}</h2>
    <br/>
    <div class="bg-body">{{$post->body}}</div>
        <div class="align-items-center">Date created :{{$post->created_at}}</div>
    @endforeach
@else
    <div class="alert-danger">No post found</div>
@endif
@endsection

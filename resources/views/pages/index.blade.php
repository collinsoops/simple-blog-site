@extends('layouts.app')

@section('content')
<h3> Home</h3>
@if(count($posts) > 1)
    <div class="card">
        <ul class="list-group list-group-flush">
    @foreach($posts as $post)
<li class="list-group-item">
    <h2 class="bg-opacity-25 text-black align-content-center"><a href="/posts/{{$post->id}}"> {{$post->title}}</a></h2>
    <br/>
    <div class="bg-body">{{$post->body}}</div>
        <div class="align-items-center">Date created :{{$post->created_at}}</div>
</li>
    @endforeach
    </ul></div>
@else
    <div class="alert-danger">No post found</div>
@endif
@endsection

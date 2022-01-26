
@extends('layouts.app')

@section('content')
    <div class="card">
        <ul class="list-group list-group-flush">
<li class="list-group-item">
    <h2 class="bg-opacity-25 text-black align-content-center"><a href="/posts/{{$posts->id}}"> {{$posts->title}}</a></h2>
    <br/>
    <div class="bg-body">{{$posts->body}}</div>
        <div class="align-items-center">Date created :{{$posts->created_at}}</div>
</li>
            <li>
                <h5 class="align-self-sm-center"><a href="/">Back</a> </h5>
            </li>
    </ul></div>

@endsection

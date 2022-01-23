@extends('layouts.app')
@section('content')
    <h3>Welcome Home</h3>
    <h4>{{$title}}</h4>
    @if(count($services)>0)
        <ul>
        @foreach($services as $service)
                <li>{{$service}}
                </li>
            @endforeach
            </ul>
    @endif
@endsection

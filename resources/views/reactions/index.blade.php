@extends('layouts.master')


@section('content')
    <ul>
        @foreach($reactions as $reaction)
            <li>{{$reaction->title}}</li>
        @endforeach
    </ul>

@endsection

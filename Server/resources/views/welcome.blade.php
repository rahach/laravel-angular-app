@extends('layout')

@section('content')
    <h1>Welcome {{ $foo }}  {{ $newfoo }}</h1>

    <ul>
    @foreach($tasks as $task)
        <li>{{ $task }}</li>
    @endforeach
    </ul>

@endsection


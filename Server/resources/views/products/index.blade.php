@extends('layout')

@section('content')
    <ul>
    @foreach ($products as $item)
        <li><a href="/products/{{ $item->id }}">{{ $item->name }}</a></li>        
    @endforeach
    </ul>    
@endsection
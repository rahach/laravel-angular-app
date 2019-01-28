@extends('layout')

@section('content')
    <h1>{{ $product->name }}</h1>

    <div>{{ $product->short_description }}</div>
@endsection    


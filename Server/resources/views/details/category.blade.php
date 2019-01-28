@extends('layout')

<ul>
@foreach ($category as $item)
    <li>{{ $item->name }}</li>    
@endforeach
</ul>
@section('title', 'Categories')
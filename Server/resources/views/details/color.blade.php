@extends('layout')

<ul>
@foreach ($color as $item)
    <li>{{ $item->name }}</li>    
@endforeach
</ul>
@section('title', 'Colors')
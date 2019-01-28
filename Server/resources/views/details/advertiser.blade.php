@extends('layout')

<ul>

    @foreach ($advertiser as $item)
        <li>{{ $item->name }}</li>
    @endforeach

</ul>    


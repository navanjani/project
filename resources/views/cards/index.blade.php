@extends('layout')

@section('content')

    <h1>All Cards
    @foreach(as $card)

        <div>
            {{$card -> title}}
        </div>
    @endforeach
@stop
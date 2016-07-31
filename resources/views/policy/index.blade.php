@extends('layout')


@section('content')

    <h1>All Policies</h1>

    @foreach ($cards as $card)

        <div>

           <a href="{{$card->path()}}">  {{$card->name}}  </a>

        </div>


    @endforeach

@stop

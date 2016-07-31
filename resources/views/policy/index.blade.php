@extends('layout')


@section('content')

    <h1>All Policies</h1>

    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    @foreach ($cards as $card)

        <div>

           <a href="{{$card->path()}}">  {{$card->name}}  </a>

        </div>


    @endforeach

@stop

@extends('layout')


@section('content')

    <h1>All Policies</h1>

    @foreach ($cards as $card)

        <div>

            {{$card->name}}


        </div>


    @endforeach

@stop

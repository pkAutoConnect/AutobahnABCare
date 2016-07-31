@extends('layout')


@section('content')

    <h3>Edit Autobahn Care Policy</h3>

    <hr>

    <form method="POST" action="/policies/{{$policies->id}}">

        {{csrf_field()}}

        <input type="hidden" name="_method" value="PUT">

        <div class="form-group">
            <input type="text" name="name" class="form-control" value="{{$policies->name}}"
                   placeholder="Car Owner Name">
        </div>

        <div class="form-group">
            <input type="text" name="premium" class="form-control" value="{{$policies->premium}}"
                   placeholder="Premium amount of policy">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary"> Update policy</button>
        </div>


    </form>

    @if ($errors->any())

        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach

        </ul>

    @endif

        </div>

        </div>


@stop
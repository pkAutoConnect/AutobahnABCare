@extends('layout')


@section('content')

    <div class="row">

        <div class="col-md-6 col-md-offset-3">


            <h3> Add a new Autobahn Care policy </h3>

            <hr>


            <form method="POST" action="/policies">

                {{csrf_field()}}
                <div class="form-group">
                    <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Car Owner Name">
                </div>

                <div class="form-group">
                    <input type="text" name="premium" class="form-control" value="{{old('premium')}}"
                           placeholder="Premium amount of policy">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary"> Add policy</button>
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

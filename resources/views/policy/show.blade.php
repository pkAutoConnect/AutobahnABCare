@extends('layout')


@section('content')

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <h1> {{$policy->name}}  </h1>


            <hr>

            <ul class="list-group">


                <li class="list-group-item">
                    {{$policy->premium}} <br>
                </li>
            </ul>





        </div>
    </div>




@stop

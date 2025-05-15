@extends('user.layout.layout')
@section('content')
    <style>
        .par{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            margin: 100px 0px
        }
        .card {
            width: 25%;
            min-width: 300px;
            min-height: 150px;
            background-color: #f1f0fe ;
            border-radius: 25px;
            text-align: center;
        }
        .card>* {
            margin: auto
        }

    </style>
    <div class="par">
        <div class="main-content card" style="text-align: center;">
            <h4>Your Class<h4>
            <h5> {{$subscribtion->classe->name}} </h5>
        </div>

        <div class="main-content card" style="text-align: center;">
            <h4>VR accesss<h4>
                <p> {{$subscribtion->vr_access == 1 ? 'have access' : 'don\'t have access'}} </p>
        </div>
        <div class="main-content card" style="text-align: center;">
            <h4>End date<h4>
                <p> {{$subscribtion->end_date}} </p>
        </div>
    </div>
    <div style="margin-bottom: 150px ">
        <div class="d-flex justify-content-center gap-3">
            <a href="{{route('prof')}} " class="btn " style="background-color: #7a6ad8;color:white">edit profile</a>
            <a href="" class="btn " style="background-color: #7a6ad8;color:white">Add parent</a>
            <a href="" class="btn " style="background-color: #7a6ad8;color:white">VR access?</a>
        </div>
    </div>
@endsection

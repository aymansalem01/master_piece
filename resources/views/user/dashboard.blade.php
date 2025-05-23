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
                <h5> {{$subscribtion->vr_access == 1 ? 'have access' : 'don\'t have access'}} </h5>
        </div>
        <div class="main-content card" style="text-align: center;">
            <h4>End date<h4>
                <h5> {{$subscribtion->end_date}} </h5>
        </div>
    </div>
    <div style="margin-bottom: 150px ">
        <div class="d-flex justify-content-center gap-3">
            <a href="{{route('prof')}} " class="btn " style="background-color: #7a6ad8;color:white">edit profile</a>
            @if ($parent != null)
            <a  class="btn " style="background-color: #7a6ad8;color:white">your parnet name: {{$parent->parent?->name}}</a>
            @else
            <a href="{{route('parent')}}" class="btn " style="background-color: #7a6ad8;color:white">Add parent</a>
            @endif
            @if ($subscribtion->vr_access == false)
            <a href="" class="btn " style="background-color: #7a6ad8;color:white">VR access?</a>
            @endif
        </div>
    </div>
@endsection

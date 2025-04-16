@extends('user.layout.layout')
@section('content')
    >
    <section class="section courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="row event_box">
                        @foreach ($subjects as $subject )
                        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
                            <div class="events_item">
                                <div class="thumb">
                                    <a href=" {{route('show',$subject->id) }}  "><img src="{{asset('images/'.$subject->image)}}" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>{{$subject->name}}</h4>
                                </div>
                            </div>
                        </a>
                        </div>
                        @endforeach
                    </div>
                </div>
    </section>
@endsection

@extends('user.layout.layout')
@section('content')
    <section style="margin-top: 80px;">
        <div class="container">
            <div class="text-center mb-5">
                <h2>Explore Virtual Science Labs</h2>
                <p>Choose a lab to explore interactive VR learning experiences in science.</p>
            </div>
            <div class="row event_box">
                @foreach ($vrs as $vr)
                    <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
                        <div class="events_item">
                            <div class="thumb">
                                <img src="{{ asset('images/' . $vr->image) }}" alt="" />
                            </div>
                            <a href="{{ $vr->link }}">
                                <div class="down-content">
                                    <h4>{{ $vr->title }}</h4>
                                    <h4>subject: {{ $vr->subject->name }} </h4>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
        </div>
    </section>
@endsection

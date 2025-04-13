@extends('user.layout.layout')
@section('content')
    <section>

        <div class="services ">
            <div class="container">
                <div class="row">
                    @foreach ($classes as $class )
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="main-content" style="text-align: center;">
                                <h4>{{$class->name}}</h4>
                                <div class="main-button " style="text-align: center;">
                                    <a href="{{route('subject',$class->id)}}">go to</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
@endsection

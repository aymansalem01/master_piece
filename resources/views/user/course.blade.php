@extends('user.layout.layout')
@section('content')
<style>

</style>
    <section>
        <div class="text-center mt-5">
            <h2>Select Your Grade</h2>
            <p>Choose the grade level to access subjects and lessons.</p>
        </div>
        <div class="services " >
            <div class="container">
                <div class="row" style="margin-top: 80px">
                    @foreach ($classes as $class )
                    <div class="col-lg-3 col-md-4 col-sm-4">
                        <div class="service-item" style="margin-bottom: 0px; margin-top: 10px" >
                            <div class="main-content" style="text-align: center;    ">
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

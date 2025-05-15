@extends('user.layout.layout')
@section('content')
    <style>

    </style>
    <section>
        <div class="text-center mt-5">
            <h2>Select Your Grade</h2>
            <p>Choose the grade level to access subjects and lessons.</p>
        </div>
        <div class="services ">
            <div class="container">
                <div class="row" style="margin-top: 80px">
                    @foreach ($classes as $class)
                        <div class="col-lg-3 col-md-4 col-sm-4">
                            <div class="service-item">
                                <div class="main-content" style="text-align: center;">
                                    <h4>{{ $class->name }}</h4>
                                    <div class="main-button" style="text-align: center;">
                                        @if (in_array($class->id, $subscribedClassIds))
                                            <a href="{{ route('subject', $class->id) }}" class="btn btn-success">Go to
                                                Subject</a>
                                        @else
                                            <a href="{{ route('store') }}" class="btn btn-primary">Go to Store</a>
                                        @endif
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

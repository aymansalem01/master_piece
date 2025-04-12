@extends('admin.layout.layout')
@section('content')
    <!-- End Navbar -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Feedback </h4>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>ID</th>
                                <th>email</th>
                                <th>comment</th>
                            </thead>
                            <tbody>
                                @foreach ($feedbacks as $feedback )
                                <tr>
                                    <td>{{$feedback->id}}</td>
                                    <td>{{$feedback->email}}</td>
                                    <td>{{$feedback->message}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Subscribe </h4>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>ID</th>
                                <th>email</th>
                            </thead>
                            <tbody>
                                @foreach ($subscribes as $subscribe )
                                <tr>
                                    <td>{{ $subscribe->id}}</td>
                                    <td>{{$subscribe->email}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

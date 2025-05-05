@extends('admin.layout.layout')
@section('content')
    <!-- End Navbar -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">users </h4>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>ID</th>
                                <th>title</th>
                                <th>linke</th>
                            </thead>
                            <tbody>
                                @foreach ( $videos as $video  )
                                <tr>
                                    <td>{{$video->id}}  </td>
                                    <td>{{$video->title}}</td>
                                    <td>{{$video->game_link}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            {!! $videos->links('vendor.pagination.bootstrap-5') !!}
        </div>
    </div>
@endsection

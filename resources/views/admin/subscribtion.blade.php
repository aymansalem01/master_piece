@extends('admin.layout.layout')
@section('content')
    <!-- End Navbar -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Subscribtion </h4>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>User name</th>
                                <th>Class </th>
                                <th>Vr access</th>
                                <th>Start date</th>
                                <th>End date</th>
                                <th>payment id</th>
                            </thead>
                            <tbody>
                                @foreach ($subscribtions as $subscribtion )
                                <tr>
                                    <td>{{$subscribtion->user->name}}</td>
                                    <td>{{$subscribtion->classe->name}}</td>
                                    <td>{{$subscribtion->vr_accesss != 0 ? 'true' : 'false'}}</td>
                                    <td>{{$subscribtion->start_date}}</td>
                                    <td>{{$subscribtion->end_date}}</td>
                                    <td>{{$subscribtion->payment_id}}</td>
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

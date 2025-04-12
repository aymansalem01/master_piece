@extends('admin.layout.layout')
@section('content')
    <!-- End Navbar -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Payment </h4>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th> id </th>
                                <th>User name</th>
                                <th>payment type </th>
                                <th>coupon code</th>
                                <th>payment date</th>
                            </thead>
                            <tbody>
                                @foreach ($payments as $payment )
                                <tr>
                                    <td>{{$payment->id}} </td>
                                    <td>{{$payment->user->name}}</td>
                                    <td>{{$payment->payment_type}}</td>
                                    <td>{{$payment->coupon_id != null ? $payment->coupon->code : 'null'}}</td>
                                    <td>{{$payment->payment_date}}</td>
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

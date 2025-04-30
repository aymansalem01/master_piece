@extends('admin.layout.layout')
@section('content')
    <!-- End Navbar -->
    <div class="content">
        <div class="text-end mb-3">
            <a class="btn adduser" href="{{route('coupon.create')}}">
                <i class="fas fa-user-plus"></i> Add coupons
            </a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">coupons </h4>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>ID</th>
                                <th>coupon code</th>
                                <th>class </th>
                                <th> VR access</th>
                                <th>use at</th>
                                <th>tools</th>
                            </thead>
                            <tbody>
                                @foreach ($coupons as $coupon )
                                <tr>
                                    <td>{{$coupon->id}}</td>
                                    <td>{{$coupon->code}}</td>
                                    <td>{{$coupon->classe->name}} </td>
                                    <td>{{$coupon->vr_access ? 'true' : 'false' }} </td>
                                    <td>{{$coupon->use_at}}</td>
                                    <td>
                                            <div style="display: flex; gap:5px" class="d-flex">
                                            <a href="{{route('coupon.show', $coupon->id)}}" class="btn btn-sm btn-info me-2 iconsh">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{route('coupon.edit', $coupon->id)}}" class="btn btn-sm btn-warning me-2 icone">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{route('coupon.destroy', $coupon->id)}}" method="post" onsubmit="return confirmDelete(event,{{$coupon->id}})">
                                                @csrf
                                                @method('delete')
                                            <button type="submit"  class="btn btn-sm btn-danger delete-btn icond">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                        </div>
                                </td>
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

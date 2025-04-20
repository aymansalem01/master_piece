@extends('admin.layout.layout')
@section('content')
    <!-- End Navbar -->
    <div class="content">
        <div class="text-end mb-3">
            <a class="btn adduser" href="{{route('user.create')}}">
                <i class="fas fa-user-plus"></i> Add user
            </a>
        </div>
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
                                <th>Name</th>
                                <th>email</th>
                                <th>rools</th>
                                <th>tools</th>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($users as $user )
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->role}}</td>
                                    <td>
                                        <div style="display: flex; gap:5px" class="d-flex">
                                            <a href="{{route('user.show',$user->id)}}"
                                                class="btn btn-sm btn-info me-2 iconsh">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{route('user.edit',$user->id)}}"
                                                class="btn btn-sm btn-warning me-2 icone">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{route('user.destroy',$user->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                            <button type="submit" onsubmit="confirmDelete" class="btn btn-sm btn-danger delete-btn icond">
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

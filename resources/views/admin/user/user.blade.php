@extends('admin.layout.layout')
@section('content')
    <!-- End Navbar -->
    <div class="content">
        <form method="GET" action="{{ route('user.index') }}" class="row g-3 mb-4">
            <div class="col-md-4">
                <input type="text" name="email" class="form-control" placeholder="Search by email"
                    value="{{ request('email') }}">
            </div>

            <div class="col-md-4 mt-2">
                <select name="role" class="form-select">
                    <option value="">All Roles</option>
                    <option value="admin" {{ request('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="parent" {{ request('role') == 'parent' ? 'selected' : '' }}>Parent</option>
                    <option value="user" {{ request('role') == 'user' ? 'selected' : '' }}>User</option>
                </select>
            </div>

            <div class="col-md-4 d-grid">
                <button type="submit" class="btn"
                    style="color: white; border-color: #9282ffdd; background-color: #9282ffdd;">
                    <i class="fas fa-filter"></i> Filter
                </button>
            </div>
        </form>
        <div class="text-end mb-3">
            <a class="btn adduser" href="{{ route('user.create') }}">
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
                                    @foreach ($users as $user)
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->role }}</td>
                                        <td>
                                            <div style="display: flex; gap:5px" class="d-flex">
                                                {{-- <a href="{{ route('user.show', $user->id) }}"
                                                    class="btn btn-sm btn-info me-2 iconsh">
                                                    <i class="fas fa-eye"></i>
                                                </a> --}}
                                                <a href="{{ route('user.edit', $user->id) }}"
                                                    class="btn btn-sm btn-warning me-2 icone">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('user.destroy', $user->id) }}" method="post"
                                                    onsubmit="return confirmDelete(event,{{ $user->id }})">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-sm btn-danger delete-btn icond">
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
        <div class="d-flex justify-content-center">
            {!! $users->links('vendor.pagination.bootstrap-5') !!}
        </div>
    </div>
@endsection

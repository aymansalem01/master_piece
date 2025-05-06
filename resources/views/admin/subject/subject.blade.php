@extends('admin.layout.layout')
@section('content')
    <!-- End Navbar -->
    <div class="content">
        <form method="GET" action="{{ route('subject.index') }}" class="row g-3 mb-4">
            <div class="col-md-4">
                <input type="text" name="name" class="form-control" placeholder="Search by subject name"
                    value="{{ request('name') }}">
            </div>
            <div class="col-md-4">
                <select name="classe_id" class="form-select mt-2" style=" border: none;">
                    <option value="">All Classes</option>
                    @foreach ($classes as $class)
                        <option value="{{ $class->id }}" {{ request('classe_id') == $class->id ? 'selected' : '' }}>
                            {{ $class->name }}
                        </option>
                    @endforeach
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
            <a class="btn adduser" href=" {{ route('subject.create') }}">
                <i class="fas fa-user-plus"></i> Add subject
            </a>
        </div>
        <div class="row">
            @foreach ($subjects as $subject)
                <div class="col-md-4">
                    <div class="review-card">
                        <img src="{{ asset('images/' . $subject->image) }}" alt="">
                        <div>
                            <h5 class="category-name"> subject name:{{ $subject->name }}</h5>
                            <p><strong>class name: {{ $subject->classe->name }}</strong> </p>
                            <div class="action-buttons">
                                <div style="display: flex; gap:5px" class="d-flex">
                                    <a href="{{ route('subject.show', $subject->id) }}"
                                        class="btn btn-sm btn-info me-2 iconsh">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('subject.edit', $subject->id) }}"
                                        class="btn btn-sm btn-warning me-2 icone">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('subject.destroy', $subject->id) }}"
                                        onsubmit="return confirmDelete(event,{{ $subject->id }})" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger delete-btn icond">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="d-flex justify-content-center">
            {!! $subjects->links('vendor.pagination.bootstrap-5') !!}
        </div>
    </div>
@endsection

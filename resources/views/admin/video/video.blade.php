@extends('admin.layout.layout')
@section('content')
    <!-- End Navbar -->
    <div class="content">
        <form method="GET" action="{{ route('video.index') }}" class="row g-3 mb-5">
            <div class="col-md-3">
                <input type="text" name="title" class="form-control" placeholder="Search by video name"
                    value="{{ request('title') }}">
            </div>
            <div class="col-md-3">
                <select name="subject" class="form-select mt-2">
                    <option value="">All Subjects</option>
                    <option value="math" {{ request('subject') == 'math' ? 'selected' : '' }}>Math</option>
                    <option value="science" {{ request('subject') == 'science' ? 'selected' : '' }}>Science</option>
                    <option value="chemistry" {{ request('subject') == 'chemistry' ? 'selected' : '' }}>Chemistry
                    </option>
                    <option value="geology" {{ request('subject') == 'geology' ? 'selected' : '' }}>Geology</option>
                    <option value="biology" {{ request('subject') == 'biology' ? 'selected' : '' }}>Biology</option>
                    <option value="Physics" {{ request('subject') == 'Physics' ? 'selected' : '' }}>Physics</option>
                </select>
            </div>
            <div class="col-md-3">
                <select name="classe_id" class="form-select mt-2">
                    <option value="">All Classes</option>
                    @foreach ($classes as $class)
                        <option value="{{ $class->id }}" {{ request('classe_id') == $class->id ? 'selected' : '' }}>
                            {{ $class->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3 d-grid">
                <button type="submit" class="btn "
                    style="color: white; border-color: #9282ffdd;background-color:#9282ffdd"><i class="fas fa-filter"></i>
                    Filter</button>
            </div>
        </form>
        <div class="text-end mb-3">
            <a class="btn adduser" href="{{ route('video.create') }}">
                <i class="fas fa-user-plus"></i> Add video
            </a>
        </div>
        <div class="row">
            @foreach ($videos as $video)
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="review-card">
                        <h5 class="category-name">{{ $video->title }}</h5>
                        <p>{{ $video->subject->name }} </p>
                        <p>{{ $video->subject->classe->name }} </p>
                        <div class="action-buttons">
                            <a href="{{ route('video.show', $video->id) }}" class="btn btn-sm btn-info me-2 iconsh">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('video.edit', $video->id) }}" class="edit-btn"><i
                                    class="fa-solid fa-pen"></i></a>
                            <form action="{{ route('video.destroy', $video->id) }}" method="post"
                                onsubmit="return confirmDelete(event,{{ $video->id }})">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger delete-btn icond">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {!! $videos->links('vendor.pagination.bootstrap-5') !!}
        </div>
    </div>
@endsection

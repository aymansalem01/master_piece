@extends('admin.layout.layout')
@section('content')
    <!-- End Navbar -->
    <div class="content">
        <div class="text-end mb-3">
            <a class="btn adduser" href=" {{route('subject.create')}}">
                <i class="fas fa-user-plus"></i> Add subject
            </a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    @foreach ( $subjects as $subject )
                    <div class="review-card">
                        <img src="{{asset('images/'.$subject->image)}}" alt="">
                    <div>
                    <h5 class="category-name"> subject name:{{$subject->name}}</h5>
                    <p><strong>class name: {{$subject->classe->name}}</strong> </p>
                    <div class="action-buttons">
                        <div style="display: flex; gap:5px" class="d-flex">
                            <a href="{{route('subject.show',$subject->id)}}"
                                class="btn btn-sm btn-info me-2 iconsh">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{route('subject.edit',$subject->id)}}"
                                class="btn btn-sm btn-warning me-2 icone">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{route('subject.destroy',$subject->id)}}" method="post">
                                @csrf
                                @method('delete')
                            <button type="submit" onsubmit="confirmDelete" class="btn btn-sm btn-danger delete-btn icond">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

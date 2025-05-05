@extends('admin.layout.layout')
@section('content')
            <!-- End Navbar -->
            <div class="content">
                <div class="text-end mb-3">
                    <a class="btn adduser" href="{{route('video.create')}}">
                        <i class="fas fa-user-plus"></i> Add video
                    </a>
                </div>
                <div class="row">
                        @foreach ($videos as $video )
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="review-card">
                                <h5 class="category-name">{{$video->title}}</h5>
                                <p>{{$video->subject->name}} </p>
                                <p>{{$video->subject->classe->name}} </p>
                                <div class="action-buttons">
                                    <a href="{{route('video.edit',$video->id)}}" class="edit-btn"><i class="fa-solid fa-pen"></i></a>
                                    <form action="{{route('video.destroy',$video->id)}}" method="post" onsubmit="return confirmDelete(event,{{$video->id}})">
                                        @csrf
                                        @method('delete')
                                    <button type="submit"  class="btn btn-sm btn-danger delete-btn icond">
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

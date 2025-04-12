@extends('admin.layout.layout')
@section('content')
            <!-- End Navbar -->
            <div class="content">
                <div class="text-end mb-3">
                    <a class="btn adduser" href="{{route('class.create')}}">
                        <i class="fas fa-user-plus"></i> Add classes
                    </a>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-4 col-sm-6 mb-4">
                            @foreach ($classes as $class )
                            <div class="review-card">
                                <h5 class="category-name">{{$class->name}}</h5>
                                <p></p>
                                <div class="action-buttons">
                                    <a href="{{route('class.edit',$calss->id)}}" class="edit-btn"><i class="fa-solid fa-pen"></i></a>
                                    <form action="{{route('class.destroy',$class->id)}}" method="post" >
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="delete-btn"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            @endsection

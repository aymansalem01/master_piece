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

                        @foreach ($classes as $class )
                        <div class="col-md-4 col-sm-6 mb-4 " >
                            <div class="review-card">
                                    <img src="{{asset('images/'.$class->image)}}" alt="">
                                <div>
                                <h5 class="category-name">{{$class->name}}</h5>
                                <p> <strong>{{$class->price}}$</strong> </p>
                                <div class="action-buttons">
                                    <a href="{{route('class.edit',$class->id)}}" class="edit-btn"><i class="fa-solid fa-pen"></i></a>
                                    <form action="{{route('class.destroy',$class->id)}}" method="post" onsubmit="return confirmDelete(event , {{ $class->id }} )">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="delete-btn" ><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            @endsection

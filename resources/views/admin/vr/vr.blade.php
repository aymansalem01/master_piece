@extends('admin.layout.layout')
@section('content')
            <div class="content">
                <div class="text-end mb-3">
                    <a class="btn adduser" href="{{route("vr.create")}}">
                        <i class="fas fa-user-plus"></i> Add vrs
                    </a>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            @foreach ($vrs as $vr )
                            <div class="review-card">
                                <img src="{{asset('images/'.$vr->image)}}" alt="">
                            <div>
                            <h5 class="category-name">title: {{$vr->title}}</h5>
                            <p><strong>subject: {{$vr->subject->name}}</strong> </p>
                            <div class="action-buttons">
                                <div style="display: flex; gap:5px" class="d-flex">
                                    <a href="{{route('vr.show',$vr->id)}}"
                                        class="btn btn-sm btn-info me-2 iconsh">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{route('vr.edit',$vr->id)}}"
                                        class="btn btn-sm btn-warning me-2 icone">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{route('vr.destroy',$vr->id)}}" method="post">
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

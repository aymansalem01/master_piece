@extends('admin.layout.layout')
@section('content')
            <div class="content">
                <div class="text-end mb-3">
                    <a class="btn adduser" href="{{route("vr.create")}}">
                        <i class="fas fa-user-plus"></i> Add vrs
                    </a>
                </div>
                <div class="row">
                    @foreach ($vrs as $vr )
                        <div class="col-md-4">
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
                                    <form action="{{route('vr.destroy',$vr->id)}}" method="post" onsubmit=" return confirmDelete(event,{{$vr->id}})" >
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
                        {!! $vrs->links('vendor.pagination.bootstrap-5') !!}
                    </div>
                </div>
            @endsection

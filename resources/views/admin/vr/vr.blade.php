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
                            <div class="  shadow-sm border-0 rounded-lg mb-3 review-card" >
                                <div class="row g-0">
                                    <div class="col-md-4" style="padding: 20px; padding-left:30px" >
                                        <img src="" class="room-img rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <p class="text-muted mb-2">
                                                <strong>title:</strong> <br>
                                                <strong>subject:</strong>  <br>
                                            </p>
                                            <div style="display: flex; gap:5px" class="d-flex">
                                                    <a href=" " class="btn btn-sm btn-info me-2 iconsh">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href=" " class="btn btn-sm btn-warning me-2 icone">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <button type="submit" class="btn btn-sm btn-danger delete-btn icond">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection

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
                    <div class="col-md-12">
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="review-card">
                                <h5 class="category-name">name</h5>
                                <p></p>
                                <div class="action-buttons">
                                    <a href="# " class="edit-btn"><i class="fa-solid fa-pen"></i></a>
                                        <button type="submit" class="delete-btn"><i class="fa-solid fa-trash"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection

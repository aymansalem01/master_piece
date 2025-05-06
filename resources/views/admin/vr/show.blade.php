@extends('admin.layout.layout')

@section('content')
<div class="content">
    <div class="card p-4">
        <h3 class="mb-4">VR Details</h3>

        <div class="mb-3">
            <strong>Title:</strong>
            <p>{{ $vr->title }}</p>
        </div>

        <div class="mb-3">
            <strong>Link:</strong>
            <p>
                <a href="{{ $vr->link }}" target="_blank">{{ $vr->link }}</a>
            </p>
        </div>

        <div class="mb-3">
            <strong>Subject Name:</strong>
            <p>{{ $vr->subject->name }}</p>
        </div>

        <div class="mb-3">
            <strong>Image:</strong><br>
            <img src="{{ asset('images/' . $vr->image) }}" alt="VR Image" class="img-fluid" style="max-width: 300px;">
        </div>

        <a href="{{ route('vr.index') }}" class="btn btn-secondary w-25">
            <i class="fas fa-arrow-left"></i> Back to List
        </a>
    </div>
</div>
@endsection

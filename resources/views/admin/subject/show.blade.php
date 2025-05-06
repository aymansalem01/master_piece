@extends('admin.layout.layout')

@section('content')
<div class="content">
    <div class="card p-4">
        <h3 class="mb-4">Subject Details</h3>

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <strong>Subject Name:</strong>
                    <p>{{ $subject->name }}</p>
                </div>

                <div class="mb-3">
                    <strong>Class Name:</strong>
                    <p>{{ $subject->classe->name }}</p>
                </div>
            </div>

            <div class="col-md-6">
                <strong>Image:</strong>
                <div>
                    <img src="{{ asset('images/' . $subject->image) }}" alt="Subject Image" style="max-width: 100%; height: auto; border-radius: 8px;">
                </div>
            </div>
        </div>

        <div class="mt-4">
            <a href="{{ route('subject.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to List
            </a>
        </div>
    </div>
</div>
@endsection

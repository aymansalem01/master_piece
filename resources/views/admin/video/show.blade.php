@extends('admin.layout.layout')

@section('content')
<div class="content">
    <div class="card p-4">
        <h3 class="mb-4">Video Details</h3>

        <div class="mb-3">
            <strong>Title:</strong>
            <p>{{ $video->title }}</p>
        </div>

        <div class="mb-3">
            <strong>Video Link:</strong>
            <p>
                <a href="{{ $video->video_link }}" target="_blank">
                    {{ $video->video_link }}
                </a>
            </p>
        </div>

        <div class="mb-3">
            <strong>Subject Name:</strong>
            <p>{{ $video->subject->name }}</p>
        </div>

        <div class="mb-3">
            <strong>Has Game:</strong>
            @if ($video->has_game)
                <p class="text-success">Yes -
                    <a href="{{$video->game_link}}" class="btn btn-sm btn-primary">
                        Go to Game
                    </a>
                </p>
            @else
                <p class="text-danger">No</p>
            @endif
        </div>

        <a href="{{ route('video.index') }}" class="btn btn-secondary w-25">
            <i class="fas fa-arrow-left"></i> Back to List
        </a>
    </div>
</div>
@endsection

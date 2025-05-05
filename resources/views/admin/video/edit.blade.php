@extends('admin.layout.layout')

@section('content')
    <style>
        .form-container {
            width: 100%;
            max-width: 400px;
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        .form-control,
        .form-select,
        .btn-custom {
            height: 45px;
            border-radius: 10px;
            font-size: 16px;
            width: 100%;
            color: #333
        }

        .btn-custom {
            background-color: #a92dfc;
            border: none;
            color: white;
            font-weight: bold;
            transition: 0.3s ease;
            width: 100%;
        }

        .btn-custom:hover {
            background-color: #911ede;
            color: white
        }

        .form-container {
            max-width: 500px;
            margin: 50px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            background-image: url("{{ asset('assets/img/create9.jpg') }}");
            background-size: cover;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 40px;
            font-weight: bold;
            color: black;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 20px
        }

        .custom-error {
            background-color: #ffceec;
            font-weight: bold;
            font-size: 14px;
            color: #a49e9e;
            padding: 10px;
            border-radius: 20px;
        }
    </style>

    <div class="form-container">

        <h2>Update Video</h2>
        <form action="{{ route('video.update', $video->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="title">Video Title</label>
                <input type="text" name="title" id="title" class="form-control mb-3" placeholder="Enter video title"
                    value="{{ old('title', $video->title) }}" required>
                @error('title')
                    <div class="custom-error"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="video_link">Video Link</label>
                <input type="text" name="video_link" id="video_link" class="form-control mb-3" placeholder="Enter video link"
                    value="{{ old('video_link', $video->video_link) }}" required>
                @error('video_link')
                    <div class="custom-error"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="subject">Subject</label>
                <select name="subject" id="subject" class="form-select mb-3" required>
                    <option disabled>Select subject</option>
                    @foreach($subjects as $subject)
                        <option value="{{ $subject->id }}" {{ $video->subject_id == $subject->id ? 'selected' : '' }}>
                            {{ $subject->name }} {{$subject->classe->name}}
                        </option>
                    @endforeach
                </select>
                @error('subject')
                    <div class="custom-error"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="game_link">Game Link</label>
                <input type="text" name="game_link" id="game_link" class="form-control mb-3" placeholder="Enter game link"
                    value="{{ old('game_link', $video->game_link) }}">
                @error('game_link')
                    <div class="custom-error"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-custom w-100">Update Video</button>
        </form>

    </div>
@endsection

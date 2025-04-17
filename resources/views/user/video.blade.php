@include('user.layout.header')
{{-- <style>
    /* Sidebar Styles */
    #sidebar {
        background-color: #7a6ad8;
        padding: 1rem;
        min-height: 100vh;
        width: 20%;
    }

    #sidebar .nav-link {
        font-size: 18px;
        color: white;
        transition: background 0.3s ease;
    }

    #sidebar .nav-link:hover {
        background-color: #6a5acd;
        border-radius: 5px;
    }

    /* Main content container */
    .video-container {
        flex-grow: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 80vh;
        padding: 1rem;
        overflow-x: auto;
    }

    .video-inner {
        text-align: center;
        width: 100%;
        max-width: 800px;
    }

    .video-inner iframe {
        width: 100%;
        height: 450px;
        border: none;
    }

    /* Buttons */
    .video-inner .btn {
        background-color: #7a6ad8;
        color: white;
        padding: 10px 20px;
        font-size: 16px;
        border: none;

    }

    .video-inner .btn:hover {
        background-color: #5e50c5;
    }

    /* Responsive */
    @media (max-width: 992px) {
    .d-flex {
        flex-direction: column;
    }

    #sidebar {
        width: 100%;
        min-height: auto;
        order: 2; /* عشان يظهر بعد الناف بار */
    }

    .video-container {
        width: 100%;
        order: 3;
    }

    /* Sidebar as horizontal list */
    #sidebar .nav {
        flex-direction: row !important;
        flex-wrap: wrap;
        justify-content: center;
    }

    #sidebar .nav-item {
        margin-bottom: 10px;
    }

    #sidebar .nav-link {
        font-size: 16px;
        padding: 10px 15px;
        background-color: #6a5acd;
        border-radius: 6px;
        margin: 5px;
    }
}


    @media (max-width: 576px) {
        .video-inner iframe {
            height: 250px;
        }

        .video-inner h1 {
            font-size: 20px;
        }

        .video-inner .btn {
            font-size: 14px;
            padding: 8px 16px;
        }
    }
</style> --}}

<div class="d-flex">
    <div id="sidebar" class="text-white p-3"
        style="min-width:150px;width:20%; min-height: 100vh; background-color:#7a6ad8 ; margin-bottom: -50px;">
        <ul class="nav flex-column " style="gap: 15px">
            @foreach ($videos as $video)
                <li class="nav-item mb-2">
                    <a href="{{ route('vid', $video) }} " class="nav-link text-white" style="font-size: 20px">
                        {{ $video->title }} </a>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 80vh; width: 100%; overflow-x: scroll;">
        <div class="text-center">
            <h1>{{ $show->title }}</h1>
            <!-- Video -->
            <div class="ratio ratio-16x9 mb-4" style=" max-width:800px; min-width:150px ; width: 700px;">
                <iframe src="{{ $show->video_link }}" title="YouTube video" allowfullscreen width="90%" height="auto">
                </iframe>
            </div>
            <!-- Buttons -->
            <div class="d-flex justify-content-center gap-3">
                @if (!empty($show->game_link))
                    <a href="{{ $show->game_link }}" class="btn" style="background-color: #7a6ad8; color: white;">
                        Play Game
                    </a>
                @endif
                {{-- <a href="" class="btn " style="background-color: #7a6ad8;color:white">Button One</a> --}}
            </div>
        </div>
    </div>
</div>

@include('user.layout.chatbot')
@include('user.layout.footer')

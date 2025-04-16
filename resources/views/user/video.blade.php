@include('user.layout.header')
<div class="d-flex">
<div id="sidebar" class="text-white p-3" style="min-width:150px;width:400px; min-height: 100vh; background-color:#7a6ad8 ; margin-bottom: -300px;">
    <ul class="nav flex-column " style="gap: 15px">
        @foreach ($videos as $video )

        <li class="nav-item mb-2">
            <a href="" class="nav-link text-white" style="font-size: 20px" > {{$video->title}} </a>
        </li>
        @endforeach

    </ul>
</div>
<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh; width: 100%;">
    <div class="text-center">
        <!-- Video -->
        <div class="ratio ratio-16x9 mb-4" style="min-width: 150px;width:90% ;margin: auto;">
            <iframe src="{{$show->video_link}}"
                    title="YouTube video"
                    allowfullscreen>
            </iframe>
        </div>
        <!-- Buttons -->
        <div class="d-flex justify-content-center gap-3">
            <a href="" class="btn" style="background-color: #7a6ad8;color:white" >Play game</a>
            {{-- <a href="" class="btn " style="background-color: #7a6ad8;color:white">Button One</a> --}}
        </div>
    </div>
</div>
</div>

@include("user.layout.chatbot")
@include('user.layout.footer')


<?php

namespace App\Http\Controllers\admin;

use App\Models\Video;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::with('subject')->get();
        return view ('admin.video.video',['videos' => $videos]);
    }

    public function create()
    {
        $subjects = Subject::get();
        return view('admin.video.create',['subjects'=>$subjects]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'video_link' => 'required',
            'subject' => 'required',
        ]);
        $has_game = 0;
        if(isset($request->game_link)){
            $has_game = 1;
        }
        $game_link = null;
        if(isset($request->game_link))
        {
            $game_link = $request->video_link;
        }
        Video::create([
            'title' => $request->title,
            'video_link' => $request->video_link,
            'subject_id' => $request->subject,
            'has_game' => $has_game,
            "game_link" => $game_link
        ]);
        return $this->index();
    }

    public function show(string $id)
    {
        $video = Video::with('subject')->find($id);
        return view('admin.video.show',['video' => $video]);
    }
    public function edit(string $id)
    {
        $videos = Video::find($id);
        $subjects = Subject::get();
        return view('admin.video.edit',['videos' => $videos, 'subjects' => $subjects]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'video_link' => 'required',
            'subject' => 'required',
        ]);
        $has_game = false;
        if(isset($request->game_link)){
            $has_game = true;
        }
        $game_link = null;
        if(isset($request->game_link))
        {
            $game_link = $request->video_link;
        }
        Video::find($id)->updated([
            'title' => $request->title,
            'video_link' => $request->video_link,
            'subject_id' => $request->subject,
            'has_game' => $has_game,
            "game_link" => $game_link
        ]);
        return $this->index();
    }
    public function destroy(string $id)
    {
        Video::destroy($id);
        return $this->index();
    }
}

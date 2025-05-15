<?php

namespace App\Http\Controllers\admin;

use App\Models\Video;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Classe;

class VideoController extends Controller
{
    public function index(Request $request)
    {
        $query = Video::query()->with(['subject']);

        if ($request->filled('title')) {
            $query->where('title', 'LIKE', '%' . $request->title . '%');
        }

        if ($request->filled('subject_id')) {
            $query->where('subject_id', $request->subject_id);
        }

        if ($request->filled('classe_id')) {
            $query->whereHas('subject.classe', function ($q) use ($request) {
                $q->where('id', $request->classe_id);
            });
        }
        $videos = $query->paginate(9)->appends($request->query());
        $subjects = Subject::with('classe')->get();
        $classes = Classe::get();
        return view('admin.video.video', ['videos' => $videos, 'subjects' => $subjects, 'classes' => $classes]);
    }

    public function create()
    {
        $subjects = Subject::with('classe')->get();
        return view('admin.video.create', ['subjects' => $subjects]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'video_link' => 'required',
            'subject' => 'required',
        ]);
        $has_game = false;
        $game_link = null;
        if (isset($request->game_link)) {
            $has_game = true;
            $game_link = $request->game_link;
        }
        Video::create([
            'title' => $request->title,
            'video_link' => $request->video_link,
            'subject_id' => $request->subject,
            'has_game' => $has_game,
            "game_link" => $game_link
        ]);
        return redirect()->back()->with('success', 'Video added successfully!');
    }

    public function show(string $id)
    {
        $video = Video::with('subject')->find($id);
        return view('admin.video.show', ['video' => $video]);
    }
    public function edit(string $id)
    {
        $video = Video::find($id);
        $subjects = Subject::with('classe')->get();
        return view('admin.video.edit', ['video' => $video, 'subjects' => $subjects]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'video_link' => 'required',
            'subject' => 'required',
        ]);
        $has_game = false;
        $game_link = null;
        if (isset($request->game_link)) {
            $has_game = true;
            $game_link = $request->game_link;
        }
        Video::find($id)->update([
            'title' => $request->title,
            'video_link' => $request->video_link,
            'subject_id' => $request->subject,
            'has_game' => $has_game,
            "game_link" => $game_link
        ]);
        return redirect()->back()->with('success', 'Video updated successfully!');
    }
    public function destroy(string $id)
    {
        Video::destroy($id);
        return redirect()->back()->with('success', 'Video deleted!');
    }
}

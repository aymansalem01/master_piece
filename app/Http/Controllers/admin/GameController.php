<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $videos = Video::where('has_game','!=',0)->paginate(10);
        return view('admin.game.games',['videos' => $videos]);
    }


}

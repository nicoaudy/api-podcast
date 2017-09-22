<?php

namespace App\Http\Controllers;

use App\Podcast;

class PodcastController extends Controller
{
    public function index()
    {
        $podcasts = Podcast::all();
        return $podcasts;
    }

    public function show($id)
    {
        $podcast = Podcast::find($id);
        return $podcast;
    }
}

<?php

namespace App\Http\Controllers;

use App\Podcast;
use App\Transformers\PodcastTransformer;

class PodcastController extends Controller
{
    public function index()
    {
        $podcasts = Podcast::all();

        return fractal($podcasts, new PodcastTransformer())->toArray();
    }

    public function show($id)
    {
        $podcast = Podcast::find($id);
        return $podcast;
    }
}

<?php

namespace App\Http\Controllers;

use App\Podcast;
use App\Transformers\PodcastTransformer;

class PodcastController extends Controller
{
    public function index()
    {
        $podcasts = Podcast::latest()->paginate(1);
        return fractal($podcasts, new PodcastTransformer())->toArray();
    }

    public function show($id)
    {
        $podcast = Podcast::find($id);
        if (!$podcast) {
            return response(null, 404);
        }
        return fractal($podcast, new PodcastTransformer())->toArray();
    }
}

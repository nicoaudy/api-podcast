<?php

use App\Podcast;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PodcastsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Podcast::create([
            'title' => 'Jeffrey Way - Vue.js Tactics for Server-Side Web Apps',
            'description' => 'In this episode, Adam is joined by Jeffrey Way of Laracasts to share some tips and tricks for using Vue.js elegantly with traditional server-side web apps.',
            'file_mp3' => 'http://audio.simplecast.com/0ea5031d.mp3',
            'file_ogg' => 'URL_TO_OGG',
            'created_at' => Carbon::now(),
        ]);
        Podcast::create([
            'title' => 'Taylor Otwell - Testing Laravel Applications',
            'description' => 'In this episode, Adam is joined by Taylor Otwell, the creator of Laravel, to talk about their approaches to testing Laravel applications.',
            'file_mp3' => 'http://audio.simplecast.com/e7b92558.mp3',
            'file_ogg' => 'URL_TO_OGG',
            'created_at' => Carbon::now(),
        ]);
        Podcast::create([
            'title' => 'Justin Jackson - Making a Living From Your Own Projects',
            'description' => 'In this episode, Adam is joined by Justin Jackson to talk about how to start working towards making a full-time living from your own projects.',
            'file_mp3' => 'http://audio.simplecast.com/8e3b4813.mp3',
            'file_ogg' => 'URL_TO_OGG',
            'created_at' => Carbon::now(),
        ]);
    }
}

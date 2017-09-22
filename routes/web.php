<?php

$router->get('/key', function () {
    return str_random(32);
});

$router->get('/podcasts', 'PodcastController@index');
$router->get('/podcasts/{id}', 'PodcastController@show');

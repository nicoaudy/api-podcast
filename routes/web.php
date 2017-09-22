<?php

$router->get('/key', function () {
    return str_random(32);
});

$router->get('/', function () use ($router) {
    return $router->app->version();
});

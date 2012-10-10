<?php

require_once __DIR__.'/bootstrap.php';

$app->get('/', function() use ($app) {
    return $app['twig']->render('index.html.twig');
})->bind('homepage');

$app->get('/cv', function() use ($app) {
    return $app['twig']->render('cv.html.twig');
})->bind('cv');

$app->get('/tee', function() use ($app) {
    return $app['twig']->render('tee.html.twig');
})->bind('tee');

$app->get('/figurines', function() use ($app) {
    return $app['twig']->render('figurines.html.twig');
})->bind('figurines');
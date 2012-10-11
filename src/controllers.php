<?php

require_once __DIR__.'/bootstrap.php';

use Symfony\Component\Yaml\Yaml;

$app->get('/', function() use ($app) {
    return $app['twig']->render('index.html.twig');
})->bind('homepage');

$app->get('/cv', function() use ($app) {
    return $app['twig']->render('cv.html.twig');
})->bind('cv');

$app->get('/tee', function() use ($app) {
    $tees = Yaml::parse(__DIR__ . '/Resources/data/tees.yml');

    return $app['twig']->render('tee.html.twig', array('tees' => $tees['tees']));
})->bind('tee');

$app->get('/figurines', function() use ($app) {
    $figurines = Yaml::parse(__DIR__ . '/Resources/data/figurines.yml');

    return $app['twig']->render('figurines.html.twig', array('figurines' => $figurines['figurines']));
})->bind('figurines');
<?php

require_once __DIR__.'/../vendor/autoload.php';

use Silex\Application;

use Silex\Provider\TwigServiceProvider;
use Silex\Provider\UrlGeneratorServiceProvider;

$app = new Application();
$app->register(new TwigServiceProvider(),array('twig.path' => __DIR__.'/Resources/views/'));
$app->register(new UrlGeneratorServiceProvider());
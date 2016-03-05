<?php

use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;

// Register global error and exception handlers
ErrorHandler::register();
ExceptionHandler::register();

// Register service providers
$app->register(new Silex\Provider\DoctrineServiceProvider());
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());


// Register services
$app['dao.category'] = $app->share(function ($app) {
    return new ColtCuddler\DAO\CategoryDAO($app['db']);
});

$app['dao.plush'] = $app->share(function ($app) {
    return new ColtCuddler\DAO\PlushDAO($app['db']);
});

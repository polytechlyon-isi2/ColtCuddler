<?php


// Home page
$app->get('/', function () use ($app) {
    $genders = $app['dao.gender']->findAll();
    return $app['twig']->render('index.html.twig', array('genders' => $genders));
  })->bind('home');

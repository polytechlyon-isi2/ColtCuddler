<?php

// Home page
$app->get('/', function () use ($app) {
    $categories = $app['dao.category']->findAll();
    return $app['twig']->render('index.html.twig', array('categories' => $categories));
  })->bind('home');

// Category page
$app->get('/category/{id}', function ($id) use ($app) {
    $categories = $app['dao.category']->findAll();
    $category = $app['dao.category']->findFromId($id);
    $plushies = $app['dao.plush']->findAllFromCategory($id);
    return $app['twig']->render('category.html.twig', array('categories' => $categories, 'plushies' => $plushies, 'category' => $category));
  })->bind('category');

<?php

// Doctrine (db)
$app['db.options'] = array(
    'driver'   => 'pdo_mysql',
    'charset'  => 'utf8',
    'host'     => 'localhost',
    'port'     => '3306',
    'dbname'   => 'ColtCuddler',
    'user'     => 'coltcuddler_user',
    'password' => 'secret',
);
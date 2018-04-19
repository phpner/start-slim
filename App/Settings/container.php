<?php

use Slim\Container;

/* @var \Slim\App $app */
$container = $app->getContainer();
/**
 * @return \Slim\Http\Environment
 */
// Activating routes in a subfolder
$container['environment'] = function () {
    $scriptName = $_SERVER['SCRIPT_NAME'];
    $_SERVER['SCRIPT_NAME'] = dirname(dirname($scriptName)) . '/' . basename($scriptName);
    return new Slim\Http\Environment($_SERVER);
};
/**
 * Laravel Eloquent
 */
$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();
//Container untuk database
$container['db'] = function ($container) use ($capsule){
    return $capsule;
};
/**
 * @param $container
 * @return \Philo\Blade\Blade
 * Laravel blade
 */
$container['view'] = function ($container)
{
    $path = __DIR__."/../View/";
    $cache = __DIR__."/../../Cache";
    return  new \Philo\Blade\Blade($path, $cache);
};


<?php
namespace App;
use Slim\Http\Request;
use Slim\Http\Response;

$app->get('/', function (Request $request, Response $response) use ($app) {
    echo $this->view->view()->make('layout')->render();

    return $response;
})->setName('root');

$app->get('/hello', '\App\Controllers\HomeController:index');
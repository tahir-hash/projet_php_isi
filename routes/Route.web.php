<?php

use App\Core\Router;
use App\Controller\ProjetController;
use App\Exception\RouteNotFoundException;


$router = new Router;
$router->route('/',[ProjetController::class,"index"]);
$router->route('/projet-create',[ProjetController::class,"create"]);
$router->route('/projet-store',[ProjetController::class,"store"]);
$router->route('/projet-edit',[ProjetController::class,"edit"]);
$router->route('/projet-update',[ProjetController::class,"update"]);
$router->route('/projet-delete',[ProjetController::class,"delete"]);



try {
  $router->resolve();
} catch (RouteNotFoundException $ex) {
  echo $ex->message; 
}
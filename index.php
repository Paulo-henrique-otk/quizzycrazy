<?php

use CoffeeCode\Router\Router;

require __DIR__ . "/vendor/autoload.php";

$router = new Router(URL);
$router->namespace("App\Controllers");

ob_start();

$router->group(null);
$router->get("/","Screens:home","s.home");
$router->get("/create","Screens:create","s.create");
$router->get("/all","Screens:allquizes","s.all");
$router->get("/sucess","Screens:sucess","s.sucess");


$router->get("/error/{error}","Screens:error");

ob_end_flush();
$router->dispatch();

if($router->error()){
$router->redirect("/error/{$router->error()}");
}


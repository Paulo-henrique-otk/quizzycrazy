<?php

use CoffeeCode\Router\Router;

require __DIR__ . "/vendor/autoload.php";

$router = new Router(URL);
$router->namespace("App\Controllers");

ob_start();
//Screens Routes
$router->group(null);
$router->get("/","Screens:home","s.home");
$router->get("/create","Screens:create","s.create");
$router->get("/all","Screens:allquizes","s.all");
$router->get("/sucess","Screens:sucess","s.sucess");
$router->get("/play/{code}","Screens:play","s.play");
//Post Routes
$router->post("/note","QuizController:Verifynote","q.note");
$router->post("/search","QuizController:search","q.search.post");
$router->post("/save","QuizController:saveQuiz","save.q");
//Error Route
$router->get("/error/{error}","Screens:error","s.error");
ob_end_flush();
$router->dispatch();

if($router->error()){
$router->redirect("/error/{$router->error()}");
}


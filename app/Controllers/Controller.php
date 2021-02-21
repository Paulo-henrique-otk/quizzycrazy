<?php
namespace App\Controllers;

use CoffeeCode\Router\Router;
use League\Plates\Engine;

abstract class Controller{
  /** @var Engine */
  protected $view;
  /** @var Router */
  protected $router;

  function __construct($router,string $directory = __DIR__ . "/../views")
  {
    $this->view = Engine::create($directory,"php");
    $this->router = $router;
    $this->view->addData(["router"=>$router]);
  }

}
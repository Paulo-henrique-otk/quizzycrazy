<?php
namespace App\Controllers;

use CoffeeCode\DataLayer\DataLayer;
use CoffeeCode\Router\Router;
use League\Plates\Engine;
use Source\Factorys\QuizFactory;

abstract class Controller{
  /** @var Engine */
  protected $view;
  /** @var Router */
  protected $router;
  /** @var QuizFactory */
  protected $quizFactory;

  function __construct($router,string $directory = __DIR__ . "/../views")
  {
    $this->quizFactory = new QuizFactory();
    $this->view = Engine::create($directory,"php");
    $this->router = $router;
    $this->view->addData(["router"=>$router]);
  }
  protected function showScreen(string $screenName,
  array $screenData = null):string{
  if($screenData){
  return $this->view->render($screenName,$screenData);
  }
  return $this->view->render($screenName);
  } 
  protected function MakeInstaceOfQuiz():DataLayer{
  return $this->quizFactory->MakeInstace();
  }
}
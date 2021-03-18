<?php
namespace App\Controllers;
use Source\Models\Quiz;
use Source\Validators\Error404Validation;

class Screens extends Controller{

  function __construct($router)
  {
  parent::__construct($router);
  }
  public function home():void{
  $quizes = $this->MakeInstaceOfQuiz();
  echo $this->showScreen("home",["quizes"=>$quizes->find()->fetch(true)]);
  }
  public function create():void{
  echo $this->showScreen("create");
  }
  public function allquizes():void{
  $quizes = ($this->MakeInstaceOfQuiz())->find()->fetch(true);
  echo  $this->showScreen("allquizes",["quizes"=>$quizes]);
  }
  public function sucess():void{
  echo  $this->showScreen("sucess");
  }
  public function play(array $data):void{
  $code = $data["code"];
  $quiz = ($this->MakeInstaceOfQuiz())->find("code =:e","e={$code}")
  ->limit(15)
  ->fetch();
  if(!empty($quiz)){
  echo $this->showScreen("playQuiz",["quiz"=>$quiz]);
  }
  else{
  $this->router->redirect($this->router->route('s.error', ["error"=>400]));
  }
  }
  public function error(array $data):void{
  $errorNumber = filter_var($data["error"],FILTER_VALIDATE_INT);
  if(Error404Validation::is404Error($errorNumber)){
  echo $this->showScreen("error404");
  }
  else{
  echo $this->showScreen("error",["errorNumber"=>$errorNumber]);
  }
  }
}
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
    $quizes =$this->MakeInstanceOfQuiz()->find()->limit(15)->order("code DESC")->fetch(true);
    echo $this->showScreen("home",["quizes"=>$quizes]);
  }
  public function create():void{
  echo $this->showScreen("create");
  }
  public function allquizes():void{
  $quizes = ($this->MakeInstanceOfQuiz())->find()->fetch(true);
  echo  $this->showScreen("allquizes",["quizes"=>$quizes]);
  }
  public function play(array $data):void{
  $code = filter_var($data["code"],FILTER_SANITIZE_STRIPPED);
  $quiz = ($this->MakeInstanceOfQuiz())->find("code =:e","e={$code}")
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
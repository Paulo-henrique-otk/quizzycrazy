<?php
namespace App\Controllers;
use Source\Validators\Error404Validation;

class Screens extends Controller{
  
  function __construct($router)
  {
    parent::__construct($router);
  }
  private function showScreen(string $screenName,$screenData = null):string{
    if($screenData){
    return $this->view->render($screenName,$screenData);
    }
    return $this->view->render($screenName);
  } 
  public function home():void{
  echo $this->showScreen("home");
  }
  public function create():void{
  echo $this->showScreen("create");
  }
  public function allquizes():void{
  echo  $this->showScreen("allquizes");
  }
  public function sucess():void{
  echo  $this->showScreen("sucess");
  }
  public function error(array $data):void{
  $errorNumber = $data["error"];
  if(Error404Validation::is404Error($errorNumber)){
  echo $this->showScreen("error404");
  }
  else{
  echo $this->showScreen("error",["error"=>$data["error"]]);
  }
}
}
<?php
namespace Source\Factorys;
use CoffeeCode\DataLayer\DataLayer;
use Source\Factorys\Factory;
use Source\Models\Quiz;

class QuizFactory implements Factory{
 
  public function MakeInstance(): DataLayer
  {
    return new Quiz();
  }
}
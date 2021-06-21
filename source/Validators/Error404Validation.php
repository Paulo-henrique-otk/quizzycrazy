<?php

namespace Source\Validators;

class Error404Validation{

 public static function is404Error(int $errorNumber):bool{
  return $errorNumber == 404;
 } 
}

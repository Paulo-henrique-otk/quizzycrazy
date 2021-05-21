<?php
namespace Source\Validators;

class QuizValidators{
public $verificador;
public  function validateNameAutor(string $nameAutor){
if(strlen($nameAutor)>1){
return $nameAutor;
$this->verificador++;
}else{
return null;
}
}
public function validateNameQuiz(string $nameQuiz){
if (strlen($nameQuiz)>5){
return $nameQuiz;
$this->verificador++;
}else{
return null;
}
}
public function validateDescription(string $description){
if(strlen($description)>225){
return $description; 
$this->verificador++;
}else{
return null;
}
}
public function validateQuestion(string $question){
if(strlen($question)>60){
return $question;
$this->verificador++;
}else{
return null;
}
}
}
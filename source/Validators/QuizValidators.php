<?php
namespace Source\Validators;

class QuizValidators{
private $verificador = 0;
public function Verificar():void{
$this->verificador++;
}
public function validateNameAutor(string $nameAutor): string | null{
if(strlen($nameAutor)>5){
$this->Verificar();
return $nameAutor;
}else{
return null;
}
}
public function validateNameQuiz(string $nameQuiz): string | null{
if (strlen($nameQuiz)>5){
$this->Verificar();
return $nameQuiz;
}else{
return null;
}
}
public function validateDescription(string $description): string | null{
if(strlen($description)>225){
$this->Verificar();
return $description; 
}else{
return null;
}
}
public function validateQuestion(string $question): string | null{
if(strlen($question)>10){
$this->Verificar();
return $question;
}else{
return null;
}
}
public function validateAnswer(string $answer): string | null{
if (strlen($answer)>2 ) {
$this->Verificar();
return $answer;
}else{
return null;
}
}
public function validateStatus(string $status): string | null{
if (strlen($status)>1) {
$this->Verificar();
return $status;
}else{
return null; 
}
}
public function GetVerificador():int{
return $this->verificador;
}
}
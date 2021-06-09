<?php
namespace App\Controllers;
use App\Controllers\Controller;
use Source\Validators\QuizValidators;

class QuizController extends Controller{
private $QuizValidator;
function __construct($router)
{
parent::__construct($router);
$this->QuizValidator = new QuizValidators();
}
public function search(array $data){
$quiz = ($this->MakeInstanceOfQuiz())
->find("nome_quiz LIKE  :n","n={$data['busca']}")
->fetch();
echo $this->showScreen("search",["quiz"=>$quiz]);
}
public function saveQuiz(array $data){
$quiz = $this->MakeInstanceOfQuiz();
$quiz->code = uniqid(rand(),true);
$quiz->nome_autor = $this->QuizValidator->validateNameAutor($data["nomeAut"]);
$quiz->nome_quiz = $this->QuizValidator->validateNameQuiz($data["nomeQuiz"]);
$quiz->descricao = $this->QuizValidator->validateDescription($data["Description"]);
$quiz->image = "sem Imagem";

$quiz->pergunta1 = $this->QuizValidator->validateQuestion($data["pergunta1"]);
$quiz->resposta1 =  $this->QuizValidator->validateAnswer($data["resposta1"]); 
$quiz->resposta2 =  $this->QuizValidator->validateAnswer($data["resposta2"]);
$quiz->resposta3 =  $this->QuizValidator->validateAnswer($data["resposta3"]);
$quiz->resposta4 =  $this->QuizValidator->validateAnswer($data["resposta4"]); 
$quiz->resposta5 =  $this->QuizValidator->validateAnswer($data["resposta5"]);
$quiz->status1 = $this->QuizValidator->validateStatus($data["status1"]);

$quiz->pergunta2 = $this->QuizValidator->validateQuestion($data["pergunta2"]);
$quiz->resposta6 = $this->QuizValidator->validateAnswer($data["resposta6"]); 
$quiz->resposta7 = $this->QuizValidator->validateAnswer($data["resposta7"]); 
$quiz->resposta8 = $this->QuizValidator->validateAnswer($data["resposta8"]);
$quiz->resposta9 =  $this->QuizValidator->validateAnswer($data["resposta9"]); 
$quiz->resposta10 =  $this->QuizValidator->validateAnswer($data["resposta10"]);
$quiz->status2 =  $this->QuizValidator->validateStatus($data["status2"]);

$quiz->pergunta3 = $this->QuizValidator->validateQuestion($data["pergunta3"]);
$quiz->resposta11 =   $this->QuizValidator->validateAnswer($data["resposta11"]);
$quiz->resposta12 =   $this->QuizValidator->validateAnswer($data["resposta12"]); 
$quiz->resposta13 =   $this->QuizValidator->validateAnswer($data["resposta13"]);
$quiz->resposta14 =   $this->QuizValidator->validateAnswer($data["resposta14"]);
$quiz->resposta15 =   $this->QuizValidator->validateAnswer($data["resposta15"]);
$quiz->status3 =  $this->QuizValidator->validateStatus($data["status3"]);

$quiz->pergunta4 = $this->QuizValidator->validateQuestion($data["pergunta4"]);
$quiz->resposta16 =   $this->QuizValidator->validateAnswer($data["resposta16"]); 
$quiz->resposta17 =   $this->QuizValidator->validateAnswer($data["resposta17"]);
$quiz->resposta18 =   $this->QuizValidator->validateAnswer($data["resposta18"]);
$quiz->resposta19 =   $this->QuizValidator->validateAnswer($data["resposta19"]);
$quiz->resposta20 =   $this->QuizValidator->validateAnswer($data["resposta20"]);
$quiz->status4 =  $this->QuizValidator->validateStatus($data["status4"]);

$quiz->pergunta5 = $this->QuizValidator->validateQuestion($data["pergunta5"]);
$quiz->resposta21 =   $this->QuizValidator->validateAnswer($data["resposta21"]);
$quiz->resposta22 =   $this->QuizValidator->validateAnswer($data["resposta22"]);
$quiz->resposta23 =   $this->QuizValidator->validateAnswer($data["resposta23"]);
$quiz->resposta24 =   $this->QuizValidator->validateAnswer($data["resposta24"]);
$quiz->resposta25 =   $this->QuizValidator->validateAnswer($data["resposta25"]);
$quiz->status5 = $this->QuizValidator->validateStatus($data["status5"]);

if($this->QuizValidator->returnVerificador()<38){
 $this->router->redirect("s.create"); 
}else{
$quiz->save();
$this->router->redirect("s.sucess"); 
}
} 
}
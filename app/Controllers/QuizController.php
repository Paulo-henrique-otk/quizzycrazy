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
$quiz->resposta1 = $data["resposta1"]; 
$quiz->resposta2 = $data["resposta2"]; 
$quiz->resposta3 = $data["resposta3"]; 
$quiz->resposta4 = $data["resposta4"]; 
$quiz->resposta5 = $data["resposta5"];
$quiz->status1 = $data["status1"];

$quiz->pergunta2 = $this->QuizValidator->validateQuestion($data["pergunta2"]);
$quiz->resposta6 = $data["resposta6"]; 
$quiz->resposta7 = $data["resposta7"]; 
$quiz->resposta8 = $data["resposta8"]; 
$quiz->resposta9 = $data["resposta9"]; 
$quiz->resposta10 = $data["resposta10"]; 
$quiz->status2 = $data["status2"];

$quiz->pergunta3 = $this->QuizValidator->validateQuestion($data["pergunta3"]);
$quiz->resposta11 = $data["resposta11"]; 
$quiz->resposta12 = $data["resposta12"]; 
$quiz->resposta13 = $data["resposta13"]; 
$quiz->resposta14 = $data["resposta14"]; 
$quiz->resposta15 = $data["resposta15"]; 
$quiz->status3 = $data["status3"];

$quiz->pergunta4 = $this->QuizValidator->validateQuestion($data["pergunta4"]);
$quiz->resposta16 = $data["resposta16"]; 
$quiz->resposta17 = $data["resposta17"]; 
$quiz->resposta18 = $data["resposta18"]; 
$quiz->resposta19 = $data["resposta19"]; 
$quiz->resposta20 = $data["resposta20"];
$quiz->status4 = $data["status4"];

$quiz->pergunta5 = $this->QuizValidator->validateQuestion($data["pergunta5"]);
$quiz->resposta21 = $data["resposta21"]; 
$quiz->resposta22 = $data["resposta22"]; 
$quiz->resposta23 = $data["resposta23"]; 
$quiz->resposta24 = $data["resposta24"]; 
$quiz->resposta25 = $data["resposta25"];
$quiz->status5 = $data["status5"];

if($this->QuizValidator->verificador<38){
 $this->router->redirect("s.create"); 
}else{
$quiz->save();
$this->router->redirect("s.sucess"); 
}
} 
}
<?php
namespace App\Controllers;
use App\Controllers\Controller;
use Source\Validators\NoteValidators;
use Source\Validators\QuizValidators;

class QuizController extends Controller{
private $QuizValidator;
private $noteValidators;
function __construct($router)
{
parent::__construct($router);
$this->QuizValidator = new QuizValidators();
$this->noteValidators = new NoteValidators();
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
$quiz->name_autor = $this->QuizValidator->validateNameAutor($data["nomeAut"]);
$quiz->name_quiz = $this->QuizValidator->validateNameQuiz($data["nomeQuiz"]);
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

if($this->QuizValidator->GetVerificador()<38){
$error = "Digite o Comprimento correto dos Campos";
 $this->router->redirect("s.create",["error"=>$error]); 
}else{
$quiz->save();
echo $this->showScreen("s.sucess",["nome"=>$quiz->name_autor]); 
}
} 
public function Verifynote(array $data){
$quiz = ($this->MakeInstanceOfQuiz())->find("code =:e","e={$data["code"]}")->fetch();
$resposta1 = ($this->MakeInstanceOfQuiz())->find("","",$quiz->status1)->fetch();
$resposta2 = ($this->MakeInstanceOfQuiz())->find("","",$quiz->status2)->fetch();
$resposta3 = ($this->MakeInstanceOfQuiz())->find("","",$quiz->status3)->fetch();
$resposta4 = ($this->MakeInstanceOfQuiz())->find("","",$quiz->status4)->fetch();
$resposta5 = ($this->MakeInstanceOfQuiz())->find("","",$quiz->status5)->fetch();
if($this->noteValidators->ValidateNote($quiz->status1,$resposta1,$data["resposta1"])
&& $this->noteValidators->ValidateNote($quiz->status2,$resposta2,$data["resposta2"])
&& $this->noteValidators->ValidateNote($quiz->status3,$resposta3,$data["resposta3"])
&& $this->noteValidators->ValidateNote($quiz->status4,$resposta4,$data["resposta4"])
&& $this->noteValidators->ValidateNote($quiz->status5,$resposta5,$data["resposta5"])){
    $note = $this->noteValidators->GetNote();
    if($note>=6){
    echo $this->showScreen("goodPerformance",["note"=>$note]);
    }else{
    echo $this->showScreen("badPerformance",["note"=>$note]);
    }
}else{
$this->router->redirect("s.play",["code"=>$data["code"]]);
}
}
}
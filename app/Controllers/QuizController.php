<?php
namespace App\Controllers;
use App\Controllers\Controller;

class QuizController extends Controller{
function __construct($router)
{
parent::__construct($router);
}
public function search(array $data){
$quiz = ($this->MakeInstaceOfQuiz())
->find("nome_quiz LIKE  :n","n={$data['busca']}")
->fetch();
echo $this->showScreen("search",["quiz"=>$quiz]);
}
}
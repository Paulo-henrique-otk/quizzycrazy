<?php

namespace Source\Validators;

class NoteValidators{
private $note = 0;
public function GetNote(){
return $this->note;
}
public function ValidateNote(mixed $status, mixed $resposta,string $respostaUser):bool | null{
$convertido = strval($status);
if($resposta->$convertido == $respostaUser){
$this->note+=2;
return true;
}
else if(!empty($respostaUser)){
return true;
}
return null;
}   
}
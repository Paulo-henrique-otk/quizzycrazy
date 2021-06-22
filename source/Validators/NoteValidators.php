<?php

namespace Source\Validators;

class NoteValidators{
private int $note = 0;
public function GetNote():int{
return $this->note;
}
public function ValidateNote(mixed $status, mixed $resposta,string $respostaUser):bool | null{
$convertido = strval($status);
if($resposta->$convertido == $respostaUser){
$this->note+=2;
}
if(!empty($respostaUser)){
return true;
}
return null;
}   
}
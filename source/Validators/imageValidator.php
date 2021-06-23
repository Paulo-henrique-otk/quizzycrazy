<?php
namespace Source\Validators;

class imageValidator{
private int $ValideImageNumber; 
public function ValidateNumber():void{
$this->ValideImageNumber = 404;
}
public function validateImage(mixed $imageFile, mixed $image, mixed $nome):string | null{
if($imageFile){
$upload = $image->upload($imageFile["Arquivo"],$nome);
$this->ValidateNumber();
return $upload;
}
return null;
}    
public function GetValidateImageNumber():int{
return $this->ValideImageNumber;
}
}
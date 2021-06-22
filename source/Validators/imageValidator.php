<?php
namespace Source\Validators;

class imageValidator{
private int $ValideImageNumber; 
public function ValidateNumber():void{
$this->ValideImageNumber = 404;
}
public function validateImage($imageFile,$image,$nome):string | null{
if($imageFile){
$upload = $image->upload($imageFile["Arquivo"],$nome);
$this->ValidateNumber();
return $upload;
}
return null;
}    
public function GetValidateImageNumber(){
return $this->ValideImageNumber;
}
}
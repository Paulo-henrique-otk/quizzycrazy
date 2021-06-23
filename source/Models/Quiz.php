<?php
namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Quiz extends DataLayer{
  protected string $table = "quiz";
  function __construct()
  {
    parent::__construct($this->table,["nome_autor","nome_quiz","code"]);
  }
}
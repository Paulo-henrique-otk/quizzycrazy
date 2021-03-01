<?php
namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Quiz extends DataLayer{
  protected string $table = "Quiz";
  function __construct()
  {
    parent::__construct($this->table,[]);
  }
}
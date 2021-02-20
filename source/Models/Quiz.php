 <?php
namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Quiz extends DataLayer{
  
  private string $table = "quiz";

  function __construct()
  {
    parent::__construct($this->table,[]);
    }

}
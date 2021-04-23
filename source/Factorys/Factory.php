<?php

namespace Source\Factorys;

use CoffeeCode\DataLayer\DataLayer;

interface Factory {
  public function MakeInstance():DataLayer;
}
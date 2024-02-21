<?php

class Pessoa {
  public $idade;
  
  //método inicializado ao usar o "clone"
  public function __clone(){
    echo "Clonado! ";
  }
}

$pessoa = new Pessoa();
$pessoa->idade = 25;

$pessoa2 = clone $pessoa;
$pessoa2->idade = 35;

echo $pessoa->idade . "<br>";
echo $pessoa2->idade;
<?php

//Self -> Refere-se ao escopo de onde foi chamado.
//Parent -> Refere-se ao escopo pai.
class Pessoa {
  const nome = "Hector";

  public function exibirNome(){
    echo self::nome;
  }
}

class Hector extends Pessoa {
  const nome = "Saldivar"; // se essa linha não existisse, o "self::nome" dessa classe mostraria automaticamente "Hector".

  public function exibirNome(){
    echo self::nome; //se aqui fosse "parent::nome", mostraria "Hector", independente da const nome desta classe.
  }
}

$pessoa = new Pessoa();
$pessoa->exibirNome();
echo "<hr>";
$hector = new Hector();
$hector->exibirNome();
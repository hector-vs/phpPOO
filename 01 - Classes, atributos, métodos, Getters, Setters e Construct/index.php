<?php

//classe Login
class Login {
  //atributo nome
  public $nome;
  //atributo idade
  public $idade;
  
  //método CONSTRUTOR
  public function __construct($nome, $idade){
    $this->setNome($nome);
    $this->setIdade($idade);

  }

  //Método getter
  public function getNome(){
    return $this->nome;
  }

  //Método setter
  public function setNome($n){
    $this->nome = $n;
  }

  //Método getter
  public function getIdade(){
    return $this->idade;
  }

  //Método setter
  public function setIdade($i){
    $this->idade = $i;
  }

  public function Falar() {
    echo "Seu nome é <strong>".$this->nome ."</strong> e você tem <strong>". $this->idade ."</strong> anos de idade.";
  }

  public function Logar(){
    if($this->nome == "sect" && $this->idade == "18"){
      echo "<br><br>Logado, só vai fi";
      echo "<br><br>" . $this->nome . "//" . $this->idade;
    } else {
      echo "<br><br>NAO TA LOGADO, algum desses dois está errado:<br>Nome: '" . $this->nome . "' Idade: '" . $this->idade . "'";
    }
  }
  
}

$hector = new Login("sect", "18");
$hector->Falar();
$hector->Logar();
echo "<hr>" . $hector->getIdade();

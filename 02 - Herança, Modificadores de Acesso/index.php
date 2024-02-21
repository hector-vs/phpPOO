<?php

/*
  public -> Pode ser acessado em todo lugar;
  protected -> Pode ser acessado somente dentro da própria classe e nas classes herdeiras;
  private -> Pode ser acessado somente dentro da própria classe.

  Podem ser setados em ATRIBUTOS e MÉTODOS.
*/
class Veiculo {
  public $modelo;
  protected $cor;
  private $ano;

  //Getter e Setter da cor, que poderia estar na classe herdeira pois $cor é PROTECTED
  public function getCor()
  {
    return $this->cor;
  }

  public function setCor($c)
  {
    $this->cor = $c;
  }

  //Getter e Setter do ano, que só pode estar nesta classe pois $ano é PRIVATE
  public function getAno()
  {
    return $this->ano;
  }

  public function setAno($a)
  {
    $this->ano = $a;
  }

  public function Andar()
  {
    echo "Andou";
  }

  public function Parar()
  {
    echo "Parou";
  }
}

//Classe Carro HERDA os atributos e métodos da classe Veiculo
class Carro extends Veiculo{
  //Método próprio da classe Carro
  public function abrirPorta()
  {
    echo "Abriu";
  }
} 

//Classe Moto HERDA os atributos e métodos da classe Veiculo
class Moto extends Veiculo {
  //Método próprio da classe Moto
  public function darGrau()
  {
    echo "DEU GRAU";
  }
}

$veiculo = new Veiculo();
$veiculo->setAno(2015);
echo $veiculo->getAno();
var_dump ($veiculo);

$carro = new Carro();
$carro->modelo = "Gol";
$carro->setCor("Vermelho");
$carro->Andar();
$carro->abrirPorta();
var_dump ($carro);

$moto = new Moto();
$moto->modelo = "Honda Biz";
$moto->setCor("Preta");
$moto->Andar();
$moto->darGrau();
var_dump ($moto);
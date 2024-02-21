<?php

//Classe ABSTRATA, ou seja, serve como MODELO para as classes herdeiras. Classes abstratas NÃO podem ser instanciadas.
abstract class Banco {
  protected $saldo;
  protected $limiteSaque;
  protected $juros;

  public function setSaldo($s)
  {
    $this->saldo = $s;
    echo "<hr>ADICIONOU " . $s;
  }

  public function getSaldo()
  {
    echo "<hr>=========<br>Saldo: " . $this->saldo . "<br>=========";
  }

  //Métodos abstratos, ou seja, modelos de métodos.
  abstract protected function Sacar($s);
  abstract protected function Depositar($d);
}

class Itau extends Banco {
  public function Sacar($s)
  {
    $this->saldo -= $s;
    echo "<hr>SACOU " . $s;
  }

  public function Depositar($d)
  {
    $this->saldo += $d;
    echo "<hr>DEPOSITOU " . $d;
  }
}


$itau = new Itau();
$itau->setSaldo(10000);
$itau->getSaldo();
$itau->Sacar(8792);
$itau->getSaldo();
$itau->Sacar(1100);
$itau->getSaldo();
$itau->Depositar(40000);
$itau->getSaldo();


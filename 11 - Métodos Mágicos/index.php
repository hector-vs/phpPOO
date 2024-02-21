<?php
// clone*
// construct*
// invoke
// tostring
// get
// set


class Pessoa {
  private $dados = array();
  //set
  public function __set($name, $value){
    $this->dados[$name] = $value;
  }
  //get
  public function __get($name){
    return $this->dados[$name];
  }

  public function __toString(){
    return 'Tentei imprimir o objeto.';
  }

  public function __invoke(){
    return 'Objeto como função';
  }
}

$pessoa = new Pessoa();
$pessoa->nome = 'Danilo';
$pessoa->idade = 17;
$pessoa->sexo = 'M';

var_dump ($pessoa);

echo $pessoa->nome . '<br>';
echo $pessoa . '<br>';
echo $pessoa();
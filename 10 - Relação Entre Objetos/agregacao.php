<?php
//Agregação

class Produtos {
  public $nome;
  public $valor;

  function __construct($nome, $valor){
    $this->nome = $nome;
    $this->valor = $valor;
  }
}

class Carrinho {
  public $produtos;
  //o parâmetro '$produto' deve obrigatoriamente ser uma instância da classe 'Produtos' -> Agregação
  public function adiciona(Produtos $produto){
    $this->produtos[] = $produto;
  }

  public function exibie(){
    foreach ($this->produtos as $produto){
      echo $produto->nome.'<br>';
      echo $produto->valor.'<hr>';
    }
  }
}

$produto1 = new Produtos('Notebook', 1500);
$produto2 = new Produtos('Mouse', 150);

$carrinho = new Carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);

$carrinho->exibie();
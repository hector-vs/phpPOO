<?php
//Associação

class Pedido {
  public $numero;
  public $cliente;
}

class Cliente {
  public $nome;
  public $endereco;
}

$cliente = new CLiente();
$cliente->nome = "Hector";
$cliente->endereco = "Rua Antony Kiedis, 1991";

$pedido = new Pedido();
$pedido->numero = "123";
$pedido->cliente = $cliente; // Assosiando ao atributo "cliente" o OBJETO "cliente"

$dados = array(
  'numero' => $pedido->numero,
  'nome_cliente' => $pedido->cliente->nome,
  'endereco_cliente' => $pedido->cliente->endereco
);

var_dump ($dados);
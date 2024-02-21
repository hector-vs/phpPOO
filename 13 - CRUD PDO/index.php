<?php

use App\Model\Produto;
use App\Model\ProdutoDao;

require_once 'vendor/autoload.php';

$produto = new Produto();
$produto->setId(3);
$produto->setNome('Cadeira');
$produto->setDescricao('Gamer');

$produtoDao = new ProdutoDao();
// $produtoDao->create($produto);
// $produtoDao->read();
// $produtoDao->delete(4);

foreach($produtoDao->read() as $produto) {
  echo $produto['id'] . ' ' . $produto['nome'].'<br>'.$produto['descricao'].'<hr>';
}
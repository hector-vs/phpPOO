<?php

require 'classes/Produto.php';
require 'models/Produto.php';

//use models\Produto;

//use models\Produto as productModel;
//$produto = new productModel();

$produto = new \models\Produto();
$produto->mostrarDetalhes();
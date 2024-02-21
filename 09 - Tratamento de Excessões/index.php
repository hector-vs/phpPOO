<?php

class Newsletter {
  public function cadastrarEmail($email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      throw new Exception("Este email é inválido", 1);
    }else{
      echo "Email cadastrado com sucesso!";
    }
  }
}

$news = new Newsletter();

try{
  $news->cadastrarEmail("contato@");
} catch (Exception $e) {
  echo 'Mensagem: ' .$e->getMessage(). "<br>Código: " . $e->getCode() . "<br>Linha: " .$e->getLine() . '<br>Arquivo: ' . $e->getFile();
}
<?php

class Loginn {
  public static $user;
  //o $this não funciona com membros estáticos
  public static function verificaLogin(){
    echo "O usuário ". self::$user ." está logado!";
  }

  public function sairSistema(){
    echo "O usuário ".  self::$user ." saiu.";
  }
}

//estáticos
Loginn::$user = "admin";
Loginn::verificaLogin();


//não-estáticos
$usuario = new Loginn;
$usuario->sairSistema();
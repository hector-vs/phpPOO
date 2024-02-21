<?php

namespace App\Model;
// Padrão Singleton -> 1 instância da conexão
class Conexao {
  private static $instance;

  public static function getConn() {
    if(!isset(self::$instance)){
      self::$instance = new \PDO('mysql:host=localhost;dbname=pdo;charset=utf8','root', '');
    }
    return self::$instance;
  }
}
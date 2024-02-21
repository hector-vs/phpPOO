<?php

class Animal {
  public function Andar(){
    echo "O animal andou!";
  }

  public function Correr(){
    echo "O animal correu!";
  }
}

//Polimorfismo é substituir/reescrever uma classe herdada, ou seja, da classe pai (Animal)
class Cavalo extends Animal {
  public function Andar(){
    //echo "O cavalo andou!";
    $this->Correr();
  }
}
$animal = new Cavalo();
$animal->Andar();
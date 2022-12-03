<?php 
class Gato {
    private $corPelo;
    private $raca;
    private $corOlhos;
    private $nome;
    //setters
    public function setCorPelo($value){
        $this->corPelo = $value;
    }
    public function setRaca($value){
        $this->raca = $value;
}
public function setCorOlhos($value){
    $this->corOlhos = $value;
}
public function setNome($value){
    $this->nome = $value;
}
    //getters
    public function getCorPelo(){
      return $this->corPelo;
    }
    public function getRaca(){
        return $this->raca;
      }
      public function getCorOlhos(){
        return $this->corOlhos;
      }
      public function getNome(){
        return $this->nome;
      }
}

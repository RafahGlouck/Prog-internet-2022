<?php
class pizzacalabreza{

    public function preparar(){
        echo "colocando molho na pizza\n";
        echo "colocando as rodelas de calabreza na pizza\n";
        echo "colocando queijo na pizza\n";
    }
    public function assar(){
        echo "assar por 15min\n";
    }
    public function comercializar(){
        echo "vender a R$ 50,00";
    }
}
class pizzachocolate {
    public function preparar(){
        echo "passar a cobertura de chocolate meio amargo\n";
        echo "colocar cereja nas extremidades\n";
    }
    public function assar(){
        echo "assar por 8 miin\n";
    }
    public function comercializar(){
        echo "vender a R$ 30,00";
    }
}
$pizzacalabreza = new pizzacalabreza();
$pizzacalabreza -> preparar();
$pizzacalabreza -> assar();
$pizzacalabreza -> comercializar();
echo"\n";
$pizzachocolate = new pizzachocolate();
$pizzachocolate -> preparar();
$pizzachocolate -> assar();
$pizzachocolate -> comercializar();
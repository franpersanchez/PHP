<?php

require_once "Jugador.php";

class Equipo {

private array $jugadores;

public function enseña(){
   return print_r($this->jugadores);
}

public function __construct (){

}

public function addJug(Jugador $jugador){
    
    $this->jugadores[$jugador->getNumJug()] = $jugador;

}

public function getJug($numJug){

return $this->jugadores[$numJug];
}


public function getTotal(){

    $totalPuntos=0;

    foreach ($this->jugadores as $jugador) {
        $totalPuntos +=$jugador->getPtos();
    
    }
    return $totalPuntos;
}



}












?>
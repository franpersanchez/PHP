<?php

 class Jugador {

private int $numeroJug;
private int $ptos;

public function __construct($numeroJug) {

    $this->numeroJug=$numeroJug;
   
}

public function getNumJug(){
    return $this->numeroJug;
    }

public function getPtos(){
    
    return $this->ptos;
}

public function addPtos($ptos){
    
    if ($ptos>0)  {
        $this->ptos=+$ptos;

    }else {
        $this->ptos=0;
    }
        
    
}



}



  



   


?>
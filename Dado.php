<?php   

class Dado  {
    private int $minNumDado;
    private int $maxNumDado;
    
    
   function __construct($minNumDado, $maxNumDado){

                $this->minNumDado = $minNumDado;
                $this->maxNumDado = $maxNumDado;
    
    }

            
    function get_minNumDado (){
                return $this->minNumDado;
    }

  
    function get_maxNumDado (){
                return $this->maxNumDado;
      }


    public function tirarDado() {
                return rand($this->minNumDado,$this->maxNumDado);
            
    }
}

?>




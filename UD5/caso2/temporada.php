

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temporada</title>
</head>
<body>
<?php

require_once "Equipo.php";

$equipaso=new Equipo();

 for($i=1;$i<10;$i++){

        $jugador = new Jugador($i);

       $equipaso->addJug($jugador);
       $equipaso->getJug($i)->addPtos(rand(20,100));

        
        
      //    echo $jugador->getPtos();      
       //   echo "<br>"  ;

       
       
    }

    echo $equipaso->enseña();
    $resultado =$equipaso->getTotal();
    echo "<h1>$resultado </h1>";



?>

</body>
</html>


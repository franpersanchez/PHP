<!DOCTYPE html>
<html>
  <head>
    <title>My PHP test</title>

    <style>
        .titulo {
            text-align:center;

        }
                .tiradas {
            display: inline-bloc;
            padding: 1em;
            border: black solid;
            margin-left: auto;
            margin-right: auto;

        }
    
        </style>
  </head>
  <body>
  <?php
   require "Dado.php";
   $tirada = new Dado(3,11);
   
   ?>
   <h1 class='titulo'> 12 tiradas de dados </h1>
   <table class='tiradas'>
   
   <?php
       for ($i=1; $i<13; $i++) {
           ?> <tr> 
                        <td> <?php   echo "Tirada Nº {$i}"             ?>   </td>
                        <td> <?php echo '==>'  ?>   </td>
                        <td> <?php echo $tirada->tirarDado()  ?>   </td>
                                                    
                    </tr>
                <?php
        }
           ?>
</table>
  </body>
</html>


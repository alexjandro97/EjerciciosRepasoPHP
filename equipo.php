<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //ejercicio 13
           // echo $_GET["nombre"]."<br>".$_GET["apellido"]."<br>".$_GET["edad"];
        //ejercicio14
           
            $nombre = $_GET["nombre"];
            $apellido = $_GET["apellido"];
            $edad = $_GET["edad"];
            $valorRadio = $_GET["radioGroup"];
            
        echo $nombre."<br>";
        echo $apellido."<br>";
        echo $edad."<br>";
        echo $valorRadio."<br>";
        echo '<a href=equipo.php?nombre='.$nombre.'&apellido='.$apellido.'&edad='.$edad.'&radioGroup='.$valorRadio.'>Acceder</a>';
            
        ?>
      
    </body>
</html>

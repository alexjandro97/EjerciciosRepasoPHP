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
            $nombre = "Alex";
            $apellido = "Canton";
            $edad = 20;
            echo '<a href=equipo.php?nombre='.$nombre.'&apellido='.$apellido.'&edad='.$edad.'>Acceder</a>';
        ?>
    </body>
</html>

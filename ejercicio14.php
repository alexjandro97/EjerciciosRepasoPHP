<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formularios</title>
    </head>
    <body>
        
        <form action="equipo.php" method="get" name="formulario">
            <input type="text" name="nombre" class="nombre" id="nombre" placeholder="Nombre">
            <input type="text" name="apellido" class="apellido" id="apellido" placeholder="Apellido">
            <input type="text" name="edad" class="edad" id="edad" placeholder="Edad">

            <input type="radio" name="radioGroup" value="trabajador"> Trabajador
            <input type="radio" name="radioGroup" value="estudiante"> Estudiante

            <input type="submit" name="enviar">
	</form>
        
    </body>
</html>

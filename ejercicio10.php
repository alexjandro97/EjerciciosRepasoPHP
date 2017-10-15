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
        $directorio = opendir(".");
        echo "Estes es el directorio: htdocs <br />";
        while ($archivo = readdir($directorio)) { 
            if (is_dir($archivo)) {
                echo "[" . $archivo . "]<br />"; 
            } else {
                echo $archivo . "<br />";
            }
        }
        ?>
    </body>
</html>

<?php
    require('devuelve_datos.php');

    $datos= new DevuelveDatos();

    $array_datos= $datos->get_datos();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        foreach($array_datos as $elemento){

            echo "<table><tr><td>";
            echo $elemento['NOMBRE'] . "</td><td>";    
            echo $elemento['APELLIDO'] . "</td><td>";
            echo $elemento['EDAD'] . "</td><td>";
            echo $elemento['NIF'] . "</td><td></tr></table>";
            echo "<br>";


        }
    

    
    ?>

</body>
</html>
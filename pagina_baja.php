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

    require("datos_conexion.php");

    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

    $usuario= mysqli_real_escape_string($conexion, $_GET["usu"]);
    $contra= mysqli_real_escape_string($conexion, $_GET["con"]);

    if(mysqli_connect_errno()){

        echo "Fallo al conectar con la base de datos";

        exit();
    }

    mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");

    mysqli_set_charset($conexion, "utf8");

    $consulta="DELETE FROM DATOSPERSONALES WHERE NOMBRE= '$usuario' AND NIF= '$contra'";

    echo "$consulta<br>";

    mysqli_query($conexion, $consulta);

    if(mysqli_affected_rows($conexion)>0){

        echo "Baja procesada";
    
    }else{

        echo "No se ha encontrado usuario";

    }


    /*if(mysqli_query($conexion, $consulta)){

        echo "Baja procesada correctamente";
    }*/

    mysqli_close($conexion);
?>
</body>
</html>
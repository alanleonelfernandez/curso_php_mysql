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

    $nif= $_GET["nif"];
    $nombre= $_GET["nombre"];
    $apellido= $_GET["apellido"];
    $edad= $_GET["edad"];

    require("datos_conexion.php");

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);

    if(mysqli_connect_errno()){

        echo "Fallo al conectar con la BBDD";

        exit();
    }

    mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");

    mysqli_set_charset($conexion, "utf8");

    $sql="INSERT INTO DATOSPERSONALES (NIF, NOMBRE, APELLIDO, EDAD) VALUES (?, ?, ?, ?)";

    $resultado= mysqli_prepare($conexion, $sql);

    $ok= mysqli_stmt_bind_param($resultado, "sssi", $nif, $nombre, $apellido, $edad);

    $ok= mysqli_stmt_execute($resultado);

    if($ok==false){

        echo "error en consulta";
    
    }else{

        //$ok= mysqli_stmt_bind_result($resultado, $nombre, $apellido, $edad, $nif);

        echo "Nuevo registro agregado. <br>";

        /*while(mysqli_stmt_fetch($resultado)){

            echo $nombre . " " . $apellido . " " . $edad . " " . $nif . "<br>";
        }*/

        mysqli_stmt_close($resultado);
    }



?>

</body>
</html>
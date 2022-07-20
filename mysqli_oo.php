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

    $conexion= new mysqli("localhost", "root", "", "pruebas");

    if($conexion->connect_errno){

        echo "Fallo la conexion " . $conexion->connect_errno;

    }

    //mysqli_set_charset($conexion, "utf8");

    $conexion->set_charset("utf8");

    $sql="SELECT * FROM DATOSPERSONALES";

    //$resultados=mysqli_query($conexion, $sql);

    $resultados=$conexion->query($sql);

    if($conexion->errno){

        die($conexion->error);

    }

    //while($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC))

    while($fila=$resultados->fetch_assoc()){

        echo "<table><tr><td> ";
        echo $fila['NOMBRE'] . "<td/><td> ";
        echo $fila['APELLIDO'] . "<td/><td> ";
        echo $fila['EDAD'] . "<td/><td> ";
        echo $fila['NIF'] . "<td/><td><tr/><table/> ";
        echo "<br>";

    }

    //mysqli_close($conexion);

    $conexion->close();




?>

</body>
</html>
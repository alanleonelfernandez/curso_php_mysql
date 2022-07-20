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

    $usuario=$_GET["usu"];
    $contra=$_GET["con"];

    require("datos_conexion.php");

    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

    if(mysqli_connect_errno()){

        echo "Fallo al conectar con la base de datos";

        exit();
    }

    mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");

    mysqli_set_charset($conexion, "utf8");

    $consulta="SELECT * FROM DATOSPERSONALES WHERE NOMBRE= '$usuario' AND NIF= '$contra'";

    echo "$consulta<br>";

    $resultados=mysqli_query($conexion, $consulta);

    while ($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){

        echo "Bienvenido $usuario <br> Estos son tus datos: <br>";

        echo "<table><tr><td> ";
        echo $fila['NOMBRE'] . "<td/><td> ";
        echo $fila['APELLIDO'] . "<td/><td> ";
        echo $fila['EDAD'] . "<td/><td> ";
        echo $fila['NIF'] . "<td/><td><tr/><table/> ";
        echo "<br>";

    }

    mysqli_close($conexion);
?>
</body>
</html>


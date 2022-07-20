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


    $busqueda=$_GET["buscar"];

    require("datos_conexion.php");

    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

    if(mysqli_connect_errno()){

        echo "Fallo al conectar con la base de datos";

        exit();
    }

    mysqli_set_charset($conexion, "utf8");

    mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");

    $consulta="SELECT * FROM DATOSPERSONALES WHERE NOMBRE LIKE '%$busqueda%'";

    $resultados=mysqli_query($conexion, $consulta);

    while (($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC))==true){

        //echo "<table><tr><td> ";
        echo "<form action='actualizar.php' method='get'>";
        echo "<input type='text' name='nombre' value='" . $fila['NOMBRE'] . "'><br>";
        echo "<input type='text' name='apellido' value='" . $fila['APELLIDO'] . "'><br>";
        echo "<input type='int' name='edad' value='" . $fila['EDAD'] . "'><br>";
        echo "<input type='text' name='nif' value='" . $fila['NIF'] . "'><br>";
        echo "<input type='submit' name='enviando' value='Actualizar'";
        echo "</form>";
        echo "<br>";

    }

    mysqli_close($conexion);

?>
</body>
</html>
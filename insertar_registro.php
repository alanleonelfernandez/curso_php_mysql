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

    //$busqueda=$_GET["buscar"];

    $nif=$_GET["nif"];
    $nom=$_GET["nombre"];
    $ape=$_GET["apellido"];
    $eda=$_GET["edad"];

    require("datos_conexion.php");

    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

    if(mysqli_connect_errno()){

        echo "Fallo al conectar con la base de datos";

        exit();
    }

    mysqli_set_charset($conexion, "utf8");

    mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");

    $consulta="INSERT INTO DATOSPERSONALES(NIF, NOMBRE, APELLIDO, EDAD) VALUES ('$nif', '$nom', '$ape', $eda)";

    $resultados=mysqli_query($conexion, $consulta);

    if($resultados==false){

        echo "Error en la consulta";

    }else{
    
        echo "Registro guardado";
    
    }

    mysqli_close($conexion);

?>
</body>
</html>
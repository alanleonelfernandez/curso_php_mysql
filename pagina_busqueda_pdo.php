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

    $busqueda_nombre= $_GET['nombre'];
    $busqueda_apellido= $_GET['apellido'];

    try{

        $base=new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $base->exec("SET CHARACTER SET utf8");

        $sql="SELECT NOMBRE, APELLIDO, EDAD, NIF FROM DATOSPERSONALES WHERE NOMBRE= :nomb AND APELLIDO= :apel";

        $resultado=$base->prepare($sql);

        $resultado->execute(array(":nomb"=>$busqueda_nombre, "apel"=>$busqueda_apellido));

        while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

            echo "Nombre: " . $registro['NOMBRE'] . " Apellido: " . $registro['APELLIDO'] . 
            " Edad: " . $registro['EDAD'] . " NIF: " . $registro['NIF'] . "<br>";

        }

        $resultado->closeCursor();

    }catch(Exception $e){

        die ("Error: " . $e->GetMessage());

    }finally{

        $base=null;

    }

?>
</body>
</html>
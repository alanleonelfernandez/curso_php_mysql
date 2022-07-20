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

    $busqueda_nif= $_POST['nif'];

    try{

        $base=new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $base->exec("SET CHARACTER SET utf8");

        $sql="DELETE FROM DATOSPERSONALES WHERE NIF=:nif";

        $resultado=$base->prepare($sql);

        $resultado->execute(array(":nif"=>$busqueda_nif));

        /*while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

            echo "Nombre: " . $registro['NOMBRE'] . " Apellido: " . $registro['APELLIDO'] . 
            " Edad: " . $registro['EDAD'] . " NIF: " . $registro['NIF'] . "<br>";

        }*/

        echo "Registro eliminado";

        $resultado->closeCursor();

    }catch(Exception $e){

        die ("Error: " . $e->GetMessage());

    }finally{

        $base=null;

    }

?>
</body>
</html>
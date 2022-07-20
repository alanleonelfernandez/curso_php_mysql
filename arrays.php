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
    //ARRAYS INDEXADOS
    /*$semana[]="Lunes";
    $semana[]="Martes";
    $semana[]="Miercoles";
    $semana[]="Jueves";

    for($i=0;$i<count($semana);$i++){

        echo $semana[$i] . "<br>";

    }

    $semana[]="Viernes";*/

    $semana=array("Lunes","Martes","Miercoles","Jueves");

    sort($semana);

    for($i=0;$i<count($semana);$i++){

        echo $semana[$i] . "<br>";

    }


    //ARRAYS ASOCIATIVOS
    /*$datos=array(
        "Nombre"=>"Alan",
        "Apellido"=>"Fernandez",
        "Edad"=>27);
        
    $datos["Pais"]="Argentina";*/

    //echo $datos["Apellido"];

    //IS_ARRAY- AVERIGUAR SI ES ARRAY O NO
    /*if(is_array($datos)){

        echo "Es un array";

    }else{

        echo "No es un array";

    }*/

    //RECORRER ARRAY ASOCIATIVO CON FOREACH
    /*foreach($datos as $clave=>$valor){

        echo "A $clave le corresponde $valor <br>";

    }*/


?>
</body>
</html>
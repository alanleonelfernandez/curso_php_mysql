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


//Ejemplo toUpper (funcion predefinida)
    $palabra="alan<br>";

    echo(strtoupper($palabra));


//Ejemplo Suma (funcion propia)
    function suma($num1, $num2){

        $resultado=$num1+$num2;

        return $resultado;
    }

    echo suma(4,3);


//Ejemplo funcion con parametros varios
    function frase_mayus($frase,$conversion=true){

        $frase=strtolower($frase);

        if($conversion==true){

            $resultado=ucwords($frase);

        }else{

            $resultado=strtoupper($frase);


        }

        return $resultado;

    }

    echo (frase_mayus("esto es una prueba", false));


?>
</body>
</html>
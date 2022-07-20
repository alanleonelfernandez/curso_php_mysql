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

    include ("consecionario.php");

    //Compra_Vehiculo::$ayuda=10000;

    Compra_Vehiculo::descuento_precio();

    $compra_Antonio=new Compra_Vehiculo("compacto");

    $compra_Antonio->climatizador();

    $compra_Antonio->tapiceria_cuero("blanco");

    echo $compra_Antonio->precio_final() . "<br>";

    $compra_Ana=new Compra_Vehiculo("compacto");

    $compra_Ana->climatizador();

    $compra_Ana->tapiceria_cuero("Rojo");

    echo $compra_Ana->precio_final() . "<br>";



?>
    
</body>
</html>
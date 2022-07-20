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

    include("vehiculos.php");

    $mazda=new Coche();

    $scania=new Camion();

    echo "El Mazda tiene " . $mazda->get_ruedas() . " ruedas<br>";

    echo "El Mazda tiene " . $mazda->get_motor() . "cc<br>"

/*    echo "El Mazda tiene " . $mazda->ruedas . " ruedas<br>";

    echo "El Scania tiene " . $scania->ruedas . " ruedas<br>";

    $scania->frenar();

    $scania->arrancar();*/

/*
    class Coche{

        var $ruedas;

        var $color;

        var $motor;

        function Coche(){ //METODO CONSTRUCTOR

            $this->ruedas=4;
            $this->color="";
            $this->motor=1600;

        }

        function arrancar(){

            echo "Estoy arrancando<br>";

        }

        function girar(){

            echo "Estoy girando<br>";

        }

        function frenar(){

            echo "Estoy frenando<br>";

        }

        function establece_color($color_coche, $nombre_coche){

            $this->color=$color_coche;

            echo "El color de este " . $nombre_coche . " es " . $this->color . "<br>";

        }

    }

    $renault= new Coche(); 

    $mazda= new Coche();

    $ford= new Coche();

    $renault->establece_color("Azul","Renault");

    $mazda->girar();

    echo $mazda->ruedas;
*/
?>

</body>
</html>
<?php

    if(isset($_POST["enviando"])){

        $contra=$_POST["contra"];

        $nombre=$_POST["nombre_usuario"];
        
        switch (true){

            case $nombre="Alan" && $contra=="1234":
                echo "Usuario autorizado, Hola Alan.";
                break;
            case $nombre="Maria" && $contra=="1111":
                echo "Usuario autorizado, Hola Maria";
                break;
            case $nombre="Julian" && $contra=="4321":
                echo "Usuario autorizado, Hola Julian";
                break;
            default:
                echo "Usuario no autorizado";
        }

        /*$contra=$_POST["contra"];

        $nombre=$_POST["nombre_usuario"];

        $resultado = $nombre == "Alan" && $contra == "1234" ? "Tienes acceso" : "No tienes acceso";
        
        echo $resultado;*/ //OPERADORES LOGICOS

        /*if($edad<18){

            echo "Eres menor de edad, no tienes acceso";

        }else{

            echo "Eres mayor de edad, puede acceder";

        }*/

        /*$resultado= $edad<18 ? "Eres menor de edad, no tienes acceso" : "Eres mayor de edad, puedes acceder";//ternario

        echo $resultado;*/

    /*if(isset($_POST["enviando"])){

        $edad=$_POST["edad_usuario"];

        if($edad<=18){

            echo"Eres menor de edad";

        }else if($edad<=40){

            echo "Eres Joven";

        }else if($edad<=65){

            echo "Eres Maduro";

        }else{

            echo "Cuidate";
            
        }
    }*/
    };

?>
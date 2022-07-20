<style>

    .resultado{
        font: bold, 20px;
        color: blue;
    }

</style>

<?php

    if(isset($_POST["button"])){

        $numero1=$_POST["num1"];
        $numero2=$_POST["num2"];
        $operacion=$_POST["operacion"];

        calcular($operacion);

    }

    function calcular($calculo){

        if(!strcmp("Suma",$calculo)){

            global $numero1;
            global $numero2;

            $resultado=$numero1+$numero2;

            echo "<p class='resultado'>El resultado es: $resultado</p>";

        }
        if(!strcmp("Resta",$calculo)){

            global $numero1;
            global $numero2;

            $resultado=$numero1-$numero2;

            echo "<p class='resultado'>El resultado es: $resultado</p>";

        }
        if(!strcmp("Multiplicacion",$calculo)){

            global $numero1;
            global $numero2;

            $resultado=$numero1*$numero2;

            echo "<p class='resultado'>El resultado es: $resultado</p>";

        }
        if(!strcmp("Division",$calculo)){

            global $numero1;
            global $numero2;

            $resultado=$numero1/$numero2;

            echo "<p class='resultado'>El resultado es: $resultado</p>";

        }
        if(!strcmp("Modulo",$calculo)){

            global $numero1;
            global $numero2;

            $resultado=$numero1%$numero2;

            echo "<p class='resultado'>El resultado es: $resultado</p>";

        }
        if(!strcmp("Incremento",$calculo)){

            global $numero1;

            $numero1++;

            $resultado=$numero1;

            echo "<p class='resultado'>El resultado es: $resultado</p>";

        }
        if(!strcmp("Decremento",$calculo)){

            global $numero1;

            $numero1--;

            $resultado=$numero1;

            echo "<p class='resultado'>El resultado es: $resultado</p>";

        }

    }



?>
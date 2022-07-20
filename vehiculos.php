<?php

    class Coche{

        protected $ruedas;

        var $color;

        protected $motor;

        function Coche(){ //METODO CONSTRUCTOR

            $this->ruedas=4;
            $this->color="";
            $this->motor=1600;

        }

        function get_motor(){

            return $this->motor();

        }

        function get_ruedas(){

            return $this->ruedas;

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

        function set_color($color_coche, $nombre_coche){

            $this->color=$color_coche;

            echo "El color de este " . $nombre_coche . " es " . $this->color . "<br>";

        }

    }

    class Camion extends Coche{

        function Camion(){ //METODO CONSTRUCTOR

            $this->ruedas=8;
            $this->color="";
            $this->motor=2600;

        function arrancar(){

            parent::arrancar();

            echo "Camion arrancado";
            
        }
        
        }

        function set_color($color_camion, $nombre_camion){

            $this->color=$color_camion;

            echo "El color de este " . $nombre_camion . " es " . $this->color . "<br>";

        }

    }

    $renault= new Coche(); 

    $mazda= new Coche();

    $ford= new Coche();

    $renault->establece_color("Azul","Renault");

    $mazda->girar();

    echo $mazda->ruedas;

?>
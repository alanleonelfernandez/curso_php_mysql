<?php

    class Compra_Vehiculo{

        private $precio_base;

        private static $ayuda=0;

        function Compra_Vehiculo($gama){

            if($gama=="urbano"){

                $this->precio_base=10000;

            }else if($gama=="compacto"){

                $this->precio_base=20000;

            }else if($gama=="berlina"){

                $this->precio_base=30000;

            }

        }//fin de constructor

        static function descuento_precio(){

            if(date("m-d-y")>"05-01-22"){

            self::$ayuda=4500;}

        }

        function climatizador(){

            $this->precio_base+=2000;

        }//fin climatizador

        function navegador_gps(){

            $this->precio_base+=2500;

        }

        function tapiceria_cuero($color){

            if($color=="blanco"){

                $this->precio_base+=3000;

            }else if($color=="beige"){

                $this->precio_base+=3500;

            }else{

                $this->precio_base+=5000;
            }

        }//fin tapiceria

        function precio_final(){

            $valor_final=$this->precio_base-self::$ayuda;

            return $valor_final;

        }//fin precio final

    }//fin clase



?>
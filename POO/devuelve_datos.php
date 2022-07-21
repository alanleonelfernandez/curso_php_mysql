<?php

    require "Conexion.php";

    class DevuelveDatos extends Conexion{

        public function__construct(){

            parent::__construct();
        }

        public function get_datos(){

            $resultado= $this->conexion_db->query('SELECT * FROM DATOSPERSONALES');
            $datos= $resultado->fetch_all(MYSQLI_ASSOC);
            return $datos;
        }
    }


?>
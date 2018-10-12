<?php

class conexion{

    public function conectar(){
        $host = "localhost";
        $user = "root";
        $password = "root";
        $db = "crudnoche";
        $conexion =  mysqli_connect($host, $user, $password, $db);
        
        if($conexion == false){
            die("Error".mysqli_connect_error);
        }else{
            return $conexion;
        }
    }
}
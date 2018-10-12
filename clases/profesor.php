<?php

class profesor{

    public function registrar($conexion, $nombre, $apellido, $edad, $fecha_naci, $documento, $titulo){
        
        $query = " INSERT INTO profesor (nombre, apellido, edad, fecha_naci, documento, titulo_uni)
        VALUES ('$nombre', '$apellido', $edad, '$fecha_naci', '$documento', '$titulo') ";
        $consulta = mysqli_query($conexion, $query);
        
        if($consulta){
            $respuesta = "Profesor registrado";
        }else{
            $respuesta = " Problemas al registar";
        }
            return $respuesta;
    }

    public function consultar($conexion){
        $query = "SELECT * FROM profesor";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }

    public function consultarId($conexion, $id){
        $query = "SELECT * FROM profesor WHERE id_profesor = $id";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;

    }

    public function editar($conexion, $id, $nombre, $apellido, $edad, $fecha_naci, $documento, $titulo){
        $query = "UPDATE profesor SET nombre = '$nombre', apellido = '$apellido', edad = $edad,
        fecha_naci = '$fecha_naci', documento = '$documento', titulo_uni = '$titulo' WHERE id_profesor = $id";
        
        $consulta = mysqli_query($conexion, $query);
        if($consulta){
            $respuesta = "Profesor actualizado";
        }else{
            $respuesta = "Problemas al actualizar";
        }
        return $respuesta;
    }

    public function eliminar($conexion, $id){
        $query = "DELETE FROM profesor WHERE id_profesor = $id";
        $consulta = mysqli_query($conexion, $query);
       
        if($consulta){
            $respuesta = "Profesor elininado";
        }else{
            $respuesta = "Problemas al eliminar";
        }
        return $respuesta;

        
    }

}
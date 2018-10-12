<?php

include "../clases/conexion.php";
include "../clases/profesor.php";

$objConexion = new conexion();
$objProfesor = new profesor();

$Conexion = $objConexion->conectar();
echo $objProfesor->editar($Conexion, $_POST['id'], $_POST['nombre'], $_POST['apellido'], 
$_POST['edad'], $_POST['fecha_naci'], $_POST['documento'], $_POST['titulo_uni'] );

echo "<br><a href='../index.html'><button>Volver Al menu</button></a>";
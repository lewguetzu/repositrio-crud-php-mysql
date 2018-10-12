<?php

include "../clases/conexion.php";
include "../clases/profesor.php";


$objConexion = new conexion();
$objProfesor = new profesor();

$conexion = $objConexion->conectar();
echo $objProfesor->registrar($conexion, $_POST['nombre'], $_POST['apellido'], $_POST['edad'],
$_POST['fecha_naci'], $_POST['documento'], $_POST['titulo_uni']);

echo "<br><a href='../consultar.php'><button>Ver Registros</button></a>";
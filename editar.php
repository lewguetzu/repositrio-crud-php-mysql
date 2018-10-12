<?php

    include "clases/conexion.php";
    include "clases/profesor.php";

    $objConexion = new conexion();
    $objProfesor = new profesor();

    $conexion = $objConexion->conectar();
    $datosProfesor = $objProfesor->consultarId($conexion, $_GET['id']);
    
    $nombre;
    $apellido;
    $edad;
    $fechaNaci;
    $documento;
    $tituloUni;
    $id;

    while($profesor = mysqli_fetch_array($datosProfesor)){
        $nombre = $profesor['nombre'];
        $apellido = $profesor['apellido'];
        $edad = $profesor['edad'];
        $fechaNaci = $profesor['fecha_naci'];
        $documento = $profesor['documento'];
        $tituloUni = $profesor['titulo_uni'];
        $id = $profesor['id_profesor'];

    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="controlador/editar.php" method="POST">

        <input type="hidden" name="id" value=<?php echo "$id"?>>
        <label for="">Nombre </label><input type="Text" value="<?php echo $nombre; ?>" name="nombre" id="nombre"><br>
        <label for=""></label>Apellido </label><input type="Text" value="<?php echo $apellido; ?>" name="apellido" id="apellido"><br>
        <label for=""></label>Edad </label><input type="Text" value="<?php echo $edad; ?>" name="edad" id="edad"><br>
        <label for=""></label>Fecha </label><input type="Date" value="<?php echo $fechaNaci; ?>" name="fecha_naci" id="fecha_naci"><br>
        <label for=""></label>Documento </label><input type="Text" value="<?php echo $documento; ?>" name="documento" id="documento"><br>
        <label for=""></label>Titulo </label><input type="Text" value="<?php echo $tituloUni; ?>" name="titulo_uni" id="titulo_uni"><br>

        <input type="Submit" name="Editar" value="Editar">
        <br><a href='../index.html'><button>Volver al Menu</button></a>
</form>
</body>
</html>
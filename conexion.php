<?php
$conexion = mysqli_connect("localhost", "root", "","soporte")or die(mysql_error($mysqli));


function diferencia($conexion){
    if(isset($_POST['enviar'])){
        insertar($conexion);
    }
    if(isset($_POST['eliminar'])){
        eliminar($conexion);
    }
}



function insertar($conexion){
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $numero = $_POST['numero'];
    $mensaje = $_POST['mensaje'];

    $consulta ="INSERT INTO contactanos(nombre, correo, numero, mensaje)
    VALUES ('$nombre', '$correo', '$numero', '$mensaje')";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
}


function eliminar($conexion){
    $nombre = $_POST['nombre'];

    $consulta ="DELETE FROM contactanos WHERE nombre= '$nombre'";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
}


?>
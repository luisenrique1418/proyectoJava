<?php
if(isset($_POST['titulo'])&&isset($_POST['mensaje'])){
    $idc = $_POST['idc'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $tipo = $_POST['tipo'];
    $mensaje = $_POST['mensaje'];
    $titulo = $_POST['titulo'];
    $conexion = mysqli_connect('localhost','root','','contactoitl');
    if($conexion){
        $query = mysqli_query($conexion,"INSERT INTO `foros`(`IdForo`, `IdCreador`, `TituloForo`, `Contenido`, `Fecha`, `Hora`, `Tipo`) VALUES ('NULL','$idc','$titulo','$mensaje','$fecha','$hora','$tipo')");
        if($query){
            header('Location: inicio.php/?NoCtrl=$idc&tipo=$tipo');
        }else{

        }

    }
}
?>
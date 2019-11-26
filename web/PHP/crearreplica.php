<?php
if(isset($_POST['titulo'])&&isset($_POST['mensaje'])){
    $idc = $_POST['idc'];
    $idf = $_POST ['idf'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $tipo = $_POST['tipo'];
    $mensaje = $_POST['mensaje'];
    $titulo = $_POST['titulo'];
    $conexion = mysqli_connect('localhost','root','','contactoitl');
    if($conexion){
        $query = mysqli_query($conexion,"INSERT INTO `replicas`(`IdReplica`, `IdForo`, `IdCreador`, `TituloReplica`, `ContenidoReplica`, `Fecha`, `Hora`, `TipoReplica`) VALUES ('NULL','$idf','$idc','$titulo','$mensaje','$fecha','$hora','$tipo')");
        if($query){
            header('Location: inicio.php/?NoCtrl=$idc&tipo=$tipo');
        }else{

        }

    }
}
?>
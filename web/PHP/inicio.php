<?php 
$conexion = mysqli_connect('localhost','root','','contactoitl');
if($conexion){
    $query = mysqli_query($conexion,"SELECT * FROM `foros` ORDER BY IdForo ASC LIMIT 0,2");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF8mb4">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/inicio.css">

</head>
<body>
    <div class="caja" >
        <?php 
        while (($fila = mysqli_fetch_array($query))!=NULL){
            $titulo = $fila['TituloForo'];
            $id = $fila['IdForo'];
            $idC = $fila['IdCreador'];
            $tipo = $fila['Tipo'];
            $query2 = mysqli_query($conexion,"SELECT `Nombre$tipo` FROM `$tipo` WHERE `NoCtrl` = $idC ");
            $res = mysqli_fetch_array($query2);
            $nom = $res['NombreAlumno'];
            echo(
                "<h1>".$titulo."
                </h1> <a href=foros.php/?Autor=".$idC."&tipo=".$tipo."&idF=".$id.">".$nom."</a>"
            );
            }
        ?>
        
</body>
</html>
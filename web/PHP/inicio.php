<?php 
$conexion = mysqli_connect('localhost','root','','contactoitl');
if($conexion){
    $query = mysqli_query($conexion,"SELECT * FROM `foros` ORDER BY IdForo ASC LIMIT 0,2");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Encuesta</title>
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
            $nom = $res['Nombre'.$tipo];
            echo(
                "<h1>".$titulo."
                </h1> <a href=foros.php/?Autor=".$idC."&tipo=".$tipo."&idF=".$id.">".$nom."</a>"
            );
            }
        ?>
    </div>
    <div class="caja">
        <?php 
        $conexion2 = mysqli_connect('localhost','root','','encuestas');
        if($conexion2){
            $query3 = mysqli_query($conexion2,"SELECT table_name AS nombre FROM information_schema.tables WHERE table_schema = 'encuestas' LIMIT 0,2");
            while (($fila = mysqli_fetch_array($query3))!=NULL){
               $EncNom = $fila['nombre'];
               $query4 = mysqli_query($conexion2,"SELECT DISTINCT `idc`,`tipo`,`titulo` FROM $EncNom");
               if($query4){
                $res = mysqli_fetch_array($query4,MYSQLI_ASSOC);
                $idC = $res['idc'];
                $tipo = $res['tipo'];
                $EncNom2 = $res['titulo'];
                $query5 = mysqli_query($conexion,"SELECT `Nombre$tipo` FROM `$tipo` WHERE `NoCtrl` = $idC ");
                if($query5){
                $res = mysqli_fetch_array($query5);
                $nom = $res['Nombre'.$tipo];
                echo(
                 "<h1>".$EncNom2."
                 </h1> <a href=encuestas.php/?tabla=".$EncNom.">".$nom."</a>"
                
             );
            }else{
                echo( "<h1>".mysqli_error($conexion)."</h1>");
            }
               }else{
                echo( "<h1>".mysqli_error($conexion2)."</h1>");
            }
               
            }
        }
        ?>
    </div>

    <?php
    mysqli_close($conexion)
    ?>
        
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/inicio.css">
</head>
<body>


    <?php 
    $conexion2 = mysqli_connect('localhost','root','','encuestas');
    if($conexion2){
        $query3 = mysqli_query($conexion2,"SELECT table_name AS nombre FROM information_schema.tables WHERE table_schema = 'encuestas'");
        while (($fila = mysqli_fetch_array($query3))!=NULL){
           $EncNom = $fila['nombre'];
           $query4 = mysqli_query($conexion2,"SELECT DISTINCT `noticia` FROM $EncNom");
           $row = mysqli_fetch_array($query4,MYSQLI_NUM);
           $noticia = $row[0];
           $query5 = mysqli_query($conexion2,"SELECT MAX(`votos`) AS `voto` ,`opcion` FROM `$EncNom` WHERE 1");
           $row2 = mysqli_fetch_array($query5,MYSQLI_NUM);
           $votos = $row2[0];
           $opcion = $row2[1];
           echo ("
           <div class='noticia'><a href=''>$noticia  $opcion con $votos votos</a></div>
           ");
        }
    }
    
    ?>
</body>
</html>
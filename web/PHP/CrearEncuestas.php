

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

$idc = $_GET['NoCtrl'];
$tipo = $_GET['tipo'];

    if(!(isset($_POST['titulo']))&&!(isset($_POST['noticia']))&&!(isset($_POST['tabla']))){
    ?>
    <form action="#" method="post">
        <label for="">Pregunta de la encuesta</label>
        <input type="text" name="titulo">
        <br>
        <label for="">Forma en la que aparecerá en noticias</label>
        <input type="text" name="noticia">
        <br>
        <label for="">Nombre de solo una palabra</label>
        <input type="text" name="tabla">
        <input type="submit" value="Siguiente">
    </form>
    <?php
    }else{
        $titulo = $_POST['titulo'];
        $tabla = $_POST['tabla'];
        $noticia = $_POST['noticia'];
        echo($titulo);
        echo($tabla);
        echo($noticia);
        if(!(isset($_POST['opciones']))){
            ?>
            <form action="#" method="post">
            Cuantas opciones seran (maximo 8) 
            <input type="number" name="opciones" min="1" max="8">
            <input type="hidden" name="titulo" value="<?php echo $titulo; ?>">
            <input type="hidden" name="noticia" value="<?php echo $noticia; ?>">
            <input type="hidden" name="tabla" value="<?php echo $tabla; ?>">
            <input type="submit" value="Siguiente">

            </form>
            <?php
        }else{
            $opciones =$_POST['opciones'];
            if(isset($_POST['BUTTON'])){
                echo($_POST['opcion0']);
                $opcion1 = array();
                for($i=0;$i<$opciones;$i++){
                    $opcion1[$i] = $_POST['opcion'.$i];
                }
                $conexion2 = mysqli_connect('localhost','root','','encuestas');
                if($conexion2){
                    $query = mysqli_query($conexion2,"CREATE TABLE `".$tabla."` (
                        `id` int(11) NOT NULL,
                        `opcion` varchar(20) DEFAULT NULL,
                        `votos` int(11) DEFAULT NULL,
                        `tipo` varchar(10) DEFAULT NULL,
                        `idc` varchar(10) DEFAULT NULL,
                        `noticia` varchar(50) DEFAULT NULL,
                        `titulo` varchar(50) DEFAULT NULL
                      ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
                      ");

                      $query4 = mysqli_query($conexion2,"ALTER TABLE `".$tabla."`
                      ADD PRIMARY KEY (`id`);
                      ");

                      $query3 = mysqli_query($conexion2,"ALTER TABLE `".$tabla."`
                      MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
                      ");

                      

                      if($query){
                          for($i=0;$i<$opciones;$i++){
                              $stm = "INSERT INTO `".$tabla."` (`id`, `opcion`, `votos`, `tipo`, `idc`, `noticia`, `titulo`) VALUES
                              ('NULL', '".$opcion1[$i]."', 0, '".$tipo."', '".$idc."','".$noticia."','".$titulo."')";

                              $query2 = mysqli_query($conexion2,$stm);
                          }
                          header('Location mencuestas.html');
                          if($query2){
                            
                        }else{
                            echo "Query2".mysqli_error($conexion2);
                        }
                      }else{
                          echo "Query1".mysqli_error($conexion2);
                      }
                }else{
                    echo("error conection");
                }
            }else{
            ?>
            <form action="#" method="post">
        <?php 
        $i=0;
        while($i<$opciones){
            echo("Ingrese la opcion numero ".($i+1) ."<input type='text' name='opcion".$i."'> <br>");
            $i++;
        }
        ?>
            <input type="hidden" name="titulo" value="<?php echo $titulo ?>">
            <input type="hidden" name="noticia" value="<?php echo $noticia ?>">
            <input type="hidden" name="tabla" value="<?php echo $tabla ?>">
            <input type="hidden" name="titulo" value="<?php echo $titulo ?>">
            <input type="hidden" name="opciones" value="<?php echo $opciones ?>">
            <input type="submit" name="BUTTON" value="Finalizar" >
    </form>

    <?php
            }
        }
        
    }

    ?>
    
    
</body>
</html>
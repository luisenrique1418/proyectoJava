<?php
$NC = $_GET["NoControl"];
$tipo = $_GET["tipo"];
$conexion = mysqli_connect('localhost','root','','contactoitl');
if($conexion){
    switch($tipo){
        case "Alumno":
            $query = mysqli_query($conexion,"UPDATE `alumno` SET `Habilitado` = 1 WHERE `NoCtrl` = $NC ");
            if($query){
                header('Location: ../../index.html');
            }else{
                ?>
                
        <script type="text/javascript" charset="utf-8">
        function lohicimos() {
            alert(
                "Algo salió mal espere unos momentos"
            );
        }
        lohicimos();
        </script>
        <?php 
            }
            break;
        case "Egresado":
            $query = mysqli_query($conexion,"UPDATE `egresado` SET `Habilitado` = 1 WHERE `NoCtrlEgresado` = $NC ");
            if($query){
                header('Location: ../../index.html');
            }else{
                echo(mysqli_error($conexion));
                ?>
                
        <script type="text/javascript" charset="utf-8">
        function lohicimos() {
            alert(
                "Algo salió mal espere unos momentos"
            );
        }
        lohicimos();
        </script>
        <?php 
            }
        break;
        case "Profesor":
            $query = mysqli_query($conexion,"UPDATE `profesor` SET `Habilitado` = 1 WHERE `NoTarjeta` = $NC ");
            if($query){
                header('Location: ../../index.html');
            }else{
                echo(mysqli_error($conexion));
                ?>
                
        <script type="text/javascript" charset="utf-8">
        function lohicimos() {
            alert(
                "Algo salió mal espere unos momentos"
            );
        }
        lohicimos();
        </script>
        <?php 
            }
        break;
    }
    }else{
        ?>
        <script type="text/javascript" charset="utf-8">
        function lohicimos() {
            alert(
                "No se llevo a cabo la conexion"
            );
        }
        lohicimos();
        </script>
        <?php
    }
    ?>
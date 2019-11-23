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
            $table = 'egresado';
            $NoCtrl = $_POST["NoCtrl"];
            $Nombre = $_POST["nombre"];
            $Contraseña = $_POST["password"];
            $edad = $_POST["edad"];
            $sexo = $_POST["sexo"];
            $profesion = $_POST["profesion"];
            $empresa = $_POST["nombreEMP"];
            $puesto = $_POST["puesto"];
            $correo = $_POST["email"];
        break;
        case "Profesor":
            $NoCtrl = $_POST["NoCtrl"];
            $table = 'profesor';
            $Nombre = $_POST["nombre"];
            $Contraseña = $_POST["password"];
            $edad = $_POST["edad"];
            $sexo = $_POST["sexo"];
            $profesion = $_POST["Profesion"];
            $empresa = $_POST["carreraIMP"];
            $correo = $_POST["email"];
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
    


?>
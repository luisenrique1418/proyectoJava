<?php 
$type = $_POST["type"];
$acceso = $_POST["BUTTON"];
$conexion = mysqli_connect('localhost','root','','contactoitl');
if($conexion){
switch($acceso){
    case "Alumno":
        $NoCtrl = $_POST["NoCtrl"];
        $Nombre = $_POST["nombre"];
        $Contraseña = $_POST["password"];
        $edad = $_POST["edad"];
        $sexo = $_POST["sexo"];
        $carrera = $_POST["carrera"];
        $semestre = $_POST["semestre"];
        $correo = $_POST["email"];
        settype($edad,"int");
        settype($semestre,"int");
        $query = mysqli_query($conexion,"INSERT INTO `alumno`(`NoCtrl`, `NombreAlumno`, `EdadAlumno`, `SexoAlumno`, `CarreraAlumno`, `Semestre`, `Email`, `Password`) VALUES ('$NoCtrl','$Nombre',$edad,'$sexo','$carrera',$semestre,'$correo','$Contraseña')");
        
        if($query){
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
            $contenido = "Porfavor verifique su cuenta <br> presione en el siguiente enlace <br> <a href='http://localhost/proyectoJava/web/PHP/habilitar.php/?NoControl=$NoCtrl&tipo=$acceso'>presione aquí parfa verificar su cuenta</a> <br> Una vez en el sitio tendra que iniciar sesion.";
            mail($correo,"VERIFICACION DE CUENTA",$contenido,$headers);
        }else{
            ?>
    <script type="text/javascript" charset="utf-8">
    function lohicimos() {
        alert(
            "No se pudo insertar"+<?php echo $query;     ?>
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
        $profesion = $_POST["carrera"];
        $empresa = $_POST["nombreEMP"];
        $puesto = $_POST["puesto"];
        $correo = $_POST["email"];
        settype($edad,"int");
        $query = mysqli_query($conexion,"INSERT INTO `egresado`(`NoCtrlEgresado`, `NombreEgresado`, `EdadEgresado`, `SexoEgresado`, `Profesion`, `EmailEgresado`, `NombreEmpresa`, `PuestoEmpresa`, `Password`, `Habilitado`) VALUES ('$NoCtrl','$Nombre',$edad,'$sexo','$profesion','$correo','$empresa','$puesto','$Contraseña','NULL')");
        if($query){
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
            $contenido = "Porfavor verifique su cuenta <br> presione en el siguiente enlace <br> <a href='http://localhost/proyectoJava/web/PHP/habilitar.php/?NoControl=$NoCtrl&tipo=$acceso'>presione aquí parfa verificar su cuenta</a> <br> Una vez en el sitio tendra que iniciar sesion.";
            mail($correo,"VERIFICACION DE CUENTA",$contenido,$headers);
        }else{
            
            echo("NOSEPUDOINSERTAR".mysqli_error($conexion));
            ?>
    <script type="text/javascript" charset="utf-8">
    function lohicimos() {
        alert(
            "No se pudo insertar"+<?php echo $query;     ?>
        );
    }
    lohicimos();
    </script>
            <?php 
        }
    break;
    case "Profesor":
        $NoCtrl = $_POST["NoCtrl"];
        $table = 'profesor';
        $Nombre = $_POST["nombre"];
        $Contraseña = $_POST["password"];
        $edad = $_POST["edad"];
        $sexo = $_POST["sexo"];
        $profesion = $_POST["Profesion"];
        $empresa = $_POST["carrera"];
        $correo = $_POST["email"];
        settype($edad,"int");
        $query = mysqli_query($conexion,"INSERT INTO `profesor`(`NoTarjeta`, `NombreProfesor`, `EdadProfesor`, `SexoProfesor`, `Profesion`, `EmailProfesor`, `CarreraImparte`, `Password`, `Habilitado`) VALUES ('$NoCtrl','$Nombre',$edad,'$sexo','$profesion','$correo','$empresa','$Contraseña','NULL')");
        if($query){
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
            $contenido = "Porfavor verifique su cuenta <br> presione en el siguiente enlace <br> <a href='http://localhost/proyectoJava/web/PHP/habilitar.php/?NoControl=$NoCtrl&tipo=$acceso'>presione aquí parfa verificar su cuenta</a> <br> Una vez en el sitio tendra que iniciar sesion.";
            mail($correo,"VERIFICACION DE CUENTA",$contenido,$headers);
        }else{
            echo("NOSEPUDOINSERTAR".mysqli_error($conexion));
            ?>
    <script type="text/javascript" charset="utf-8">
    function lohicimos() {
        alert(
            "No se pudo insertar"+<?php echo $query;     ?>
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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div margin=20% > 
        <h1>
            Hemos enviado un correo a tu direccion email para verificar tu cuenta, porfavor hazlo.
            <h1>
    <div>
</body>
</html>
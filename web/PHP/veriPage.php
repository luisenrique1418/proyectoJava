<?php 
$type = $_POST["type"];
$acceso = $_POST["BUTTON"];

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
        $SQLQuery = 
        "INSERT INTO `alumno`(`NoCtrl`, `NombreAlumno`, `EdadAlumno`, `SexoAlumno`, `CarreraAlumno`, `Semestre`, `Email`, `Password`, `Habilitado`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])";
        break;
    case "Egresado":
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
        $Nombre = $_POST["nombre"];
        $Contraseña = $_POST["password"];
        $edad = $_POST["edad"];
        $sexo = $_POST["sexo"];
        $profesion = $_POST["Profesion"];
        $empresa = $_POST["carreraIMP"];
        $correo = $_POST["email"];
    break;
}
?>
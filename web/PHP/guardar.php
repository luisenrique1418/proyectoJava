<?php
if(isset($_POST['guardar'])){
    
    $conexion = $conexion = mysqli_connect('localhost','root','','contactoitl');
    if($conexion){
        $query = mysqli_query($conexion,"UPDATE `alumno` SET `Foto`='$name' WHERE `NoCtrl` = '$idc'");
        if($query){
        echo "Se subió correctamente";
        }else{
            echo "algo fallo";
        }
    }else{
        echo "Fallo conexion";
    }
}else{
    echo("fallo en el formulario");
}
?>

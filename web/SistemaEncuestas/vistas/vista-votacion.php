
<?php 

$conexion = mysqli_connect('localhost','root','','encuestas');
if($conexion){
    $query = mysqli_query($conexion,"SELECT opcion FROM `$tb` ");
    if($query){
    while (($fila = mysqli_fetch_array($query))!=NULL){
        echo ("
        <input type='radio' name='lenguaje' id='' value=".$fila['opcion'].">". $fila['opcion']. "<br>
        ");
    }
    }else{
        echo $tb;
    }

}

?>
<input type="submit" value="Votar!">



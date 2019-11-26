<?PHP
$idc = $_GET['NoCtrl'];
$tipo = $_GET['tipo'];
$nombrefoto1=isset($_FILES['foto1']['name']) ? $_FILES['foto1']['name'] : "" ;
$ruta1=isset($_FILES['foto1']['tmp_name']) ? $_FILES['foto1']['tmp_name'] : "";
if(is_uploaded_file($ruta1))
{ 
if($_FILES['foto1']['type'] == 'image/png' OR $_FILES['foto1']['type'] == 'image/gif' OR $_FILES['foto1']['type'] == 'image/jpeg')
		{
$idC=1;
$tips = 'jpg';
$type = array('image/jpeg' => 'jpg');
$name = $idc;
$destino1 =  "../img/ProfilePictures/".$name.".".$tips;
copy($ruta1,$destino1);

$ruta_imagen = $destino1;

$miniatura_ancho_maximo = 700;
$miniatura_alto_maximo = 500;

$info_imagen = getimagesize($ruta_imagen);
$imagen_ancho = $info_imagen[0];
$imagen_alto = $info_imagen[1];
$imagen_tipo = $info_imagen['mime'];

switch ( $imagen_tipo ){
  case "image/jpg":
  case "image/jpeg":
    $imagen = imagecreatefromjpeg( $ruta_imagen );
    break;
  case "image/png":
    $imagen = imagecreatefrompng( $ruta_imagen );
    break;
  case "image/gif":
    $imagen = imagecreatefromgif( $ruta_imagen );
    break;
}

$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );

imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);


imagejpeg($lienzo, $destino1, 80);
}
}

?>


<form action="" method="post" enctype="multipart/form-data">
<input name="foto1" type="file" id="foto1"  >
<input type="hidden" name="nombre" value="<?php echo $idc ?>">
<input type="hidden" name="idc" value="<?php echo $idc ?>">
<input type="hidden" name="tipo" value="<?php echo $tipo ?>">
<input name="guardar" type="submit" value="Subir foto" />

</form>
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
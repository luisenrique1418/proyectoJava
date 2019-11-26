<?PHP
session_start();

?>



<?PHP
				  
$nombrefoto1=isset($_FILES['foto1']['name']) ? $_FILES['foto1']['name'] : "" ;
$ruta1=isset($_FILES['foto1']['tmp_name']) ? $_FILES['foto1']['tmp_name'] : "";
if(is_uploaded_file($ruta1))
{ 
if($_FILES['foto1']['type'] == 'image/png' OR $_FILES['foto1']['type'] == 'image/gif' OR $_FILES['foto1']['type'] == 'image/jpeg')
		{
$tips = 'jpg';
$type = array('image/jpeg' => 'jpg');
$name = 'Foto-1'.'.'.$tips;
$destino1 =  "imagenes/".$name;
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

<input name="guardar" type="submit" value="Subir foto" />

</form>


<?
				  			  			  
if($_POST['guardar']){
$act = "INSERT INTO fotos (foto1) values ('".$destino1."')";
if(@mysql_query($act)){echo "La foto fue publicada con �xito";
}}

?>
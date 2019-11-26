
<?php 

$idc = $_GET['ReplicaCtrl'];
$idf = $_GET['idF'];
$tipo = $_GET['tipo'];

$conexion = mysqli_connect('localhost','root','','contactoitl');
if($conexion){
    $query = mysqli_query($conexion,"SELECT * FROM `foros` WHERE `IdForo` = '$idf'");
    if($query){
      $row = mysqli_fetch_array($query,MYSQLI_NUM);
      $idcreador = $row[1];
      $tipoF = $row[6];
      $titulo =$row[2];
      $contenido = $row[3];
      $fecha = $row[4];
      $hora = $row[5];
    }
    $query2 = mysqli_query($conexion,"SELECT `Nombre$tipoF` FROM `$tipoF` WHERE `NoCtrl` = $idcreador ");
    if($query){
      $row2 = mysqli_fetch_array($query2,MYSQLI_NUM);
      $autor = $row2[0];
    }

}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="../../css/foros.css" />
    <title>Document</title>
  </head>
  <body>

      <div id="foroM" class="foroM">
      <div class="row">
        <div class="col-1-of-4"><?php echo($fecha)  ?></div>
        <div class="col-1-of-2"> <?php echo($titulo)  ?> </div>
        <div class="col-1-of-3"> <?php echo($autor)  ?> </div>
      </div>
      <div class="contenido">
      <?php echo($contenido)  ?>
      </div>

      <div class="row">
        <div class="col-1-of-4"><?php echo($hora)  ?></div>
        <div class="col-1-of-2">&nbsp;</div>
        <div class="col-1-of-3"><a href="#" id="repli">Replica</a></div>
      </div>
      <a id="enlace3" href=""></a>
    </div>
    
  <?php 

if($conexion){
    $query = mysqli_query($conexion,"SELECT * FROM `replicas` WHERE `IdForo` = '$idf'");
    if($query){
      while(($row = mysqli_fetch_array($query,MYSQLI_NUM))!=NULL){
      $tituloR =$row[3];
      $contenidoR = $row[4];
      $fechaR = $row[5];
      $horaR = $row[6];
      $NoCtrlR = $row[2];
      $tipoR = $row[7];

      $query2 = mysqli_query($conexion,"SELECT `Nombre$tipoR` FROM `$tipoR` WHERE `NoCtrl` = $NoCtrlR ");
      if($query){
        $row2 = mysqli_fetch_array($query2,MYSQLI_NUM);
        $autorR = $row2[0];
      }
      ?> 
      
    <div id="replica" class="replica">
    <div class="row">
        <div class="col-1-of-4"><?php echo($fechaR)  ?></div>
        <div class="col-1-of-2"> <?php echo($tituloR)  ?> </div>
        <div class="col-1-of-3"> <?php echo($autorR)  ?> </div>
      </div>
      <div class="contenido">
      <?php echo($contenidoR)  ?>
      </div>

      <div class="row">
        <div class="col-1-of-4"><?php echo($horaR)  ?></div>
        <div class="col-1-of-2">&nbsp;</div>
        <div class="col-1-of-3"><a href="#" id="repli"></a></div>
      </div>
      <a id="enlace3" href=""></a>
    </div>

      <?php

    }
    }
   

}

$todayh = getdate();
$d = $todayh['mday'];
$m = $todayh['mon'];
$y = $todayh['year'];

$hour = $todayh['hours'].":".$todayh['minutes'];

$ref = $d."/".$m."/".$y;
  ?>



    <div class="formulario" id="formulario" style="display: none;">
        <h2>Espacio para poder hacer una replica</h2>
      <form action="../crearreplica.php" method="post">
        <div id="replica" class="replica">
          <div class="row">
            <div class="col-1-of-4"><?php echo $ref; ?></div>
            <div class="col-1-of-2"> <input type="hidden" name="titulo" value="<?php echo($titulo)  ?>"> RE: <?php echo($titulo)  ?>  </div>
            <div class="col-1-of-3">Autor</div>
          </div>
          <div class="contenido">
            <textarea
              name="mensaje"
              id="mensaje"
              cols="78"
              rows="10"
            ></textarea>
          </div>
          <div class="row">
            <div class="col-1-of-4"> <i ></i> <?php echo $hour; ?></div>
            <div class="col-1-of-3">&nbsp;</div>
            <div class="col-1-of-3"><input type="submit" value="Enviar"></div>
          </div>
        </div>
        <input type="hidden" name="idc" value="<?php echo $idc ?>">
        <input type="hidden" name="idf" value="<?php echo $idf ?>">
        <input type="hidden" name="fecha" value="<?php echo $ref ?>">
        <input type="hidden" name="hora" value="<?php echo $hour ?>">
        <input type="hidden" name="tipo" value="<?php echo $tipo ?>">
      </form>
    </div>
    <script src="../../js/jquery-3.3.1.min.js"></script>
    <script >
    $('#repli').click(function (e) {
    e.preventDefault();
    $('#formulario').toggle();

    });
    </script>
  </body>
</html>

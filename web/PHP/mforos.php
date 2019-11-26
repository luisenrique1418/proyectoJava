<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="../../css/foros.css" />
  <title>Document</title>
</head>

<body>

  <button id="boton">Crear foro</button>
  <div id="forosos">
  <?php
  $idrep = $_GET['Replica'];
  $tiporep = $_GET['ReplicaT'];
$conexion = mysqli_connect('localhost','root','','contactoitl');
if($conexion){
    $query = mysqli_query($conexion,"SELECT * FROM `foros` limit 0,10");
    while(($row = mysqli_fetch_array($query,MYSQLI_NUM))!=NULL){
      $idf = $row[0];
      $idc = $row[1];
      $titulo =$row[2];
      $contenido = $row[3];
      $fecha = $row[4];
      $hora = $row[5];
      $tipo = $row[6];
      $query2 = mysqli_query($conexion,"SELECT `Nombre$tipo` FROM `$tipo` WHERE `NoCtrl` = $idc ");
    if($query){
      $row2 = mysqli_fetch_array($query2,MYSQLI_NUM);
      $autor = $row2[0];
    }
    ?>
    <div id="foro" class="foro">
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
        <div class="col-1-of-3"><a href="../foros.php/?ReplicaCtrl=<?php echo $idrep ?>&tipo=<?php echo $tiporep?>&idF=<?php echo $idf ?>" id="Ir al foro">Ir al foro</a></div>
      </div>
      <a id="enlace3" href="foros.php/?Autor=<?php echo $idc ?>&tipo=<?php echo $tipo?>&idF=<?php echo $idf ?>"></a>
    </div>
    <?php
    }
    

}

$todayh = getdate();
$d = $todayh['mday'];
$m = $todayh['mon'];
$y = $todayh['year'];

$hour = $todayh['hours'].":".$todayh['minutes'];

$ref = $d."/".$m."/".$y;
?>
</div>
  
  <div class="formulario" id="formulario" style="display:none;">
  <h2>Espacio para crear un nuevo foro</h2>
      <form action="../crearforo.php" method="post" class="forms">
        <div id="replica" class="replica">
          <div class="row">
            <div class="col-1-of-4"><?php echo $ref; ?></div>
            <div class="col-1-of-3"><input type="text" name="titulo" id=""></div>
            <div class="col-1-of-3">Autor</div>
          </div>
          <div class="contenido">
            <textarea
              name="mensaje"
              id="mensaje"
              cols="78"
              rows="10"
              placeholder="Mensaje del foro"
            ></textarea>
          </div>
          <div class="row">
            <div class="col-1-of-4"><?php echo $hour ?></div>
            <div class="col-1-of-3">&nbsp;</div>
            <div class="col-1-of-3"><input type="submit" value="Enviar"></div>
          </div>
        </div> 
        <input type="hidden" name="idc" value="<?php echo $idc ?>">
        <input type="hidden" name="fecha" value="<?php echo $ref ?>">
        <input type="hidden" name="hora" value="<?php echo $hour ?>">
        <input type="hidden" name="tipo" value="<?php echo $tipo ?>">
      </form>
  </div>

  <script src="../../js/jquery-3.3.1.min.js"></script>
  <script>
    
    $("#foro").click(function(){
      var div1 = document.getElementById(i);
    var align = div1.getAttribute("href");
    window.location.href = align;
    });


    $("#boton").click(function(){
      $("#forosos").toggle();
      $("#formulario").toggle();
    });
  </script>
</body>

</html>
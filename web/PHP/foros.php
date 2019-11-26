
<?php 

$idc = $_GET['Autor'];
$idf = $_GET['idF'];
$tipo = $_GET['tipo'];

$conexion = mysqli_connect('localhost','root','','contactoitl');
if($conexion){
    $query = mysqli_query($conexion,"SELECT * FROM `foros` WHERE `IdForo` = '$idf'");
    if($query){
      $row = mysqli_fetch_array($query,MYSQLI_NUM);
      $titulo =$row[2];
      $contenido = $row[3];
      $fecha = $row[4];
      $hora = $row[5];
    }
    $query2 = mysqli_query($conexion,"SELECT `Nombre$tipo` FROM `$tipo` WHERE `NoCtrl` = $idc ");
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

  <?php 
  ?>

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


    <div id="replica" class="replica">
      <div class="row">
        <div class="col-1-of-4">fecha</div>
        <div class="col-1-of-3">Titulo</div>
        <div class="col-1-of-3">Autor</div>
      </div>
      <div class="contenido">
        Contenido: Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Voluptatem molestiae modi voluptatum, ea earum omnis nesciunt. Similique
        itaque architecto minima veritatis numquam hic maxime eaque ab? Ipsam
        architecto officia eaque?
      </div>
      <div class="row">
        <div class="col-1-of-4">Hora</div>
        <div class="col-1-of-3">&nbsp;</div>
      </div>
    </div>


    <div class="formulario" id="formulario" style="display: none;">
        <h2>Espacio para poder hacer una replica</h2>
      <form action="" method="post">
        <div id="replica" class="replica">
          <div class="row">
            <div class="col-1-of-4">fecha</div>
            <div class="col-1-of-3"><input type="text" name="" id=""></div>
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
            <div class="col-1-of-4"> <i ></i> Hora</div>
            <div class="col-1-of-3">&nbsp;</div>
            <div class="col-1-of-3"><input type="submit" value="Enviar"></div>
          </div>
        </div>
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

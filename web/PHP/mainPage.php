
<?php
$Nombre="adasdasd";
$foto="";
session_start();

if(!isset($_SESSION['username'])){
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];
$_SESSION['BUTTON']   = $_POST['BUTTON'];
}
$conexion = mysqli_connect('localhost','root','','contactoitl');
$NoCtrl = $_SESSION['username'];
$contraseña = $_SESSION['password'];
$tipo = $_SESSION['BUTTON'];
switch($tipo){
  case 'Alumno':
    $query = mysqli_query($conexion,"SELECT `NombreAlumno`,`Password`, `Habilitado`,`Foto` FROM `alumno` WHERE `NoCtrl` = '$NoCtrl'");
    if($query){
      $fila = mysqli_fetch_assoc($query);
      $GLOBALS['Nombre']= $fila["NombreAlumno"];
      $GLOBALS['foto'] = $fila["Foto"];
      //= $fila["Foto"];
      if(!($fila["Habilitado"] == 1 && $fila["Password"] == $contraseña)){
      ?>
      <script type="text/javascript" charset="utf-8">
        function lohicimos() {
            alert(
                "La contraseña o usuario esta mal, o no haz verificado tu cuenta"
            );
        }
        lohicimos();
      <?php
      header('Location: ../index.html');
      }
    }
  break;
  case 'Egresado':
    $query = mysqli_query($conexion,"SELECT `Password`, `Habilitado` FROM `egresado` WHERE `NoCtrlEgresado` = '$NoCtrl'");
    if($query){
      $fila = mysqli_fetch_assoc($query);
      if(!($fila["Habilitado"] == 1 && $fila["Password"] == $contraseña)){
      ?>
      <script type="text/javascript" charset="utf-8">
        function lohicimos() {
            alert(
                "La contraseña o usuario esta mal, o no haz verificado tu cuenta"
            );
        }
        lohicimos();
      <?php
      header('Location: ../index.html');
      }
    }
  break;
  case 'Profesor':
    $query = mysqli_query($conexion,"SELECT `Password`, `Habilitado` FROM `profesor` WHERE `NoTarjeta` = '$NoCtrl'");
    if($query){
      $fila = mysqli_fetch_assoc($query);
      if(!($fila["Habilitado"] == 1 && $fila["Password"] == $contraseña)){
      ?>
      <script type="text/javascript" charset="utf-8">
        function lohicimos() {
            alert(
                "La contraseña o usuario esta mal, o no haz verificado tu cuenta"
            );
        }
        lohicimos();
      <?php
      header('Location: ../index.html');
      }
    }
  break;
}
?>

<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilosMP.css" />
    <link rel="stylesheet" href="../css/Estilos1.css" />
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="stylesheet" href="../css/styles2.css" />
  </head>
  <body>
    <div class="header" >
      <div class="card--info">
        <img class="logo" src="../img/logo-white.png" alt="" />
        <p>Bienvenido a EgreTec</p>
      </div>
      <div class="Card--Personal" id="Card--Personal">
        <?php echo($NoCtrl."  ".$Nombre); ?> &nbsp;
        <img src="../img/ProfilePictures/<?php echo $foto; ?>" alt="ImagenUsuario" />
        <a href="#" id="acard">
                <i class="feature-box__icon icon-arrows-circle-down"></i>
        </a>
        <!--<a id="revealColorSelect"><i class="feature-box__icon icon-arrows-circle-down"></i></a>-->
        <div id="Spanxd">
          <span id="idid"></span>
          <a href="CreateEncuestas.html/?" target="contenido"> Crear Encuesta</a><br />
          <a href="" target="contenido"> Ver Perfil </a><br />
          <a href="#" target="contenido">Cerrar Sesion</a><br />
        </div>
        <div id="Espacios">
                <br><br><br><br>
        </div>

      </div>

      <div class="otro">
        <a href="inicio.php" target="contenido" class="btn btn--blue btn--animated"
          ><i class="feature-box_icon icon-basic-home"></i> inicio</a>
        <a href="mencuestas.php" target="contenido" class="btn btn--blue btn--animated"
          ><i class="feature-box_icon icon-basic-todo-txt"></i> encuestas</a
        >
        <a href="mforos.php/?NoCtrl=<?php echo($NoCtrl); ?>&tipo=<?php echo($tipo); ?>" target="contenido" class="btn btn--blue btn--animated"
          ><i class="feature-box_icon icon-basic-webpage-txt"></i> foros</a
        >
        <a href="mmisforos.php/?NoCtrl=<?php echo($NoCtrl); ?>&tipo=<?php echo($tipo); ?>" target="contenido" class="btn btn--blue btn--animated"
          ><i class="feature-box_icon icon-basic-webpage-img-txt"></i> mis
          foros</a
        >
      </div>
    </div>

    <div class="main" style="background-color: white;">
      <iframe
      name="contenido"
        src="inicio.php"
        width="64%"
        height="500"
        frameborder="0"
        allowfullscreen
      ></iframe>
      <iframe
      name="noticias"
        src="noticias.php"
        width="35%"
        height="500"
        frameborder="0"
        allowfullscreen
      ></iframe>
    </div>
    <div class="footer" style="background-color:white;"></div>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/app2.js" type="text/javascript" charset="utf-8"></script>
  </body>
</html>

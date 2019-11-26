

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
    <div id="foro" class="foro" onclick="klikaj('enlace1')">
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
        <div class="col-1-of-4"></div>
      </div>
      <a id="enlace1" href="./../foros.php/?NoCtrl=2"></a>
    </div>
    <div id="foro" class="foro" onclick="klikaj('enlace2')">
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
        <div class="col-1-of-4">Replica</div>
      </div>
      <a id="enlace2" href=""></a>
    </div>
    <div id="foro" class="foro" onclick="klikaj('enlace3')">
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
        <div class="col-1-of-4">Replica</div>
      </div>
      <a id="enlace3" href=""></a>
    </div>
  </div>

  
  <div class="formulario" id="formulario" style="display:none;">
  <h2>Espacio para crear un nuevo foro</h2>
      <form action="" method="post" class="forms">
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
            <div class="col-1-of-4">Hora</div>
            <div class="col-1-of-3">&nbsp;</div>
            <div class="col-1-of-3"><input type="submit" value="Enviar"></div>
          </div>
          
        </div>  
      </form>
  </div>

  <script src="../../js/jquery-3.3.1.min.js"></script>
  <script src="../../js/hola.js"></script>
  <script>
    $("#boton").click(function(){
      $("#forosos").toggle();
      $("#formulario").toggle();
    });
  </script>
</body>

</html>
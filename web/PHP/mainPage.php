<div class="contenedor">
<?php
$type = isset($_POST["type"]) ? $_POST["type"] : "NULL";
if ($type == "login"){
    echo "login";
}else {
    echo "ERROR";
}

?> 
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilosMP.css">
</head>
<body>
    <div class="embed-container">
    <iframe src="../HTML/BannerDatos.php" frameborder="0"  width="100%" ></iframe>
    </div>
</body>
</html>
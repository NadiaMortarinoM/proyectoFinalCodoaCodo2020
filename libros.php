<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Libros/variedad</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
        integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Castoro&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="estilosLibreria.css">
</head>
<body>
<div class="container" style="font-family: 'Castoro', serif; background-color: #bedbbb; height:500px;" id="header">
    <h1 class="usuarioLogueado pt-4" style="text-align: right;">Libros de alta calidad</h1>
    <p style="text-align: right;"><b>Tenemos gran variedad de géneros literarios!!</b>
</p>
</div>
<div class="container pt-2" style="background-color: #bedbbb;">
<h2 style="color: #707070;">Arte-Infantiles-Historia....</h2>
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="imagenes/arte.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">La historia del arte contada</h5>
        <p class="card-text">Es descubrir la movilidad intelectual del mundo a través de la expresión, ver el desarrollo de los sentidos y del espíritu.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="imagenes/historia.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">La Iliada y la Odisea</h5>
        <p class="card-text">La Ilíada es una epopeya griega y el poema más antiguo escrito de la literatura occidental. Se atribuye tradicionalmente a Homero.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card mt-2">
      <img src="imagenes/comics.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Comics</h5>
        <p class="card-text">El libro más completo sobre DC Comics, con más de 2.000 imágenes .</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card mt-2">
      <img src="imagenes/Antoine.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">El Principito</h5>
        <p class="card-text">El principito es un cuento poético que viene acompañado de ilustraciones hechas con acuarelas por el mismo Saint-Exupéry. En él, un piloto se encuentra perdido en el desierto del Sahara después de que su avión sufriera una avería, pero para su sorpresa, es allí donde conoce a un pequeño príncipe proveniente de otro planeta.</p>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>

<?php

include_once 'footer.php';

?>
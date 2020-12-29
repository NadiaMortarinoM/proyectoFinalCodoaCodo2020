<?php
echo 'Bienvenido a la Librería El Prado...📚!';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Usuario Logueado</title>
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
    <h1 class="usuarioLogueado pt-4" style="text-align: right;">Más Vendidos-Ofertas</h1>
    <p style="text-align: right;"><b>Si sos socio contas con descuentos de hasta 25% contado/débito,
  no te lo pierdas!!</b>
</p>
</div>
<div class="container pt-2" style="background-color: #bedbbb;">
<h2 style="color: #707070;">Los más buscados....</h2>
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="imagenes/IsabelAllende.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Largo Pétalo de Mar</h5>
        <p class="card-text">El médico Víctor Dalmau junto a su amiga Roser Bruguera, pianista, se vieron obligados a exiliarse de Barcelona, España por la Guerra Civil viajaron a Francia a bordo del barco Winnipeg de Pablo Neruda.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="imagenes/JRowling.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Harry Potter y el Misterio del Príncipe</h5>
        <p class="card-text">Harry descubre un poderoso libro y, mientras trata de descubrir sus orígenes, colabora con Dumbledore en la búsqueda de una serie de objetos mágicos que ayudarán en la destrucción de Lord Voldemort.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card mt-2">
      <img src="imagenes/WilburSmith.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">The Tiger's Prey</h5>
        <p class="card-text">Tom Courtney, one of four sons of master mariner Sir Hal Courtney, once again sets sail on a treacherous journey that will take him across the vast reaches of the ocean and pit him against dangerous enemies in exotic destinations.</p>
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
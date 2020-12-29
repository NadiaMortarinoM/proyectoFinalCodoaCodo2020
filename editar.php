<?php

//en el archivo 'conexionbase' realizo previamente mi conexión a mi base de datos:
include 'conexionbase.php';

//creo una variable id que la traigo desde mi archivo nuestroslibros.php:
$id = $_GET['id'];

$consultas2 = "SELECT * FROM librosprado WHERE id_Libro = '$id'";
$query2 = mysqli_query($conexion, $consultas2);


?>

<!--Con un html y utilizando la versión 4.5 de Bootstrap le doy forma a mi CRUD:-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Actualizar/Editar</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Castoro&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="estilosLibreria.css">
</head>

<body>
  <div class="container pt-4" style="background-color: #bedbbb; font-family: 'Castoro', serif; height:100px;">
    <form class="table table-dark" action="procesar_edicion.php" method="POST">
      <!--Con el método POST me redirijo a mi archivo procesar-editar donde se elige un libro para actualizar:-->
      <?php
      while ($filas = $lista = mysqli_fetch_array($query2)) { ?>
        <input name="id2" type="hidden" value="<?php echo $filas['id_Libro']; ?>">
        <label for="">Título:</label>
        <input name="titulo2" type="text" value="<?php echo $filas['Titulo']; ?>">
        <label for="">Autor:</label>
        <input name="autor2" type="text" value="<?php echo $filas['Autor']; ?>">
        <label for="">Editorial:</label>
        <input name="editorial2" type="text" value="<?php echo $filas['Editorial']; ?>">
        <label for="">ISBN:</label>
        <input name="isbn2" type="number" value="<?php echo $filas['ISBN']; ?>">

        <!--cierre del ciclo while!-->
      <?php } ?>
      <input name="actualizar" type="submit" value="Actualizar" class="btn btn-primary ml-2">
    </form>
  </div>


  <!-- jQuery and JS bundle w/ Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>

<?php

include_once 'footer.php';

?>
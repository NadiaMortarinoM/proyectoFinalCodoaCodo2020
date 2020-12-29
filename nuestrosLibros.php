<?php
//en el archivo 'conexionbase' realizo previamente mi conexión a mi base de datos:
include 'conexionbase.php';

echo '<h3>Podrás realizar modificaciones a nuestra base de libros:</h3>';
echo '<br>';

$consultas1 = "SELECT * FROM librosprado";

?>

<!--Con un html y utilizando la versión 4.5 de Bootstrap le doy forma a mi CRUD:-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Nuestros Libros:</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Castoro&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="estilosLibreria.css">
</head>

<body>
  <div class="container pt-4" style="background-color: #bedbbb; font-family: 'Castoro', serif; height:450px;">
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">Título:</th>
          <th scope="col">Autor:</th>
          <th scope="col">Editorial:</th>
          <th scope="col">ISBN:</th>
          <th scope="col">Editar:</th>
          <th scope="col">Eliminar:</th>

        </tr>
      </thead>
      <?php
      //pasamos la consulta, con las variables generadas:

      $query2 = mysqli_query($conexion, $consultas1);

      while ($filas = $lista = mysqli_fetch_array($query2)) { ?>
        <tbody>
          <tr>
            <!--Aqui puse el name,pero no se si esta bien que se lo ponga a un td??-->
            <td><?php echo $filas['Titulo']; ?></td>
            <td><?php echo $filas['Autor']; ?></td>
            <td><?php echo $filas['Editorial']; ?></td>
            <td><?php echo $filas['ISBN']; ?></td>
            <div>
              <!--mediante el ?id le doy una varible 'id', que estará definida en mis archivos editar y eliminar-->
              <td><a href="editar.php?id= <?php echo $filas['id_Libro']; ?>">Editar</a></td>
              <td><a href="eliminar.php?id= <?php echo $filas['id_Libro']; ?>" class="eliminacion">Eliminar</a></td>
            </div>
          </tr>
        </tbody>
        <!--cierre del ciclo while! y liberamos la variable, por si volvemos a usarla-->
      <?php }
      mysqli_free_result($query2); ?>
    </table>
  </div>

  <!--con este archivo Js mediante una función me aseguro que el usuario sepa que va a eliminar archivos-->
  <script src="confirmacion.js"></script>

  <!-- jQuery and JS bundle w/ Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>

<?php

include_once 'footer.php';

?>
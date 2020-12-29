<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Formulario de Ingreso</title>
    <link href="https://fonts.googleapis.com/css2?family=Castoro&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<!--Para el formulario, tome de ejemplo uno de Bootstrap y lo modifique a mi gusto,usando la gama de colores y letra iguales a mi Index.html-->

<body>
    <div class="container-fluid border border-success d-flex justify-content-center bd-highlight mb-3" style="width: 400px; background-color: #8db596;">
        <form action="user.php" method="POST">
            <h3 class="d-flex justify-content-center mt-2" style="color:  #707070; font-family: 'Castoro', serif;" text-align="center;">Librería El Prado</h3>

            <figure class="figure d-flex flex-row-reverse">
                <img src="imagenes/candadito.jpg" class="figure-img img-fluid rounded mb-1" alt="imagen de presentación">
            </figure>
            <div class="form-row">
                <div class="col-md-12 mb-2">
                    <label for=""></label>
                    <input type="text" class="form-control" name="Nombre" placeholder="Usuario" style="font-family: 'Castoro', serif;">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for=""></label>
                    <input type="password" class="form-control" name="Clave" placeholder="Clave: solo números" style="font-family: 'Castoro', serif;">
                </div>
            </div>
            <input type="submit" class="btn btn-success col-md-12 mt-3 mb-3" value="Ingresar" name="login" style="font-family: 'Castoro', serif;">
            <input type="submit" class="btn btn-warning col-md-12 mt-3 mb-3" value="Registrarse" name="registro" style="font-family: 'Castoro', serif;">
            <div class="col-md-12  d-flex flex-row-reverse bd-highlight">
                <label style="color: blue; font-family: 'Castoro', serif;" type="submit" name="olvido-clave">Olvidé mi clave.</label>
            </div>
        </form>
    </div>
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>

<?php
//Con el footer creado,solo resta incluirlo en cada uno de los archivos .php que se crearon:
include_once 'footer.php';

?>

<!--Agregue mi codigo PHP para conectarme a la base y poder buscar si el Usuario esta logueado o no-->
<?php
//Seciión de Login de Usuario ya Logueado en la base:


//siempre debo asegurarme de estar conectado a la base de datos:
include 'conexionbase.php';

echo '<br>';
//Creo 2 varibles que representan al Usuario y Clave de mi base de datos MySql y consulto si está registrado o no:
//var_dump($_POST);

if (isset($_POST['login'])) {
    $usuario = $_POST['Nombre'];
    $clave = $_POST['Clave'];

    $consultasql = "SELECT * FROM usuarios WHERE Usuario = '$usuario' AND Clave = '$clave'";

    $query = mysqli_query($conexion, $consultasql);

    $num_filas = mysqli_num_rows($query);

    var_dump($num_filas);

    if ($num_filas) {

        header('location: libreria.php');
    } else {
        echo '<script language="javascript">alert("El usuario y contraseña no están registrados aún 🙄");</script>';
    }
}

?>

<?php

//Sección de Registro de Nuevo Usuario:


//siempre debo asegurarme de estar conectado a la base de datos:
include 'conexionbase.php';

echo '<br>';
//Quiero registrar un nuevo usuario a mi base de datos, para ello creo nuevas funciones, y realizo la inserción a mi base de datos:

if (isset($_POST['registro'])) {
    $usuario = $_POST['Nombre'];
    $clave = $_POST['Clave'];

    //Puse la condición de que los campos no estén vacios, porque al darle click automaticamente lo guarda a la base de datos:
    if ($usuario != "") {
        $nuevousuario = "INSERT INTO usuarios (Usuario, Clave) VALUES ('$usuario', '$clave')";
        $insert = mysqli_query($conexion, $nuevousuario);
    }

    if ($insert) {

        echo '<script language="javascript">alert("Usuario creado con exito!");</script>';
    } else {

        echo    '<script language="javascript">alert("no se ha podido registrar, intentelo nuevamente!");</script>';
    }
}

?>

<?php
include 'conexionbase.php';

//No se porque si le pongo isset no funciona, de todas maneras tampoco hace los cambios como corresponde:


if (isset($_POST['actualizar'])){
$id = $_POST['id2'];
$titulo = $_POST['titulo2'];
$autor = $_POST['autor2'];
$editorial = $_POST['editorial2'];
$isbn = $_POST['isbn2'];

//creo una variable actualizar, donde le indico que desde mi tabla librosprado que actualice un libro o le cambie algún detalle:
$actualizar = "UPDATE librosprado SET Titulo='$titulo', Autor ='$autor', 
Editorial = '$editorial', ISBN = '$isbn' WHERE id_Libro = '$id'";


$update = mysqli_query($conexion, $actualizar);

if($update){
header ('location: nuestrosLibros.php'); 
 
} else {
    echo "<script>alert('No se han guardado los cambios..');</script>";
}
 }

 
?>
<?php
//incluyo el footer a mi página:
include_once 'footer.php';

?>
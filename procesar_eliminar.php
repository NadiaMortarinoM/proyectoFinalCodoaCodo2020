<?php
include 'conexionbase.php';

    if (isset($_POST['eliminar'])){
        $id = $_POST['id2'];
        $titulo = $_POST['titulo2'];
        $autor = $_POST['autor2'];
        $editorial = $_POST['editorial2'];
        $isbn = $_POST['isbn2'];

//creo una variable eliminar, donde le indico que desde mi tabla librosprado elimine un elemento:
$eliminar = "DELETE FROM librosprado WHERE id_Libro = '$id'";

//ejecuto la consulta eliminar:
$resultadoEliminar = mysqli_query($conexion, $eliminar);

if ($resultadoEliminar){
    header('location: nuestrosLibros.php');
}else {
    echo '<script language="javascript">alert("No se pudo eliminar el archivo deseado.");</script>';
}
    }
?>
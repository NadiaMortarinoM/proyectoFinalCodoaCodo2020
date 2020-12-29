//Se crea un archivo JS para que el usuario este atento a que va a borrar un registro de la base:

function confirmacion(e) {
    if (confirm("¿Estas seguro de eliminar el registro?")) {
        return true;
    }else {
      e.preventDefault();
    }
}

let linkDelete = document.querySelectorAll(".eliminacion");

for (var i=0; i < linkDelete.length; i++) {
    linkDelete[i].addEventListener('click', confirmacion);
}
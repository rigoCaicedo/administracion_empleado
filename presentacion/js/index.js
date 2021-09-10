let crearEmpleado=document.querySelector('button[name=crear]')
crearEmpleado.addEventListener('click',nuevoEmpleado);
function nuevoEmpleado(){
    window.open("../presentacion/modal.php?accion=guardar", "nuevo usuario",
                "location=no,width=600,height=600,scrollbars=yes,top=100,left=700,resizable = no");
}

function editarEmpleado(id){
    window.open("../presentacion/modal.php?accion=modificar", "modificar usuario",
                "location=no,width=600,height=600,scrollbars=yes,top=100,left=700,resizable = no");
}
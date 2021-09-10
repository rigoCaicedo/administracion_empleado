<?php

if (isset($_POST['guardar'])) {
    
    $boletin=(isset($_POST['boletin']) && $_POST['boletin'] =1)?1:0;
      require '../negocio/Empleado.php';
      $newEmpleado = new Empleado(0, $_POST['nombre_completo'], $_POST['email'], $_POST['sexo'], 1, $boletin, $_POST['descripcion']);
      $newEmpleado->insertar();
}
if (isset($_POST['modificar'])) {
}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $accion ?> Empleado</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="fontawesome/js/fontawesome.js">
    <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">    
</head>

<body>
    <h1>Lista de Empleados</h1>
    <div>
        <button type="button" class="btn btn-primary float-right" name="crear">Crear</button>
    </div>
    <table class="table" data-pagination="true" data-search="true" data-toggle="table" data-url="controller/fetch.php" data-pagination="true" data-editable-url="controller/update.php">
        <thead>
            <tr>
                <th id="code" data-sortable="true" data-field="Code">Nombre</th>
                <th id="name" data-editable="true" data-field="Name">Email </th>
                <th id="mail" data-field="Mail" data-editable="true">Sexo</th>
                <th id="mail" data-field="Mail" data-editable="true">Area</th>
                <th id="mail" data-field="Mail" data-editable="true">Bolet&iacute;n</th>
                <th id="mail" data-field="Mail" data-editable="true">Modificar</th>
                <th id="mail" data-field="Mail" data-editable="true">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php require_once 'listarEmpleados.php'?>
        </tbody>
    </table>
    <script src="js/index.js"></script>
</body>

</html>
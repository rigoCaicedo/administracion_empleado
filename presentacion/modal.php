
<?php
$accion=$_GET['accion'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$accion?> Empleado</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <h1><?= $accion ?> empleado</h1>
    <div class="nota bg-success p-2 text-dark bg-opacity-25">
        <p>Los campos con asteriscos(*) son obligatorios</p>
    </div>
    <form id="#formulario" action="procesar.php" method="post">

        <div class="form-group">
            <!-- Nombre Completo -->
            <label for="nombre_completo" class="control-label">Nombre Completo *</label>
            <input type="text" class="form-control" id="nombre_completo" name="nombre_completo" placeholder="Nombre completo del empleado">
        </div>

        <div class="form-group">
            <!-- email -->
            <label for="email" class="control-label">Correo Electr&oacute;nico *</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Correo electr&oacute;nico">
        </div>

        <div class="form-group">
            <!-- sexo-->
            <label for="sexo" class="control-label">Sexo *</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexo" id="sexo" value="M">
                <label class="form-check-label" for="sexo">
                    Masculino
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexo" id="sexo" value="F" checked>
                <label class="form-check-label" for="sexo">
                    Femenino
                </label>
            </div>
        </div>

        <div class="form-group">
            <!-- area -->
            <label for="area" class="control-label">Area *</label>
            <select class="form-control" id="area" name="area">
                <option value="0">--Seleccione &aacute;rea</option>
            </select>
        </div>

        <div class="form-group">
            <!-- descripcion-->
            <label for="descripcion" class="control-label">Descripci&oacute;n *</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Descripci&oacute;n de la experiencia del usuario"></textarea>
        </div>
        <br>
        <!--recibir boletin informativo-->
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="boletin" id="boletin" value="1">
            <label class="form-check-label" for="boletin">Deseo recibir bolet&iacute;n informativo</label>
        </div>
        <br>
        <div class="form-group">
            <!-- roles-->
            <label for="descripcion" class="control-label">Roles *</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
        </div>
        <br>
        <div class="form-group">
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary" name="<?=$accion?>">Guardar</button>
        </div>

    </form>
</body>

</html>
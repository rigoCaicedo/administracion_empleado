<?php

class Empleado
{
    private $id;
    private $nombre;
    private $email;
    private $sexo;
    private $areaId;
    private $boletin;
    private $descripcion;

    function __construct($id, $nombre, $email, $sexo, $areaId, $boletin, $descripcion)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->sexo = $sexo;
        $this->areaId = $areaId;
        $this->boletin = $boletin;
        $this->descripcion = $descripcion;
    }

    function insertar()
    {
        include_once '../datos/Conectar.php';
        $objPDO = new Conectar();

        $connect = $objPDO->conectarBD();
        $sql = "insert into empleados(nombre,email,sexo,area_id,boletin,descripcion) 
values(:nombre,:email,:sexo,:area_id,:boletin,:descripcion)";

        $sql = $connect->prepare($sql);

        $sql->bindParam(':nombre', $this->nombre, PDO::PARAM_STR, 255);
        $sql->bindParam(':email', $this->email, PDO::PARAM_STR, 255);
        $sql->bindParam(':sexo', $this->sexo, PDO::PARAM_STR, 1);
        $sql->bindParam(':area_id', $this->areaId, PDO::PARAM_INT);
        $sql->bindParam(':boletin', $this->boletin, PDO::PARAM_INT);
        $sql->bindParam(':descripcion', $this->descripcion, PDO::PARAM_STR);

        $sql->execute();

        $lastInsertId = $connect->lastInsertId();
        if ($lastInsertId > 0) {
            echo "<div class='content alert alert-primary' > Empleado insertado correctamente</div>";
        } else {
            echo "<div class='content alert alert-danger'> No se pueden agregar datos, comuníquese con el administrador  </div>";

            print_r($sql->errorInfo());
        }
    }

    function modificar()
    {
    }

    function eliminar()
    {
    }

    function listar()
    {
        include_once '../datos/Conectar.php';
        $objPDO = new Conectar();
        $connect = $objPDO->conectarBD();

        $sql = "SELECT * FROM empleados";
        $query = $connect->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        if ($query->rowCount() > 0) {
            foreach ($results as $result) {
                echo "<tr>
                <td>" . $result->nombre . "</td>
                <td>" . $result->email . "</td>
                <td>" . $result->sexo . "</td>
                <td>" . $result->area_id . "</td>
                <td>" . $result->boletin . "</td>
                <td>" . '<i class="fas fa-edit"></i>' . "</td>
                <td>" . '<i class="fas fa-trash-alt"></i>' . "</td>
                </tr>";
            }
        }
    }
}

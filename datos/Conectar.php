<?php

class Conectar
{
    public $host;
    public $user;
    public $pass;
    public $dbname;
    public $conn;//objeto de conexion

    function __construct()
    {
        require '../datos/config.php';        
        if (empty($hostdb) || empty($userdb) || empty($namedb)) {
            die('Error!. Faltan datos de configuración en conexion a base de datos');
        } else {
            $this->host = $hostdb;
            $this->user = $userdb;
            $this->pass = $passdb;
            $this->dbname = $namedb;
            return true;
        }
    }

    function conectarBD()
    {
        try {
            $dsn='mysql:host='.$this->host.';dbname='.$this->dbname;

            $conn = new PDO($dsn, $this->user, $this->pass);
            $this->conn=$conn;
            return $this->conn;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}

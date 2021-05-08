<?php
include "../controllers/Conex.php";

Class Admin{
    private $con;

    function __construct() {
        $this->con = new Conex();
    }

    function getAll()
    {
        $query= "SELECT * FROM administradores";
        return $this->con->query($query);
    }

    function searchByNickName($nickname)
    {
        $query = "SELECT * FROM administradores WHERE userName= '$nickname'";
        return $this->con->query($query);
    }

    function deleteByNickName($nickname)
    {
        $query = "DELETE FROM administradores WHERE userName= '$nickname'";
        return $this->con->query($query);
    }

    function updateAdmin($name,$nick,$email,$password)
    {
        $query = "UPDATE administradores SET nombre = '$name', userName= '$nick', correo = '$email', password = '$password' WHERE userName = '$nick'";
        return $this->con->query($query);
    }

    function createAdmin($name,$nick,$email,$password)
    {
        $query = "INSERT INTO administradores (nombre,userName,correo,password) VALUES  ('$name','$nick','$email','$password')";
        return $this->con->query($query);
    }

    function getCon()
    {
        return $this->con;
    }
}

?>
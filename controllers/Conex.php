<?php

Class Conex
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbName = "Viloria";

    private $con;

    public function __construct() {
        $this->con = new mysqli($this->host,$this->user,$this->password,$this->dbName);
    }

    public function getCon()
    {
        return $this->con;
    }

    public function query($query)
	{
		return $this->con->query($query);
	}
}
?>
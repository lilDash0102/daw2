<?php
include "../Models/Admin.php";
$admin = new Admin();
session_start();
if(isset($_POST['crear']))
{
    $name = $_POST['nombre'];
    $nickname = $_POST['nickname'];
    $email  = $_POST['email'];
    $password = hash("MD5", $_POST['password']);

    $resutl =  $admin->createAdmin($name,$nickname,$email,$password);

    if($resutl)
    {
        $_SESSION['success'] = "Usuario creado con exito";
    }
    else
    {
        $_SESSION['error'] = "No se pudo crear el usuario";
        var_dump($admin->getCon());
    }
    header("location: ../views/administrador.php?add=1"); 
}

?>
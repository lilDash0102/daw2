<?php  
if(isset($_POST['email']) && isset($_POST['password']))
{
    include "Conex.php";
    $con = new Conex();
    session_start();

    $email = $_POST['email'];
    $password = hash('MD5',$_POST['password']);
    $query = "SELECT * FROM administradores WHERE correo ='$email' AND password = '$password'";
    $user = $con->query($query)->fetch_assoc();

    if($user != null)
    {
        $_SESSION['user'] = $user;
        header("location: ../views/header");
    }
    else
    {
        $_SESSION['error'] = "Usuario no encontrado";
        header("location: ../views");
    }
}
else
{
    $_SESSION['error'] = "Favor llenar todos los datos";
    header("location: ../views");
}
?>
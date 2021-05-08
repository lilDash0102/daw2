<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parcial</title>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="../app.css">
  <!-- Compiled and minified JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="../app.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Oleo+Script:wght@700&display=swap" rel="stylesheet">
</head>

<body>
  <nav>
    <div class="nav-wrapper" style="background-color: #FC1EC4">
      <a href="header.php" class="brand-logo"><img src="../imgs/Logotipo_Corporación_Universitaria_Americana_(big).png" height="60px"></a>
      <a class="grey-text text-lighten-4 right" href="LogOut.php"><i class="material-icons">Log-Out</i></a>
      <ul class="right hide-on-med-and-down">
        <li>
          <a class="dropdown-trigger" data-target='dropdown1'><i class="material-icons">Administradores</i></a>
          <ul id='dropdown1' class='dropdown-content'>
            <li><a href="administrador.php?add=1">Crear</a></li>
            <li><a href="administrador.php?list=1">Listar</a></li>
            <li><a href="administrador.php?update=1">Actualizar</a></li>
            <li><a href="administrador.php?delete=1">Eliminar</a></li>
          </ul>
        </li>
        <li>
          <a class="dropdown-trigger" data-target='dropdown2'><i class="material-icons">Sede</i></a>
          <ul id='dropdown2' class='dropdown-content'>
            <li><a href="#!">Crear</a></li>
            <li><a href="#!">Listar</a></li>
            <li><a href="#!">Actualizar</a></li>
            <li><a href="#!">Eliminar</a></li>
          </ul>
        </li>
        <li>
          <a class="dropdown-trigger" data-target='dropdown3'><i class="material-icons">Sala</i></a>
          <ul id='dropdown3' class='dropdown-content'>
            <li><a href="#!">Crear</a></li>
            <li><a href="#!">Listar</a></li>
            <li><a href="#!">Actualizar</a></li>
            <li><a href="#!">Eliminar</a></li>
          </ul>
        </li>
        <li>
          <a class="dropdown-trigger" data-target='dropdown4'><i class="material-icons">Computadores</i></a>
          <ul id='dropdown4' class='dropdown-content'>
            <li><a href="#!">Crear</a></li>
            <li><a href="#!">Listar</a></li>
            <li><a href="#!">Actualizar</a></li>
            <li><a href="#!">Eliminar</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</body>
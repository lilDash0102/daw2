<?php
include 'header.php';
?>
<h1 id="title" class="center" style="font-size: 35px;">Administrador</h1>
<?php
if (isset($_GET['add'])) {
    unset($_GET['add']);
?>
    <div style="padding: 10px 40px; margin-top: 20px; border-radius: 20px" class="container z-depth-1">
        <h1 id="title" class="center" style="font-size: 35px;">Crear</h1>
        <form action="../AdminController.php" method="POST">
            <div class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Nombres" name="nombre" type="text" class="validate">
                        <label for="first_name">Nombres</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Apodo</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>

                <button class="btn waves-effect waves-light" style="margin-left: 50%;
  transform: translateX(-50%);" type="submit" name="action">Crear
                    <i class="material-icons right"></i>
                </button>
            </div>
        </form>
    </div>
<?php
}
?>

<?php
if (isset($_GET['update'])) {
    unset($_GET['update']);
?>
    <div style="padding: 10px 40px; margin-top: 20px; border-radius: 20px" class="container z-depth-1">
        <h1 id="title" class="center" style="font-size: 35px;">Actulizar</h1>
        <form action="../AdminController.php" method="POST">
            <div class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Nombres" name="nombre" type="text" class="validate">
                        <label for="first_name">Nombres</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Apodo</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>

                <button class="btn waves-effect waves-light" style="margin-left: 50%;
  transform: translateX(-50%);" type="submit" name="action">Actualizar
                    <i class="material-icons right"></i>
                </button>
            </div>
        </form>
    </div>
<?php
}
?>

<?php
if (isset($_GET['list'])) {
    unset($_GET['list']);
?>
    <table class="striped">
        <thead>
          <tr>
              <th>Nombre</th>
              <th>Apodo</th>
              <th>Email</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
        </tbody>
      </table>
<?php
}
?>

<?php
include 'footer.php';
?>
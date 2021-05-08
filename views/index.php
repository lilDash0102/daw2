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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script:wght@700&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['error'])) {
    ?>
        <div style="background-color: red; text-align: center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif" role="alert">
            <?php echo $_SESSION['error'];  ?>
        </div>
    <?php
    unset($_SESSION['error']);
    }
    ?>
    <?php
    if (isset($_SESSION['success'])) {        
    ?>
        <div style="background-color: green; text-align: center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif" role="alert">
            <?php echo $_SESSION['error'];  ?>
        </div>
    <?php
    unset($_SESSION['success']);
    }
    ?>

    <div class="container">
        <div class="row">
            <form action="../controllers/Login.php" method="POST">
                <div class="col s6 push-s3 center-align z-depth-5" id="login-box">
                    <h1 id="title">Café internet</h1>
                    <div class="row" style="margin-top: 10%">
                        <div class="input-field col s10 push-s1">
                            <input id="email" name="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s10 push-s1">
                            <input id="password" name="password" type="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Log in
                        <i class="material-icons right"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
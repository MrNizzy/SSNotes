<!DOCTYPE html>
<html lang="es">

<head>
    <!--Meta-tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title-->
    <title>SSNotes - Iniciar Sesión</title>
    <!--Favicon-->
    <link rel="shortcut icon" href="static/img/logo-success.svg" type="image/x-icon">
    <!--Styles-->
    <link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.css">
    <link rel="stylesheet" href="static/css/custom.min.css">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200&family=Lato:ital@1&family=Modak&display=swap" rel="stylesheet">
    <!-- Icons -->
    <script src="https://kit.fontawesome.com/df8b754810.js" crossorigin="anonymous"></script>

</head>

<body class="splash">

    <div class="container mx-auto"style="width: 400px;">
        <div class="row">
            <div class="formulario-login col">
                <form action="">
                    <div class="form-group">
                        <img src="static/img/logo-success-dark.svg" alt="SSNotes" height="55px">
                    </div>
                    <div class="form-group">
                        <h1 class="anton-font text-primary">SSNotes</h1>
                    </div>
                    <div class="form-group">
                        <h5 class="text-primary text-left lato-font"><i class="fas fa-user"></i> Usuario</h5>
                        <input type="text" class="form-control mx-sm-5" placeholder="Usuario" required>
                    </div>
                    <div class="form-group">
                        <h5 class="text-primary text-left lato-font"><i class="fas fa-lock"></i> Contraseña</h5>
                        <input type="password" class="form-control mx-sm-5" placeholder="Contraseña" required>
                    </div>
                    <div class="form-group">
                        <a href="panel/index.php" class="btn btn-block btn-primary">Iniciar Sesión</a>
                    </div>
                    <div class="form-group">
                        <a class="text-center card-link" href="register.php">Crear una cuenta <i class="fas fa-plus"></i></a>
                    </div>
                    <div class="form-group">
                        <a class="text-center card-link" href="#">¿Olvidaste la contraseña? <i class="fas fa-user-edit"></i></a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>

</html>
<?php

    session_start();
    $has_session = session_status() == PHP_SESSION_ACTIVE;
    if($has_session==false){
        header("location: ../login.php");
    }

    $NombreCuenta = $_SESSION['username'];
    $IdCuenta = $_SESSION['id'];

?>
<?php /*<br>
<div id="carouselExampleCaptions" class="carousel slide container" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../static/img/slide03.jpg" class="d-block w-100 rounded-lg" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1>First slide label</h1>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../static/img/slide02.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../static/img/slide01.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>*/ ?>
<header class="container-navbar">
    <div class="container text-left">
        <div class="container jumbotron">
            <h1 class="display-4">¡Bienvenido<?php echo " $NombreCuenta"; ?>!</h1>
            <h4 class="lead">Las noticias más actuales acerca de SSNotes apareceran aquí.</h4>
            <hr class="my-4">
            <h4>¿Quieres ir a tu sección de asignaturas?</h4>
            <a class="btn btn-primary btn-lg" href="gestionar-asignaturas.php" role="button">Ir a asignaturas</a>
        </div>
    </div>
</header>
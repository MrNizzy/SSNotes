<?php

    session_start();
    $has_session = session_status() == PHP_SESSION_ACTIVE;
    if($has_session==false){
        header("location: ../login.php");
    }

    $NombreCuenta = $_SESSION['username'];
    $_SESSION['Ho']=0;

?>
<header class="container-navbar">
</header>
<section class="container-navbar">
    <div class="container">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-center text-primary">Agregar nueva asignatura</h5>
                <center class="display-1 text-info"><i class="fas fa-calendar-plus"></i></center>
                <a href="nueva-asignatura.php" class="btn btn-info btn-lg btn-block">Agregar Nueva</a>
            </div>
        </div>
    </div>
</section>
<br>
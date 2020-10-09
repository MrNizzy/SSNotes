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

<h1 class="text-center container lato-font text-primary">
<i class="fas fa-folder-open" style="padding-right:5px"></i>
Gestiona tus asignaturas</h1>

<section class="container-navbar">
    <div class="container">
        <div class="card" style="width: 18rem;">
            <a href="nueva-asignatura.php" class="card-body rounded bg-primary">
                    <center class="display-1 text-light"><i class="fas fa-plus"></i></center>
            </a>
        </div>
    </div>
</section>
<br>
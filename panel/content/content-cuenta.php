<?php

    session_start();
    $has_session = session_status() == PHP_SESSION_ACTIVE;
    if(session_status() == PHP_SESSION_NONE){
        header("location: ../login.php");
    }

?>
<header class="container-navbar">
</header>

<h1 class="text-center container lato-font text-primary">
    <i class="fas fa-user-circle" style="padding-right:5px"></i>
    Configuración de tu cuenta
</h1>

<section class="container-navbar">
    <div class="container">
        <form action="?" method="POST">
            <div class="row">
                <div class="col col-md-6 mb-3">
                    <label><i class="fas fa-user-circle" style="padding-right:5px"></i>Nombre de la Cuenta</label>
                    <input type="text" class="form-control" placeholder="Usuario" disabled>
                </div>
                <div class="col col-md-6 mb-3">
                    <label><i class="fas fa-user-alt" style="padding-right:5px"></i>Nombre del usuario</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre usuario">
                </div>
            </div>
            <div class="row">
                <div class="col col-md-6 mb-3">
                    <label><i class="fas fa-envelope" style="padding-right:5px"></i>E-mail</label>
                    <input type="email" name="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="col col-md-6 mb-3">
                    <label><i class="fas fa-unlock" style="padding-right:5px"></i>Nueva Contraseña</label>
                    <input type="password" name="newP" class="form-control" placeholder="Nueva contraseña">
                </div>
            </div>
            <div class="row">
                <div class="col col-md-6 mb-3">
                    <label><i class="fas fa-calendar-alt" style="padding-right:5px"></i>Fecha de registro</label>
                    <input type="text" name="fechaReg" class="form-control" placeholder="DD/MM/AA" disabled>
                </div>
                <div class="col col-md-6 mb-3">
                    <label><i class="fas fa-key" style="padding-right:5px"></i>Confirma tu contraseña <i class="fas fa-asterisk text-danger" style="font-size:8px"></i></label>
                    <input type="password" name="password" class="form-control" placeholder="Contraseña actual" required>
                </div>
            </div>

            <div class="row">
                <button name="crear" class="btn btn-danger btn-block btn-lg">Modificar información del perfil<i class="fas fa-exclamation-circle" style="padding-left:5px"></i></button>
            </div>
        </form>
    </div>
</section>
<br>
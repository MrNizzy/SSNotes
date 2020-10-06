<?php

    session_start();
    $has_session = session_status() == PHP_SESSION_ACTIVE;
    if($has_session==false){
        header("location: ../login.php");
    }
    $NombreCuenta = $_SESSION['username'];

?>
<header class="container-navbar">
    <h1 class="display-5 container text-center"><i class="fas fa-atlas" style="padding-right:5px"></i>Crear una nueva
        asignatura.</h1>
</header>
<section class="container-navbar">
    <div class="container">
        <form action="?" method="POST">
            <div class="row">
                <div class="col col-md-6 mb-3">
                    <label>Nombre de la asignatura</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre asignatura" required>
                </div>
                <div class="col col-md-6 mb-3">
                    <label>Créditos (Intensidad horaria)</label>
                    <select class="custom-select mr-sm-2 form-control" name="creditos">
                        <option selected>No asignar...</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-6 mb-3">
                    <label>Lugar (salón de clases)</label>
                    <input type="text" name="salon" class="form-control" placeholder="Salón de clases">
                </div>
                <div class="col col-md-6 mb-3">
                    <label>Docente a cargo de la asignatura</label>
                    <select class="custom-select mr-sm-2 form-control" id="inlineFormCustomSelect">
                        <option selected>No asignar...</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-6 mb-3">
                    <label>Hora de inicio</label>
                    <input type="time" name="hour_in" class="form-control" />
                </div>
                <div class="col col-md-6 mb-3">
                    <label>Hora de salida</label>
                    <input type="time" name="hour_out" class="form-control" />
                </div>
            </div>

            <?php

                include("../static/php/crear-asignatura.php");

            ?>

            <div class="row">
                <button name="crear" class="btn btn-info btn-block btn-lg">Crear asignatura<i class="fas fa-plus-circle"
                        style="padding-left:5px"></i></button>
            </div>
        </form>
    </div>
</section>
<br>
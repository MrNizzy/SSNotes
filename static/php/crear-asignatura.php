<?php

include("conexion.php");

if (isset($_POST['crear'])){
    if (strlen($_POST['nombre']) >= 1){

        $nombre = trim($_POST['nombre']);
        $creditos = trim($_POST['creditos']);
        $salon = trim($_POST['salon']);
        $ingreso = trim($_POST['hour_in']).":00";
        $salida = trim($_POST['hour_out']).":00";
        $IdCuenta = $_SESSION['id'];

            $consultaSubject = "INSERT INTO Subjects (Name, UserID) VALUES ('$nombre', '$IdCuenta')";
            
            $resultado = mysqli_query($conex, $consultaSubject);

            if(strlen($_POST['salon']) >= 1 || strlen($_POST['hour_in']) >= 1 || strlen($_POST['hour_out']) >= 1){
                $consultarIdSubject = "SELECT MAX(ID) from Subjects";
                $array = mysqli_fetch_array($consultarIdSubject);
                $IdSubject = $array['ID'];

                $consultaST = "INSERT INTO Teacher_Subject (SubjectID, Timetable_Out, Timetable_In, Classroom,  User) VALUES ('$IdSubject', '$salida', '$ingreso', '$salon', '$IdCuenta')";
                    $resultadoST = mysqli_query($conex, $consultaST);
            }

            ?>
                <h3 class="alert alert-dismissible alert-success">¡Se ha registrado la asignatura correctamente!</h3>
            <?php

            }else {
                ?>
                    <h3 class="alert alert-dismissible alert-info">¡Por favor ingresa un nombre!</h3>
                <?php
            } 

            
            //header("location: ../static/crear-asignatura.php");
            //echo $creditos;
            
        
    }


?>
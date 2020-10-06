<?php

include("conexion.php");

if (isset($_POST['registro'])){
    if (strlen($_POST['usuario']) >= 1 && strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1 && strlen($_POST['repassword']) >= 1){

        $usuario = trim($_POST['usuario']);
        $nombre = trim($_POST['nombre']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $repassword = trim($_POST['repassword']);
        $fechareg = date("d/m/y");
        
        if(strlen($_POST['password']) == strlen($_POST['repassword'])){
            

            $consulta = "INSERT INTO Users (UserName, Password, Name, Email, RegDate) VALUES ('$usuario', '$password', '$nombre', '$email', '$fechareg')";
            $resultado = mysqli_query($conex, $consulta);

            if ($resultado) {
                ?>
                <h3 class="alert alert-dismissible alert-success">¡Te has registrado correctamente!</h3>
                <?php
            } else {
                ?>
                <h4 class="alert alert-dismissible alert-danger">¡El nombre de usuario o e-mail ya existe, por favor ingresa otra información, si crees que se trata de un error por favor contáctanos!</h4>
                <?php
            }
        }else{
            ?>
            <h4 class="alert alert-dismissible alert-warning">¡Las contraseñas no coinciden!</h4>
            <?php
        }

        
    } else {
        ?>
        <h3 class="alert alert-dismissible alert-info">¡Por favor llena los datos!</h3>
        <?php
    } 
}

?>
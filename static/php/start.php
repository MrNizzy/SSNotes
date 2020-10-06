<?php

require 'conexion.php';

session_start();

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$q = "SELECT * from Users where UserName = '$usuario' and Password = '$password'";
$consulta = mysqli_query($conex, $q);

$array = mysqli_fetch_array($consulta);

if(mysqli_num_rows($consulta) > 0){

    $_SESSION['username'] = $usuario;
    $_SESSION['id'] = $array['ID'];

    header("location: ../../panel/index.php");
}else{
    ?>
    
    <?php
}

?>
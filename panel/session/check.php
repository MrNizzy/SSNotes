<?php
    require_once("config.php");
    session_start();        
    $mysql_connect = mysqli_connect($mysql["host"], $mysql["username"], $mysql["password"]) or die("No se puede conectar a la base de datos.");
    mysqli_select_db($mysql_connect, $mysql["realmd"]) or die("No se puede seleccionar la base de datos de inicio de sesión.");	
    $post_accountname = mysqli_real_escape_string($mysql_connect, trim(strtoupper($_POST["username"])));
    $post_password = strtoupper(mysqli_real_escape_string($mysql_connect, trim($_POST["pass"])));
    $post_password_final = strtoupper(mysqli_real_escape_string($mysql_connect, SHA1("".$post_accountname.":".$post_password."")));	
    $check_account_query = mysqli_query($mysql_connect, "SELECT * FROM account WHERE username = '".$post_accountname."'");
    $check_account_results = mysqli_fetch_array($check_account_query);
    if(!$check_account_results){
        echo '<script> alert("El usuario ingresado no existe.");</script>';
        echo '<script> window.location="../page/login.html"; </script>';
    }else{
        if($check_account_results['sha_pass_hash']!=$post_password_final){
            echo '<script> alert("La contrasena ingresada es incorrecta.");</script>';
            echo '<script> window.location="../page/login.html"; </script>';
        }else{
            $_SESSION['Id_User'] = $check_account_results['id'];
            $_SESSION['User_User'] = $check_account_results['username'];
            $_SESSION['Email_User'] = $check_account_results['email'];
            $_SESSION['Ip_User'] = $check_account_results['last_ip'];
            echo '<script> window.location="../control/c-panel.php"; </script>';
        }
    }
    mysqli_close($mysql_connect);
?>
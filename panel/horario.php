<!DOCTYPE html>
<html lang="es">

<head>
    <!--Title-->
    <title>SSNotes - Horario</title>

    <?php

    require_once('layouts/head.php')
    ?>

</head>

<body>
    <div>
        <?php 
    require_once('components/navbar.php');	
    
 ?>
    </div>

    <!--Contenido del sitio-->
    <div>
        <?php 
    require_once('content/content-horario.php');	
 ?>

    </div>

    <div>
        <?php 
    require_once('components/footer.php');	
 ?>
    </div>

    <?php
    require_once('layouts/scripts.php')
    ?>
</body>

</html>
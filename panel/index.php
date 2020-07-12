<!DOCTYPE html>
<html lang="en">

<head>
    <!--Title-->
    <title>SSNotes - Panel</title>

    <?php

    require_once('layouts/head.php')
    ?>

</head>

<body class="background-svg">
    <div>
        <?php 
    require_once('components/navbar.php');	
    
 ?>
    </div>

    <!--Contenido del sitio-->
    <div>
        <?php 
    require_once('content/start.php');	
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

<!DOCTYPE html>
<html lang="en">

<head>
    <!--Title-->
    <title>SSNotes - Panel</title>

    <?php

    require_once('layouts/head.php')
    ?>

</head>

<body>
    <?php 
	//carga la plantilla con la header y el footer
    require_once('components/navbar.php');	
    
 ?>
    <div class="col">
        <?php 
	//carga la plantilla con la header y el footer
    require_once('content/start.php');	
    
 ?>

    </div>
    <center>
        <?php 
	//carga la plantilla con la header y el footer
    require_once('components/footer.php');	
    
 ?>
    </center>

    <?php
    require_once('layouts/scripts.php')
    ?>
</body>

</html>

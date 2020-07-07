<!DOCTYPE html>
<html lang="en">

<head>
    <!--Meta-tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title-->
    <title>SSNotes - Panel</title>
    <!--Favicon-->
    <link rel="shortcut icon" href="../static/img/logo.svg" type="image/x-icon">
    <!--Styles-->
    <link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.css">
    <link rel="stylesheet" href="../static/css/custom.min.css">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200&family=Lato:ital@1&family=Modak&display=swap" rel="stylesheet">
    <!-- Icons -->
    <script src="https://kit.fontawesome.com/df8b754810.js" crossorigin="anonymous"></script>

</head>

<body>
    <?php 
	//carga la plantilla con la header y el footer
    require_once('static/navbar.php');	
    
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
    require_once('static/footer.php');	
    
 ?>
</center>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>
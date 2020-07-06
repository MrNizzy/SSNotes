<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSNotes</title>
    <link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.css">
    <link rel="stylesheet" href="static/css/custom.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200&family=Lato:ital@1&family=Modak&display=swap" rel="stylesheet">
    <!-- Place your kit's code here -->
    <script src="https://kit.fontawesome.com/df8b754810.js" crossorigin="anonymous"></script>
</head>

<body class="splash">

    <header>
        <?php 
		require_once('static/header.php');
	?>
    </header>

    <section>
        <div class="container">
            <?php 
			// carga el archivo routing.php para direccionar a la página .php que se incrustará entre la header y el footer
			require_once('content/start.php');
	 ?>

        </div>
    </section>

    <footer>
        <?php 
		include_once('static/footer.php');
	?>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>

</html>
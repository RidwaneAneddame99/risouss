<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./pages/header/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="./pages/footer/footer.css">
    <link rel="stylesheet" href="./pages/home/home.css">
    <link rel="stylesheet" href="./pages/Products/Pepper.css">
    <title>Document</title>
</head>
<body>
    <header>
		<?php 
        include './pages/header/header.php'; 
        ?>
   
	</header>
    <main>
    <?php 
        include './pages/home/home.php'; 
        ?>
	</main>
	<footer>
		<?php include './pages/footer/footer.php'; ?>
	</footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
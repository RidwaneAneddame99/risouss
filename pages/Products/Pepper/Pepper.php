<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../header/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../../footer/footer.css">
    <link rel="stylesheet" href="Pepper.css">

    <title>Document</title>
</head>
<body>
<?php 
 $baseURL = 'http://' . $_SERVER['HTTP_HOST'];
 $imagePath = $baseURL . '/risouss/assets/risousslogo.png';
 $imageprincessa = $baseURL . '/risouss/assets/product/img_products/Papper/princessa.png';

?>
    <header>
		<?php 
        include '../../header/header.php'; 
        ?>
   
	</header>
    <main>
   
    <div class="product-container">
  <div class="product">
    <img src="<?php print $imageprincessa?>" alt="Product 1" class="product-image">
    <h3 class="product-name">1:Princessa</h3>
  </div>
  <div class="product">
  <img src="<?php print $imageprincessa?>" alt="Product 1" class="product-image">
    <h3 class="product-name">2:Totalisa</h3>
  </div>
  <div class="product">
  <img src="<?php print $imageprincessa?>" alt="Product 1" class="product-image">
    <h3 class="product-name">3:Caminero</h3>
  </div>
  <div class="product">
  <img src="<?php print $imageprincessa?>" alt="Product 1" class="product-image">
    <h3 class="product-name"> 4:Genil</h3>
  </div>
  <div class="product">
  <img src="<?php print $imageprincessa?>" alt="Product 1" class="product-image">
    <h3 class="product-name">5:Monster</h3>
  </div>
  <div class="product">
  <img src="<?php print $imageprincessa?>" alt="Product 1" class="product-image">
    <h3 class="product-name">6:Creamy</h3>
  </div>

  <!-- Add more product items as needed -->
</div>




	</main>
	<footer>
		<?php include '../../footer/footer.php'; ?>
	</footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
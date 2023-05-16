<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../header/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../footer/footer.css">
    <link rel="stylesheet" href="contact.css">
    <title>Document</title>
</head>
<body>
<?php 
 $baseURL = 'http://' . $_SERVER['HTTP_HOST'];
 $imageemail = $baseURL . '/risouss/assets/contact/email.png';
 $imagetelephone = $baseURL . '/risouss/assets/contact/telephone.png';
 $imageemplace = $baseURL . '/risouss/assets/contact/emplacement.png';
?>
    <header>
		<?php 
        include '../header/header.php'; 
        ?>
   
	</header>
    <main>
<div class="classgeneral"> 
    <div class="infosocie">
        <div class="infocontact">
    <img src="<?php print $imageemail?>" alt="email">
   <span>info@risouss.com </span>
</div>

<div class="infocontact">
    <img src="<?php print $imagetelephone?>" alt="telephone">
   <span> 0528244917</span>
</div>

<div class="infocontact">
    <img src="<?php print $imageemplace?>" alt="emplacement">
   <span> N°959 Rue 21 AV AHMED EL HIBA QUARTIER INDUSTRIEL AIT MELLOUL</span>
</div>

</div>
    <div class="containerdiv">
    <h2>Contact Us</h2>
    <form method="post" action="send_email.php">
      <div class="form-group1">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
      </div>
      <div class="form-group1">
        <label for="email">Email:</label>
        <input type="email" name="email" required>
      </div>
      <div class="form-group1">
        <label for="message">Message:</label>
        <textarea name="message" rows="5" required></textarea>
      </div>
      <div class="form-group1">
        <button type="submit" name="submit" class="button1">Send</button>
      </div>
    </form>
  </div>
    
</div>	</main>
	<footer>
		<?php include '../footer/footer.php'; ?>
	</footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
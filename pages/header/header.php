<?php 
 $baseURL = 'http://' . $_SERVER['HTTP_HOST'];
 $imagePath = $baseURL . '/risouss/assets/risousslogo.png';
 $imagePepper = $baseURL . '/risouss/assets/product/icons/pepper.png';
 $imageTomato = $baseURL . '/risouss/assets/product/icons/tomato.png';
 $imageZucchini = $baseURL . '/risouss/assets/product/icons/zucchini.png';
 $imageEggplant = $baseURL . '/risouss/assets/product/icons/eggplant.png';
 $imageBeans = $baseURL . '/risouss/assets/product/icons/beans.png';
 $urlBean=$baseURL . '/risouss/pages/Products/Bean/Bean.php';
 $urlPepper=$baseURL . '/risouss/pages/Products/Pepper/Pepper.php';
 $urlTomato=$baseURL . '/risouss/pages/Products/Tomato/Tomato.php';
 $urlZucchini=$baseURL . '/risouss/pages/Products/Zucchini/Zucchini.php';
 $urlEggplant=$baseURL . '/risouss/pages/Products/Eggplant/Eggplant.php';
 $urlHome=$baseURL . '/risouss/index.php';
 $urlcontact=$baseURL . '/risouss/pages/contact/contact.php';
?>
    <nav class="navbar">
  <div class="container">
    <div class="logo">
      <a href="<?php print $urlHome ?>"><img src="<?php print $imagePath?>" alt="Logo"></a>
    </div>
    <div class="menu-icon">
      <img src="../../assets/burger-menu-svgrepo-com.svg" alt="Menu">
    </div>
    <div class="nav-elements">
      <ul>
        <li>
          <a href="<?php print $urlHome?>">Home</a>
        </li>
        <li>
          <div class="dropdown">
            <button class="dropbtn"> Products <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z"></path></svg></button>
            <div class="dropdown-content"> 
            <a href="<?php print $urlPepper?>"><img src="<?php print $imagePepper?>" alt="Pepper" class="imgicon"> Pepper</a>
            <a href="<?php print $urlBean?>"><img  src="<?php print $imageBeans?>" alt="Bean" class="imgicon"> Bean</a>   
              <a href="<?php print $urlTomato?>"><img src="<?php print $imageTomato?>" alt="Tomato" class="imgicon"> Tomato</a>
              <a href="<?php print $urlZucchini?>"><img src="<?php print $imageZucchini?>" alt="Zucchini" class="imgicon"> Zucchini</a>
              <a href="<?php print $urlEggplant?>"><img src="<?php print $imageEggplant?>" alt="Eggplant"class="imgicon"> Eggplant</a>
            
            </div>
          </div>
        </li>
        <li>
          <div class="dropdown">
            <button class="dropbtn">Groups <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z"></path></svg></button>
            <div class="dropdown-content">
              <a href="#">Risouss1</a>
              <a href="#">Risouss2</a>
              <a href="#">Risouss3</a>
            </div>
          </div>
        </li>
        <li>
          <a href="<?php print $urlcontact?>">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

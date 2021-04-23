<?php
    include($_SERVER["DOCUMENT_ROOT"]."/webshop1/core/header.php");
?>
<div id=”container”>
<header>
<nav>
<ul class="topnav">
            <li><a href="<?php echo BASEURL;?>index.php">Home</a></li>
            <li><a class="active" href="<?php echo BASEURL;?>products">Products</a></li>
            <li class="right"><a href="<?php echo BASEURL;?>admin">Login</a></li>
          </ul>
</nav>
</header>
<main>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <figure>
  <img class="img" src="../assets/img/iphone12.png" style="width:70%" alt="apple">
  <figcaption><p class="text">Front and Back</p></figcaption>
  </figure>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <figure>
  <img class="img" src="../assets/img/iphone12-2.png" style="width:100%" alt="apple">
  <figcaption><p class="text">Colours</p></figcaption>
  </figure>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <figure>
  <img class="img" src="../assets/img/iphone12-3.png" style="width:90%" alt="apple">
  <figcaption><p class="text">Front Colours</p></figcaption>
  </figure>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div class="detailtext">
    <h1>iPhone 12</h1>
    <hr>
    <h3 class="titlespecs">Specifications</h3>
    <p>Resolution: 1284 x 2778<br>
    Size: 6.7 inches<br>
    OS: iOS<br>
    Chipset: Apple A14 Bionic (5nm)<br>
    CPU: Hexa-core<br>
    GPU: Apple GPU (4-core graphics)<br>
    RAM: 6GB<br>
    Storage: 128GB, 256GB or 512GB<br>
    Camera: Dual 12 MP<br>
    Battery: 3687 mAh, Fast charging 20W, 50% in 30 min (advertised)<br>
</p>
</div>

<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">

<!-- Identify your business so that you can collect the payments. -->
<input type="hidden" name="business" value="tc.herman@hotmail.com">

<!-- Specify a PayPal Shopping Cart Add to Cart button. -->
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="add" value="1">

<!-- Specify details about the item that buyers will purchase. -->
<input type="hidden" name="item_name" value="iPhone 12"> <!-- Change product name!-->
<input type="hidden" name="amount" value="900"> <!-- Price !-->
<input type="hidden" name="currency_code" value="EUR">

<!-- Display the payment button. -->
<input type="image" name="submit" width="20%" height="20%"
  src="../assets/img/cart.png"
  alt="Add to Cart">
<img alt="" width="1" height="1"
  src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
</form>

<script src="../assets/js/script.js"></script>
</main>
<footer>
<?php
    include($_SERVER["DOCUMENT_ROOT"]."/webshop1/core/footer.php");
?>
</footer>
</div>
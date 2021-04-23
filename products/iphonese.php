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
  <img class="img" src="../assets/img/iphonese.png" style="width:100%" alt="apple">
  <figcaption><p class="text">Front and Back</p></figcaption>
  </figure>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <figure>
  <img class="img" src="../assets/img/iphonese-2.png" style="width:80%" alt="apple">
  <figcaption><p class="text">Front and Back</p></figcaption>
  </figure>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <figure>
  <img class="img" src="../assets/img/iphonese-3.png" style="width:87%" alt="apple">
  <figcaption><p class="text">Colours</p></figcaption>
  </figure>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div class="detailtext">
    <h1>iPhone SE</h1>
    <hr>
    <h3 class="titlespecs">Specifications</h3>
    <p>Resolution: 1334 x 750 (120hz)<br>
    Size: 4.7 inches<br>
    OS: iOS<br>
    Chipset: A13 Bionic<br>
    CPU: Hexa-core<br>
    GPU: Apple GPU (4-core graphics)<br>
    RAM: 3GB<br>
    Storage: 64GB, 128GB or 256GB<br>
    Camera: 12 MP<br>
    Battery: 1642 mAh<br>
</p>
</div>

<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">

<!-- Identify your business so that you can collect the payments. -->
<input type="hidden" name="business" value="tc.herman@hotmail.com">

<!-- Specify a PayPal Shopping Cart Add to Cart button. -->
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="add" value="1">

<!-- Specify details about the item that buyers will purchase. -->
<input type="hidden" name="item_name" value="iPhone SE"> <!-- Change product name!-->
<input type="hidden" name="amount" value="448"> <!-- Price !-->
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
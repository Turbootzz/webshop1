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
  <img class="img" src="../assets/img/huaweip20pro.png" style="width:70%" alt="huawei">
  <figcaption><p class="text">Front and Back</p></figcaption>
  </figure>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <figure>
  <img class="img" src="../assets/img/huaweip20pro-2.png" style="width:80%" alt="huawei">
  <figcaption><p class="text">Front and Back</p></figcaption>
  </figure>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <figure>
  <img class="img" src="../assets/img/huaweip20pro-3.png" style="width:90%" alt="huawei">
  <figcaption><p class="text">Front and Back</p></figcaption>
  </figure>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div class="detailtext">
    <h1>Huawei P20 Pro</h1>
    <hr>
    <h3 class="titlespecs">Specifications</h3>
    <p>Resolution: 1080 x 2240<br>
    Size: 6.1 inches<br>
    OS: Android<br>
    Chipset: Kirin 970 (10 nm)<br>
    CPU: Octa-core<br>
    GPU: Mali-G72 MP12<br>
    RAM: 6GB, 8GB<br>
    Storage: 128GB, 256GB<br>
    Camera: 40 MP<br>
    Battery: Li-Po 4000 mAh, non-removable, Fast charging 22.5W, 58% in 30 min (advertised)<br>
</p>
</div>

<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">

<!-- Identify your business so that you can collect the payments. -->
<input type="hidden" name="business" value="tc.herman@hotmail.com">

<!-- Specify a PayPal Shopping Cart Add to Cart button. -->
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="add" value="1">

<!-- Specify details about the item that buyers will purchase. -->
<input type="hidden" name="item_name" value="Huawei P20 PRO"> <!-- Change product name!-->
<input type="hidden" name="amount" value="174"> <!-- Price !-->
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
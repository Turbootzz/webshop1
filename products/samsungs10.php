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
  <img class="img" src="../assets/img/samsungs10.png" style="width:70%">
  <figcaption><p class="text">Front and Back</p></figcaption>
  </figure>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <figure>
  <img class="img" src="../assets/img/samsungs10-2.png" style="width:100%">
  <figcaption><p class="text">Front and Back</p></figcaption>
  </figure>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <figure>
  <img class="img" src="../assets/img/samsungs10-3.png" style="width:100%">
  <figcaption><p class="text">Front and Back</p></figcaption>
  </figure>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>
<?php
$productsql = "SELECT product.price AS productPrice FROM product WHERE product.active = 1 AND product.product_id = 4";
// the last number resembles which product it takes
$productqry = $con->prepare($productsql);
if($productqry === false) {
    echo mysqli_error($con);
} else{
    $productqry->bind_result($productPrice);
    if($productqry->execute()){
        $productqry->store_result();
        while($productqry->fetch()){
            ?>
<div class="detailtext">
    <h1>Samsung S10</h1>
    <hr>
    <h3 class="titlespecs">Specifications</h3>
    <p>Resolution: 3040 x 1440<br>
    Size: 6.1 inches<br>
    OS: Android<br>
    Chipset: Samsung Exynos 9820 Octa<br>
    CPU: ARM Cortex A53 & Cortex A57 (Octa Core)<br>
    GPU: Mali-G76 MP12 - EMEA/LATAM<br>
    RAM: 12 GB<br>
    Storage: <br>
    Camera: 12 MP<br>
    Battery: 3400 mAh<br>
    Price: €<?php echo $productPrice?>
</p>
</div>

<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">

<!-- Identify your business so that you can collect the payments. -->
<input type="hidden" name="business" value="tc.herman@hotmail.com">

<!-- Specify a PayPal Shopping Cart Add to Cart button. -->
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="add" value="1">

<!-- Specify details about the item that buyers will purchase. -->
<input type="hidden" name="item_name" value="Samsung S10"> <!-- Change product name!-->
<input type="hidden" name="amount" value="<?php echo $productPrice?>"> <!-- Price !-->
<input type="hidden" name="currency_code" value="EUR">
<?php
        }
    }
    $productqry->close();
}
?>
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
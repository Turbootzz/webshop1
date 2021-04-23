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
  <img class="img" src="../assets/img/oneplus9.png" style="width:70%" alt="oneplus">
  <figcaption><p class="text">Front and Back</p></figcaption>
  </figure>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <figure>
  <img class="img" src="../assets/img/oneplus9-2.png" style="width:70%" alt="oneplus">
  <figcaption><p class="text">Front and Back</p></figcaption>
  </figure>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <figure>
  <img class="img" src="../assets/img/oneplus9-3.png" style="width:70%" alt="oneplus">
  <figcaption><p class="text">Front and Back</p></figcaption>
  </figure>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>
<?php
$productsql = "SELECT product.price AS productPrice FROM product WHERE product.active = 1 AND product.product_id = 7";
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
    <h1>OnePlus 9</h1>
    <hr>
    <h3 class="titlespecs">Specifications</h3>
    <p>Resolution: 1080 x 2400 (120hz)<br>
    Size: 6.55 inches<br>
    OS: Andoird<br>
    Chipset:Qualcomm SM8350 Snapdragon 888 5G (5 nm)<br>
    CPU: Octa-core<br>
    GPU: Adreno 660<br>
    RAM: 8GB or 12GB<br>
    Storage: 128GB or 256GB<br>
    Camera: 48 MP<br>
    Battery: 4500 mAh, non-removable, Fast charging 65W, 1-100% in 29 min (advertised), Fast wireless charging 15W (EU/NA only)<br>
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
<input type="hidden" name="item_name" value="OnePlus 9"> <!-- Change product name!-->
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
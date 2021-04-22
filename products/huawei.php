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
    <?php //foto uploaden 
    // $result = $conn->query("SELECT foto FROM fotoalbums");
    // if ($result != false) {
    //     while ($row = $result->fetch_assoc()) {
    //         ?>
             <!-- <img src="assets/upload/<?php //echo $row['foto'];?>" alt="" style="width:100px;" /> -->
             <?php
    //     }
    //     $result->free();
    //}?>



<h2>Huawei Products</h2>

<!-- Willekeurig 3 producten nodig; product naam, product prijs en categorie titel -->
<?php

$productsql = "SELECT product.name AS productName, product.price, category.name AS categoryName, product_image.image AS imageName
FROM product
 INNER JOIN category ON product.category_id = category.category_id 
 INNER JOIN product_image ON product.product_id = product_image.product_id 
 WHERE product.active = 1 AND category.active = 1 AND category.category_id = 3
ORDER BY RAND() 
LIMIT 6";
// line 37 the last thing is most important for what category
$productqry = $con->prepare($productsql);
if($productqry === false) {
    echo mysqli_error($con);
} else{
    $productqry->bind_result($productName, $productPrice, $categoryNameProduct, $imageName);
    if($productqry->execute()){
        $productqry->store_result();
        while($productqry->fetch()){
            ?>
            <div class="cards">
            <a href="<?php echo BASEURL;?>products/<?php echo substr($imageName, 0, -3);?>php"><article class="card"> <!-- I used a substr so it will remove the last 3 characters so the URL wont have spaces or will be wrong -->
                <h3><?php echo $categoryNameProduct;?></h3>
                    
                    <img class="imgitems" src="<?php echo BASEURL;?>assets/img/<?php echo $imageName?>" alt="<?php echo $productName . ' ' . $categoryNameProduct?>">
        
                    <div class="cardtext">
                    <?php echo $productName;?><br>
                    &euro; <?php echo $productPrice;?>
                </div>
            </article></a>
        </div>
            <?php
        }
    }
    $productqry->close();
}
?>
</main>
<footer>
<?php
    include($_SERVER["DOCUMENT_ROOT"]."/webshop1/core/footer.php");
?>
</footer>
</div>
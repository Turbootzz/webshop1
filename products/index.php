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
<h2>Categories</h2>
<?php
$productsql = "SELECT category.name AS categoryName, category_image.category_image AS catimageName
FROM category
 INNER JOIN category_image ON category.category_id = category_image.category_id 
 WHERE category.active = 1
ORDER BY category.category_id
LIMIT 5";

$productqry = $con->prepare($productsql);
if($productqry === false) {
    echo mysqli_error($con);
} else{
    $productqry->bind_result($categoryNameProduct, $catimageName);
    if($productqry->execute()){
        $productqry->store_result();
        while($productqry->fetch()){
            ?>
            <div class="cards">
            <a href="<?php echo BASEURL;?>products/<?php echo substr($catimageName, 0, -3);?>php"><article class="card"> <!-- I used a substr so it will remove the last 3 characters so the URL wont have spaces or will be wrong -->
                <h3><?php echo $categoryNameProduct;?></h3>
                    <img class="detailimgitems" src="<?php echo BASEURL;?>assets/img/<?php echo $catimageName?>" alt="<?php echo $categoryNameProduct?>">
        
                    <div class="detailcardtext">
                    <figcaption>Click here</figcaption>
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
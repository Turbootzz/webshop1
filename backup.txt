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
Overzicht van producten met ProductNaam, ProductPrijs, ProductAfbeelding en ProductCategorie
<h2>Categorie overzicht</h2>
<?php
$sql = "SELECT name, description FROM category WHERE active = 1";
$liqry = $con->prepare($sql);
if($liqry === false) {
    echo mysqli_error($con);
} else{
    // $liqry->bind_param('s',$email);
    $liqry->bind_result($categoryName, $categoryDescription);
    if($liqry->execute()){
        $liqry->store_result();
        while($liqry->fetch()){
            ?>
            <article>
                <h3><?php echo $categoryName;?></h3>
                <div><?php echo $categoryDescription;?></div>
            </article>
            <?php
        }
    }
    $liqry->close();
}
?>

</main>
<footer>
<?php
    include($_SERVER["DOCUMENT_ROOT"]."/webshop1/core/footer.php");
?>
</footer>
</div>
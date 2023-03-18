<!DOCTYPE html>
<head>
    <title>
    ABA sport wearing
    </title>

    <link rel="stylesheet" href="style2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<form action="login.php" method="post">
<body>
<header>
<!--NAV-->
<div class="nav container">
    <a href="#" class="logo">ABA Group Company</a>
    <a href="index.php" class="navb">Log Out</a>
    <!--Cart icon-->
    <i class='bx bx-shopping-bag' id="cart-icon"></i>
    <!--Cart-->
    <div class="cart">
        <h2 class="cart-title">Your Cart</h2>
        <!--Content-->
        <div class="cart-content">

        
        </div>
        <!--Total-->
        <div class="total">
            <div class="total-title">Total</div>
            <div class="total-price">$0</div>
        </div>
        <!--Buy button-->
        <button type="button" class="btn-buy">Buy Now</button>
        <!--Cart close-->
        <i class='bx bx-x' id="close-cart" ></i>
    </div>
</div>


</header>
<!--Shop-->
<section class="shop container">
    <h2 class="section-title">Shop products</h2>
    <!--Content-->
    <div class="shop-content">

    <?php 

session_start(); 
include "db_conn.php";

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result))  { ?>
    <div class="product-box">
            <img src="<?php echo $row["product_image"]; ?>" alt="" class="product-img">
            <h2 class="product-title"><?php echo $row["product_name"]; ?></h2>
            <span class="price">$<?php echo $row["product_price"]; ?></span>
            <i class='bx bx-shopping-bag add-cart'></i>
    <input type="hidden" class="product_id" value="<?php echo $row["product_id"]; ?>">

        </div>


        <?php
}

mysqli_close($conn);
    
    ?>



        
    </div>
</section>
<script src="main.js"></script>


</form>

</body>




</html>
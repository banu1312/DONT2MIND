<?php
     session_start();
     include "koneksi.php";
     if(isset ($_SESSION ['username']))
     {
        header("location:index_login.php");
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style_cart.css " rel="stylesheet">
</head>
<body>
<div class="site-header">
        <nav>
        <h1>DONT 2 MIND</h1>
            <ul class="container">
            
                <li>
                    <a href="index.php">HOME</a>
                </li>
                <li>
                    <a href="product.php">PRODUCTS</a>
                </li>
                <li>
                    <a href="cart.php">CART</a>
                </li>
                <li>
                    <a href="order.php">ORDERS</a>
                </li>
                <li>
                    <a href="account.php">ACCOUNT</a>
                </li>
            </ul>
        </nav>
    </div>
<div class="main-page">
    
</div>
    
</body>
</html>
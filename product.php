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
    <link href="style_product.css" rel="stylesheet">
</head>
<body>
<div class="site-header">
        <nav>
        <h1>DONT 2 MIND</h1>
            <ul class="container">
            
            <li >
                    <a href="index.php" class="active1">HOME</a>
                    
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
                <a href="#">ACCOUNT</a>
                
                </li>
            </ul>
        </nav>
    </div>
    <div class="page">
    <div class="main">
        <div class="side">
            <ul class="main-list">
                <li>
                    <h5>NEW ARRIVAL</H5>
                    <ul class="sub-list">
                    <li>
                    <a href="">New Items</a>
                    </li>
                    </ul>
                </li>
                <li>
                    <h5>DISKON & PENAWARAN</H5>
                    <ul class="sub-list">
                        <li>
                            <a href="">Teacher's Day: Up To 15% OFF</a>
                        </li>
                        <li>
                            <a href="">Shirts From Rp 120,000</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <h5>DESAIGN CH 1</H5>
                    <ul class="sub-list">
                        <li>
                            <a href="">MODERN x ANCIENT</a>
                        </li>
                        <li>
                            <a href="">SPACE ACT</a>
                        </li>
                    </ul>
                </li>
                <li>
                <h5>COMING SOON</H5>
                    <ul class="sub-list">
                        <li>
                            <a href="">NEXT CH DESAIGN</a>
                        </li>
                    </ul>
                </li>
                
            </ul>
            
        </div>
        <div class="list_product">
            <div class="cont1">
                <div class="prd1">
                    <img src="galeri/logo.png" alt="">
                    <a href=""><h4>D2M T-shirt special Chapter 1</h4></a>
                </div>
                <div class="prd2">
                    <img src="galeri/logo.png" alt="">
                    <a href=""><h4>D2M T-shirt special Chapter 1</h4></a>
                </div>
                <div class="prd3">
                    <img src="galeri/logo.png" alt="">
                    <a href=""><h4>D2M T-shirt special Chapter 1</h4></a>
                </div>
            </div>
            <div class="cont2">
                <div class="prd1">
                    <img src="galeri/logo.png" alt="">
                    <a href=""><h4>D2M T-shirt special Chapter 1</h4></a>
                </div>
                <div class="prd2">
                    <img src="galeri/logo.png" alt="">
                    <a href=""><h4>D2M T-shirt special Chapter 1</h4></a>
                </div>
                <div class="prd3">
                    <img src="galeri/logo.png" alt="">
                    <a href=""><h4>D2M T-shirt special Chapter 1</h4></a>
                </div>
               
            </div>
            <div class="cont3">
                <div class="prd1">
                    <img src="galeri/logo.png" alt="">
                    <a href=""><h4>D2M T-shirt special Chapter 1</h4></a>
                </div>
                <div class="prd2">
                    <img src="galeri/logo.png" alt="">
                    <a href=""><h4>D2M T-shirt special Chapter 1</h4></a>
                </div>
                <div class="prd3">
                    <img src="galeri/logo.png" alt="">
                    <a href=""><h4>D2M T-shirt special Chapter 1</h4></a>
                </div>
               
            </div>
        </div>
    </div>
    <div class="footer">
            <h1></h1>
            <div class="footer_content">
                <div class="helpcenter">
                    <table >
                        <tr>
                            <th >CUSTOMER SERVICE</th>
                            <th>HELP</th>
                            <th>BUSINESS</th>
                        </tr>
                        <tr>
                            <td ><a href="">Contact</a> </td>
                            <td ><a href="">Track Your Order</a></td>
                            <td ><a href="">About Us</a></td>
                        </tr>
                        <tr>
                            <td > </td>
                            <td ><a href="">Payment Information</a></td>
                            <td ><a href="">Career</a></td>
                        </tr>
                        <tr>
                            <td ></td>
                            <td ><a href="">Exchanges & Returns</a></td>
                            <td rowspan="1" >  <a href="">News</a></td>
                        </tr>
                        <tr>
                            <td ></td>
                            <td ><a href="">FAQs</a></td>
                            
                        </tr> 
                        
                        </table>
                    </div>
                <div class="sosmed">
                    <caption>See us on</caption>
                    <ul>
                        <li>
                        <img src="galeri/ig.png" alt="">
                         <a href="">@dont2mind</a>
                        </li>
                        <li>
                            <img src="galeri/shopee.png" alt="">
                            <a href="">DONT2MIND</a>
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
       <div class="copywrite">
           <div class="capt">
           <caption>||</caption>
           </div>
           <ul>
                <li>
                    DONT 2 MIND Store. All Rights Reserved. Privacy Policy
                </li>
                
            </ul>
       </div>
</div>
</body>
</html>
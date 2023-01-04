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
                    <a href="#">ACCOUNT</a>
                </li>
            </ul>
        </nav>
    </div>
<div class="page-main">
    <div class="cart-list">
        <h2>
            THIS IS YOUR CHART
        </h2>
        <hr>
        <div class="cart1">
            <div class="top">
                <Caption>DONT 2 MIND SHOP</Caption>
                <hr>
            </div>
            <div class="middle">
                <img src="galeri/logo.png" alt="">
                <ul class="first">
                    <li >
                        <caption>
                                D2M T-shirt special Chapter 1
                        </caption>
                    </li>
                </ul>
                <ul class="second">
                    <li >
                        <caption>jumlah</caption>
                        <input type="number" name="jumlah" id="jumlah">
                    </li>
                </ul>
            </div>
            <div class="bot">
            <ul class="Third">
                <ul class="third">
                <li >
                        <caption>
                                Harga Rp0.000,00
                        </caption>
                    </li>
                </ul> 
                <ul class="fourth">
                    <li >
                        <button>CHECKOUT</button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="cart1">
            <div class="top">
                <Caption>DONT 2 MIND SHOP</Caption>
                <hr>
            </div>
            <div class="middle">
                <img src="galeri/logo.png" alt="">
                <ul class="first">
                    <li >
                        <caption>
                                D2M T-shirt special Chapter 1
                        </caption>
                    </li>
                </ul>
                <ul class="second">
                    <li >
                        <caption>jumlah</caption>
                        <input type="number" name="jumlah" id="jumlah">
                    </li>
                </ul>
            </div>
            <div class="bot">
            <ul class="Third">
                <ul class="third">
                <li >
                        <caption>
                                Harga Rp0.000,00
                        </caption>
                    </li>
                </ul> 
                <ul class="fourth">
                    <li >
                        <button>CHECKOUT</button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="cart1">
            <div class="top">
                <Caption>DONT 2 MIND SHOP</Caption>
                <hr>
            </div>
            <div class="middle">
                <img src="galeri/logo.png" alt="">
                <ul class="first">
                    <li >
                        <caption>
                                D2M T-shirt special Chapter 1
                        </caption>
                    </li>
                </ul>
                <ul class="second">
                    <li >
                        <caption>jumlah</caption>
                        <input type="number" name="jumlah" id="jumlah">
                    </li>
                </ul>
            </div>
            <div class="bot">
            <ul class="Third">
                <ul class="third">
                <li >
                        <caption>
                                Harga Rp0.000,00
                        </caption>
                    </li>
                </ul> 
                <ul class="fourth">
                    <li >
                        <button>CHECKOUT</button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="cart1">
            <div class="top">
                <Caption>DONT 2 MIND SHOP</Caption>
                <hr>
            </div>
            <div class="middle">
                <img src="galeri/logo.png" alt="">
                <ul class="first">
                    <li >
                        <caption>
                                D2M T-shirt special Chapter 1
                        </caption>
                    </li>
                </ul>
                <ul class="second">
                    <li >
                        <caption>jumlah</caption>
                        <input type="number" name="jumlah" id="jumlah">
                    </li>
                </ul>
                
            </div>
            <div class="bot">
            <ul class="Third">
                <ul class="third">
                <li >
                        <caption>
                                Harga Rp0.000,00
                        </caption>
                    </li>
                </ul> 
                <ul class="fourth">
                    <li >
                        <button>CHECKOUT</button>
                    </li>
                </ul>
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
</div>

</body>
</html>
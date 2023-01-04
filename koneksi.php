<?php
$host = "localhost";
$username = "root";
$pass = "";
$database_name="database_cust";
$db_link=mysqli_connect($host,$username,$pass,$database_name);
    if (!$db_link)
    {
       echo "Tidak tersambung";
    }
?>
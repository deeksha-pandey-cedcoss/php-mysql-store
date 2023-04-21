<?php
// session_start();
if(!isset($_SESSION['cart'])){
    $_SESSION['cart']=array();
}
if(!isset($_SESSION['wishlist'])){
    $_SESSION['wishlist']=array();
}
$connection =new mysqli("mysql-server", "root", "secret", "store");


?>
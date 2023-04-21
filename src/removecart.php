<?php
// delete wishlist
include_once("config.php");
$id = $_POST['id'];
$user_id = $_COOKIE['login'];
$statement = "DELETE from `cart` where `product_id` = '$id' AND `user_id` = '$user_id'";
$connection->query($statement);
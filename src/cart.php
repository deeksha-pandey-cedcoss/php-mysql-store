<?php
include "config.php";
// session_start();

$id=$_POST['id'];
$data="SELECT * FROM `products` WHERE `id`='$id'";
$result = mysqli_query($connection,$data);
$num = mysqli_num_rows($result);
if($num>0){
  while($r=mysqli_fetch_assoc($result)){ 
    $name=$r['name'];
   $price=$r['price'];
   $image=$r['image'];
   $id=$r['id'];
}}

$key=$id;
if (array_key_exists($key, $_SESSION['cart']))
        {
          $_SESSION['cart'][$key]['quantity']+=1;
          $_SESSION['cart'][$key]['price']+=$price;
        }
      else
        {
          $_SESSION['cart'][$key]['name'] = $name;
          $_SESSION['cart'][$key]['id'] = $id;
          $_SESSION['cart'][$key]['quantity'] = 1;
          $_SESSION['cart'][$key]['price'] = $price;
          $_SESSION['cart'][$key]['image'] = $image;
        }
        print_r($_SESSION['cart']);

$user_id=$_COOKIE['login'];

if(isset($_COOKIE['login'])){

    $check = "SELECT * from `cart` where `user_id` = '$user_id' AND `product_id` = '$id'";
    $checkResult = $connection->query($check);
    if ($checkResult->num_rows == 0) {
        $stmt = "INSERT INTO `cart` VALUES (NULL, '$id','$user_id', '$name', '$image',$price)";
        $connection->query($stmt);
    }
    echo true;
} else {
    echo false;
}

















?>

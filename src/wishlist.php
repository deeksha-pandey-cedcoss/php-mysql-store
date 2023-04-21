<?php
include "config.php";

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

// $key=$id;
// if (array_key_exists($key, $_SESSION['wish']))
//         {
//           $_SESSION['wish'][$key]['quantity']+=1;
//           $_SESSION['wish'][$key]['price']+=$price;
//         }
//       else
//         {
//           $_SESSION['wish'][$key]['name'] = $name;
//           $_SESSION['wish'][$key]['id'] = $id;
//           $_SESSION['wish'][$key]['quantity'] = 1;
//           $_SESSION['wish'][$key]['price'] = $price;
//           $_SESSION['wish'][$key]['image'] = $image;
//         }
//         print_r($_SESSION['cart']);

$user_id=$_COOKIE['login'];

if(isset($_COOKIE['login'])){

    $check = "SELECT * from `wish` where `user_id` = '$user_id' AND `product_id` = '$id'";
    $checkResult = $connection->query($check);
    if ($checkResult->num_rows == 0) {
        $stmt = "INSERT INTO `wish` VALUES (NULL, '$user_id','$id', '$name', '$image',$price)";
        $connection->query($stmt);
    }
    echo true;
} else {
    echo false;
}

















?>

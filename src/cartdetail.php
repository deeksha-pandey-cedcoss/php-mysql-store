<?php
include "config.php";

if (isset($_COOKIE['login'])) {
    $user_id = $_COOKIE['login'];
    $stmt = "SELECT * FROM `cart` where `user_id` = '$user_id'";
    $result = $connection->query($stmt);
    if ($result->num_rows > 0) {
        echo "<div class='row m-4'>";
        while ($row = $result->fetch_assoc()) {

echo" <div class='card-body'>
    <div class='row'>
    <div class='col-lg-3 col-md-10 mb-4 mb-lg-0'>
    <div class='bg-image hover-overlay hover-zoom ripple rounded' data-mdb-ripple-color='light'>
    <img src='".$row['image']."'class='w-100' alt='Backpack' />
    <a href='#!'><div class='mask' style='background-color: rgba(251, 251, 251, 0.2)'></div></a>
    </div>
    </div>
    <div class='col-lg-5 col-md-6 mb-4 mb-lg-0'>
    <p><strong>".$row['name']."</strong></p>
    <p><strong>USD ".$row['price']."</strong></p>
    <button type='button' class='btn btn-primary btn-sm me-1 mb-2' id='".$row['product_id']."' onclick='removecart(this.id)' data-mdb-toggle='tooltip'
    title='Remove item'>Remove
    <i class='fas fa-trash'></i>
    </button>
    
    <button type='button' class='btn  btn-primary btn-sm mb-2' id='".$row['product_id']."' onclick='wishlist(this.id)' data-mdb-toggle='tooltip'
    title='Move to the wish list'>
    <i class='fas fa-heart fa-lg text-danger px-1'></i>
    </button>
    </div>
    </div>
    </div>";

}
        }
    }
    ?>
   
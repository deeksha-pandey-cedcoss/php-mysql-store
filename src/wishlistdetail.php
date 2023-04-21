<?php
session_start();
include "config.php";
// print_r($_SESSION['wishlist']);
if (isset($_COOKIE['login'])) {
    $user_id = $_COOKIE['login'];
    $stmt = "SELECT * FROM `wish` where `user_id` = '$user_id'";
    $result = $connection->query($stmt);
    if ($result->num_rows > 0) {
        echo "<div class='row m-4'>";
        echo "<div class='table-wishlist'>
        <table cellpadding='0' cellspacing='0' border='0' width='100%'>
            <thead>
                <tr>
                    <th width='45%'>Product Name</th>
                    <th width='15%''>Actions</th>
                   
                    <th width='10%'></th>
                </tr>
            </thead><tbody>";
        while ($row = $result->fetch_assoc()) 

{

echo "<tr>
<td width='45%'>
<div class='display-flex align-center'>
<div class='img-product'>
<img src=".$row['image']." alt='' class='mCS_img_loaded'>
</div>
<div class='name-product'>
".$row['name']."
</div>
</div>

</div>
</div>
<td width='15%'><button class='round-black-btn small-btn' id=$row[product_id] onclick='addcart(this.id)'>Add to Cart</button></td>
<td width='15%'><button class='round-black-btn small-btn' id=$row[product_id] onclick='removewish(this.id)'>Remove</button></td>
<td width='10%' class='text-center'><a href='#' class='trash-icon'><i class='far fa-trash-alt'></i></a></td>
</tr>";
    }}
}

    echo "</tbody></table>";
?>

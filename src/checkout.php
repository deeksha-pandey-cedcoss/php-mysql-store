 <?php
// checking out
include_once("config.php");
if (isset($_COOKIE['login'])) {
    $id = $_POST['id'];
    $userid = $_COOKIE['login'];
    $quantityy = $_POST['quantity'];
    $stmt = "SELECT * from `products` where `id` = '$id'";
    $products = $connection->query($stmt);
    if ($products->num_rows > 0) {
        while ($product = $products->fetch_assoc()) {
            $price = $product['price'];
            $pquantity = $product['quantity'];
        }
    }
    $total = $price * $quantityy;
    $left = $pquantity - $quantityy;
    if ($quantityy <= $pquantity && $quantityy > 0) {
$statement = "INSERT into `orders` VALUES (null, '$userid', 'Indira Nagar','placed', '$total','$id')";
$prod = $connection->query($statement);
$pro = $connection->query($stmt);
if ($pro) {
$stmt = "UPDATE `products` set `quantity` = '$left' where `id` = '$id'";

            $connection->query($stmt);

            $result = "Your order has been placed successfully for $" . $total . ".00";
            echo $result;
        }
    } else {
        $result = "OUT OF STOCK";
        echo $result;
    }
} else {
    echo false;
}
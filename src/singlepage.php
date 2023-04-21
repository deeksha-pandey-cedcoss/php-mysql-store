<?php
session_start();
include_once("config.php");
if (isset($_COOKIE['login'])) {

    $pid = $_POST['id'];

    $statement = "SELECT * from `products` where `id` = '$pid'";
    $result = $connection->query($statement);
    if ($result->num_rows > 0) {
        $_SESSION['Products'] = array();
        while ($row = $result->fetch_assoc()) {
            $_SESSION['Products']['name'] = $row['name'];
            $_SESSION['Products']['price'] = $row['price'];
            $_SESSION['Products']['image'] = $row['image'];
            $_SESSION['Products']['desc'] = $row['description'];
            $_SESSION['Products']['id'] = $pid;
            $_SESSION['Products']['quantity'] = $row['quantity'];
        }
    }
    // print_r($pid);die;
    echo true;
} else {
    echo false;
}
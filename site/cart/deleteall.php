<?php
session_start();
if(isset($_SESSION['cart'])){
unset($_SESSION['cart']);
};
header("location: ../cart/list_cart.php");
?>
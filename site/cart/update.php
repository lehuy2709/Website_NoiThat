<?php 
require '../../global.php';
$key = + $_POST["key"];
$qty = + $_POST["qty"];
$_SESSION['cart'][$key]['qty'] = $qty;
header("Location: $SITE_URL/cart/list_cart.php");

?>
<?php
session_start();
if (!isset($_SESSION['cart'])) {
	header("location:../hang-hoa/liet_ke.php"); exit();
}
$key = isset($_GET['key']) ? (int)$_GET['key']: '';
if($key){
	if(array_key_exists($key,$_SESSION['cart'])){
		unset($_SESSION['cart'][$key]);
		$_SESSION['gh'] = 'Xóa thành công !';
	}
}
header("location:../cart/list_cart.php"); exit();
?>
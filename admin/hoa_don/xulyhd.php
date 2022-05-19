<?php
require "../../global.php";
require "../../dao/don_hang.php";
require_once "./../../pdo.php";
check_login();
extract($_REQUEST);
$ma_hd = $_GET["ma_hd"];
hoa_don_update($ma_hd);
echo "<script> alert('cập nhật trạng thái thành công');  window.location.href='$ADMIN_URL/hoa_don/'; </script>";

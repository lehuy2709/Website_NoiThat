<?php
    require_once "../../global.php";
    require_once "../../pdo.php";
    require_once "../../dao/hang_hoa.php";
    if (!isset($_SESSION["user"])) {
     echo "<script> alert('Bạn phải đăng nhập để thực hiện chức năng này'); window.location.href='$SITE_URL/tai_khoan/dang_nhap.php';</script>";
    }
    else{
    $id = isset($_GET["id"]) ? (int)$_GET["id"] :"";
    $smtm = pdo_get_connection()->prepare("SELECT * FROM hang_hoa where ma_hh = $id");
    $smtm->execute();
    $product = $smtm->fetch();
        if (isset($_SESSION["cart"])) {
            if (isset($_SESSION["cart"][$id]['qty'])) {
                $_SESSION['cart'][$id]['qty'] +=1;
            }
            else{
                $_SESSION['cart'][$id]['qty'] =1;
            }
            $_SESSION["cart"] [$id]["name"] =$product['ten_hh'];
            $_SESSION["cart"] [$id]["don_gia"] =$product['don_gia'];
            $_SESSION["cart"] [$id]["anh_hh"] =$product['anh_hh'];
            echo "<script> alert('Cập nhật giỏ hàng thành công'); window.location.href='$SITE_URL/trang_chinh';</script>";
            exit();
        }
        else{
            $_SESSION["cart"] [$id]["qty"] = 1;
            $_SESSION["cart"] [$id]["name"] =$product['ten_hh'];
            $_SESSION["cart"] [$id]["don_gia"] =$product['don_gia'];
            $_SESSION["cart"] [$id]["anh_hh"] =$product['anh_hh'];
            echo "<script> alert('Tạo mới giỏ hàng thành công'); window.location.href='$SITE_URL/trang_chinh';</script>";
            exit();
        }
    }
  
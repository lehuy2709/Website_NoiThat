<?php
require '../../pdo.php';
require '../../global.php';
require '../../dao/khach_hang.php';
require '../../dao/loai_hang.php';
extract($_REQUEST);
$loai_hang = loai_hang_get_all();

if (array_key_exists("btn_login", $_REQUEST)) {
    $user = khach_hang_by_tai_khoan($ten_tk);

    if (isset($user)) {
        if (empty($ten_tk) || empty($mat_khau)) {
            $_SESSION['error'] = "Tên tài khoản và mật khẩu không được để trống";
            header("Location: $SITE_URL/tai_khoan/dang_nhap.php");
            die;
        }
        if ($user["mat_khau"] == $mat_khau && $user["ten_tk"] == $ten_tk) {
            if (array_key_exists("ghi_nho", $_REQUEST)) {
                add_cookie("ten_tk", $ten_tk, 30);
                add_cookie("mat_khau", $mat_khau, 30);
            } else {
                delete_cookie("ten_tk");
                delete_cookie("mat_khau");
            }
           
            if ($user["vai_tro"] == 1) {
                $_SESSION["user"] = $user;
                header("Location: $ADMIN_URL");
                die;
            }
            else{
                $_SESSION["user"] = $user;
                header("Location: $SITE_URL/trang_chinh/");
                die;
            }
        }
         else {
            $_SESSION['error'] = "Sai tên tài khoản hoặc mật khẩu";
            header("Location: $SITE_URL/tai_khoan/dang_nhap.php");
            die;
        }
    }
}

else{
    if (array_key_exists("logout",$_REQUEST)) {
        session_destroy();
        header("Location: $SITE_URL/tai_khoan/dang_nhap.php");
        die;
    }


}

$VIEW_NAME = "dang_nhap_form.php";
require_once "../layout.php";

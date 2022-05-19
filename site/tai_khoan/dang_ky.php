<?php
require '../../pdo.php';
require '../../global.php';
require '../../dao/khach_hang.php';
require '../../dao/loai_hang.php';
extract($_REQUEST);
$loai_hang = loai_hang_get_all();
$ds_khach_hang = khach_hang_get_all();
if (array_key_exists("btn_register",$_REQUEST)) {
    $avatar = $_FILES["avatar"];
    if (($avatar["size"]>3000000)) {
        $_SESSION['error'] = "Avartar phải nhỏ hơn 3m";
        header("Location: ?btn_add");
        die;
    }
    else{
        $avatar = save_file('avatar',$PATH_IMG . '/');
        $avatar = strlen($avatar) > 0 ? $avatar : 'user.png';
        if (empty($ten_tk) || empty($mat_khau) || empty($ho_ten) || empty($email)) {
            $error = "Các trường không được để trống";
            $_SESSION['error'] = $error;
            header("Location: $SITE_URL/tai_khoan/dang_ky.php");
            die;
        }
        if (strlen($mat_khau)<6) {
            $error = "Mật khẩu phải từ 6 kí tự trở lên";
            $_SESSION['error'] = $error;
            header("Location: $SITE_URL/tai_khoan/dang_ky.php");
            die;
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Email không hợp lệ";
            $_SESSION['error'] = $error;
            header("Location: $SITE_URL/tai_khoan/dang_ky.php");
            die;
        }
        for ($i=0; $i <count($ds_khach_hang) ; $i++) { 
            if ($ds_khach_hang[$i]["ten_tk"]==$ten_tk) {
                $error = "Tên Tài khoản này đã tồn tại";
                $_SESSION['error'] = $error;
                header("Location: $SITE_URL/tai_khoan/dang_ky.php");
                die;
            }
        }
        
        khach_hang_insert($ten_tk, $mat_khau, $ho_ten, $email, $avatar, $kich_hoat, $vai_tro);
        echo "<script> alert('Đăng ký thành công xin mời bạn đăng nhập')  </script>";
        $VIEW_NAME = "dang_nhap_form.php";
        
    }
}
else{
    $VIEW_NAME = "dang_ky_form.php";
}

require_once "../layout.php";
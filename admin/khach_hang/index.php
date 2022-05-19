<?php

require_once "./../../global.php";  
require_once "./../../pdo.php";
require_once "./../../dao/khach_hang.php";
check_login();
extract($_REQUEST);
$ds_khach_hang = khach_hang_get_all();
if (array_key_exists("btn_add",$_REQUEST)) {
    $VIEW_NAME = "add.php";
}
// nhập
else if (array_key_exists("btn_insert",$_REQUEST)) {
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
            header("Location: ?btn_add");
            die;
        }
        if (strlen($mat_khau)<6) {
            $error = "Mật khẩu phải từ 6 kí tự trở lên";
            $_SESSION['error'] = $error;
            header("Location: ?btn_add");
            die;
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Email không hợp lệ";
            $_SESSION['error'] = $error;
            header("Location: ?btn_add");
            die;
        }
        for ($i=0; $i <count($ds_khach_hang) ; $i++) { 
            if ($ds_khach_hang[$i]["ten_tk"]==$ten_tk) {
                $error = "Tên Tài khoản này đã tồn tại";
                $_SESSION['error'] = $error;
                header("Location: ?btn_add");
                die;
            }
        }
        khach_hang_insert($ten_tk, $mat_khau, $ho_ten, $email, $avatar, $kich_hoat, $vai_tro);
        $VIEW_NAME = "list.php";
        header("Location: #");
    }
}
elseif(array_key_exists("btn_delete",$_REQUEST)){
    $ma_kh = $_GET['btn_delete'];
    if (isset($ma_kh)){
        $khach_hang_id = khach_hang_select_byid($ma_kh);
        // unlink($PATH_IMG."/".$khach_hang_id["avatar"]);
        khach_hang_delete($ma_kh);
        $ds_khach_hang = khach_hang_get_all();
        $VIEW_NAME = "list.php";
        header("Location: index.php");
    }
    
}
elseif(array_key_exists('btn_delete_all',$_REQUEST)){
    khach_hang_delete($ma_kh);
    $ds_hang_hoa = khach_hang_get_all();
    $VIEW_NAME = "list.php";
    header("Location: index.php");
    
}
// Sửa
elseif(array_key_exists("btn_edit",$_REQUEST)){
    $ma_kh = $_GET["btn_edit"];
    $khach_hang_id = khach_hang_select_byid($ma_kh);
    $VIEW_NAME = "edit.php";
}
elseif(array_key_exists("btn_save",$_REQUEST)){
    $khach_hang_id = khach_hang_select_byid($ma_kh);
    $avatar = $_FILES["avatar"];
    if ($avatar["size"]>0) {
        if (strpos($avatar['type'],'image')===false) {
            $_SESSION['error'] = "Phải là định dạng ảnh";
            header("Location: ?btn_edit=$ma_kh");
            die;
        }
        else{
            $khach_hang_id["avatar"] = save_file('avatar',$PATH_IMG . '/');   
        }
    }

        if (empty($ten_tk) || empty($mat_khau) || empty($ho_ten) || empty($email)) {
            $error = "Các trường không được để trống";
            $_SESSION['error'] = $error;
            header("Location: ?btn_add");
            die;
        }
        if (strlen($mat_khau)<6) {
            $error = "Mật khẩu phải từ 6 kí tự trở lên";
            $_SESSION['error'] = $error;
            header("Location: ?btn_add");
            die;
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Email không hợp lệ";
            $_SESSION['error'] = $error;
            header("Location: ?btn_add");
            die;
        }
        khach_hang_update($ten_tk, $mat_khau, $ho_ten, $email, $khach_hang_id["avatar"], $kich_hoat, $vai_tro, $ma_kh);
        $ds_khach_hang = khach_hang_get_all();
        $VIEW_NAME = "list.php";
        header("Location: #");
    
   
}

else{
    $VIEW_NAME = "list.php";
}




require_once "../layout.php";
?>
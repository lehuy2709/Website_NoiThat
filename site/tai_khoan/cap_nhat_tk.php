<?php
require '../../pdo.php';
require '../../global.php';
require '../../dao/khach_hang.php';
require '../../dao/loai_hang.php';
// check_login();
// extract($_SESSION["user"]);
extract($_REQUEST);
$loai_hang = loai_hang_get_all();
if (array_key_exists("update", $_REQUEST)) {
    $avatar = "user.png";
    $file_upload = save_file('avatar', $PATH_IMG . '/');
    $avatar = $file_upload ? $file_upload : $avatar;
    if (empty($mat_khau) || empty($ho_ten)) {
        $error = "Không được để trống họ tên hoặc mật khẩu";
        $_SESSION["error"] = $error;
        header("Location: $SITE_URL/tai_khoan/cap_nhat_tk.php");
        die;
    }
    if (strlen($mat_khau)<6) {
        $error = "Mật khẩu phải từ 6 kí tự trở lên";
        $_SESSION['error'] = $error;
        header("Location: $SITE_URL/tai_khoan/cap_nhat_tk.php");
        die;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Email không hợp lệ";
        $_SESSION['error'] = $error;
        header("Location: $SITE_URL/tai_khoan/cap_nhat_tk.php");
        die;
    }
    khach_hang_update($ten_tk, $mat_khau, $ho_ten, $email, $avatar, $kich_hoat, $vai_tro, $ma_kh);
    $_SESSION['user'] = khach_hang_by_tai_khoan($ten_tk);
    echo "<script> alert('cập nhật thành công') </script> ";

} else {
    extract($_SESSION['user']);
}


$VIEW_NAME = "cap_nhat_form.php";
require '../layout.php';

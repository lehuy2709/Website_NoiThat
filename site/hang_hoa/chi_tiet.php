<?php
 require_once "../../global.php";
 require_once "../../pdo.php";
 require_once "../../dao/hang_hoa.php";
 require_once "../../dao/binh_luan.php";
 extract($_REQUEST);
 $hang_hoa = hang_hoa_select_byid($ma_hh);
 hang_hoa_tang_so_luot_xem($ma_hh);
 $ds_binh_luan = binh_luan_select_by_hh($ma_hh);
 if (array_key_exists("noi_dung",$_REQUEST)) {
    $ma_kh = $_SESSION['user']['ma_kh'];
    $ngay_bl = date_format(date_create(), 'Y-m-d');
    binh_luan_insert($ma_kh, $ma_hh, $noi_dung, $ngay_bl);
    header("Location: $SITE_URL/hang_hoa/chi_tiet.php?ma_hh=$ma_hh");
 }
 

 $VIEW_NAME = "chi_tiet_ui.php";
 require_once "../layout.php";

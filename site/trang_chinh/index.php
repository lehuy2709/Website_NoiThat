<?php
    require_once "./../../global.php";
    require_once "./../../pdo.php";
    extract($_REQUEST);
    if (array_key_exists("tin_tuc",$_REQUEST)) {
        $VIEW_NAME = "tintuc.php";
    }
    else{
        require_once "./../../dao/hang_hoa.php";
        $hh_top_10 = hang_hoa_select_top10();
        $item = hang_hoa_select_top8_sp();
        $VIEW_NAME = "trang_chu.php";
    }

    require_once "./../layout.php";
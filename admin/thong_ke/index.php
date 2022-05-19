<?php
    require_once "./../../global.php";
    require_once "./../../pdo.php";
    require_once "./../../dao/thong_ke.php";
    check_login();
    extract($_REQUEST);
    if (array_key_exists("btn_chart",$_REQUEST)) {
        $VIEW_NAME = "chart.php";
    }
    else{
        $VIEW_NAME = "list.php";
    }
    $items = thong_ke_hang_hoa();
    require_once "../layout.php";
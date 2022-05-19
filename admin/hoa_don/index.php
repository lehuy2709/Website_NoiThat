<?php
require "../../global.php";
require "../../dao/don_hang.php";
require_once "./../../pdo.php";
check_login();
extract($_REQUEST);
if (array_key_exists("btn_details",$_REQUEST)) {
    $ma_hd = $_GET["btn_details"];
    $ds_hoa_don = hoa_don_select_by_id($ma_hd);
    $VIEW_NAME = "details.php";
}
else if (array_key_exists("btn_delete",$_REQUEST)) {
    $ma_hd = $_GET["btn_delete"];
    hoa_don_chi_tiet_delete($ma_hd);
    hoa_don_delete($ma_hd);
    $ds_hoa_don = hoa_don_get_All();
    $VIEW_NAME = "list.php";
}
else{
    $ds_hoa_don = hoa_don_get_All();
    $VIEW_NAME = "list.php";
}

require_once "../layout.php";
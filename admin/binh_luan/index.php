<?php
require_once "./../../pdo.php";
require "../../global.php";
require "../../dao/binh_luan.php";
require "../../dao/thong_ke.php";
extract($_REQUEST);
check_login();
if (array_key_exists("btn_details",$_REQUEST)) {
    $ma_hh = $_GET["btn_details"];
    $ds_bl = binh_luan_select_by_hh($ma_hh);
    $VIEW_NAME = "details.php";
    
 }
 else if (array_key_exists("btn_delete",$_REQUEST)) {
   binh_luan_delete($ma_bl);
   $ds_binh_luan = thong_ke_binh_luan();
   $VIEW_NAME = "list.php";
}


 else{
    $ds_binh_luan = thong_ke_binh_luan();
    $VIEW_NAME = "list.php";
 }



require_once "../layout.php";
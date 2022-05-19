<?php
 require_once "../../global.php";
 require_once "../../pdo.php";
 require_once "../../dao/hang_hoa.php";
 require_once "../../dao/loai_hang.php";
 
    extract($_REQUEST);
    if (array_key_exists("ma_loai",$_REQUEST)) {
       $loai_hang_chi_tiet = loai_hang_select_byid($ma_loai);
       $items = hang_hoa_select_by_loai($ma_loai);
    }
    
    else if (array_key_exists("search",$_REQUEST)) {
        if ($keywords == "") {
           echo "<script> alert('Sản Phẩm bạn tìm không hợp lệ') </script>";
        }

            $items = hang_hoa_select_keyword($keywords);
        
    }
    else{
        $items = hang_hoa_get_all();
    }

  $VIEW_NAME = "liet_ke_ui.php";
  require_once "../layout.php";




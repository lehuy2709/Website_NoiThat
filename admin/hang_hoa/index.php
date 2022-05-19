<?php
    require_once "./../../global.php";
    require_once "./../../pdo.php";
    require_once "./../../dao/loai_hang.php";
    require_once "./../../dao/hang_hoa.php";
    check_login();
    extract($_REQUEST);
    $ds_hang_hoa = hang_hoa_get_all();
    if (array_key_exists("btn_add",$_REQUEST)) {
        $ds_loai_hang = loai_hang_get_all();
        $VIEW_NAME = "add.php";
    }
    // nhập
    else if (array_key_exists("btn_insert",$_REQUEST)) {
        $ngay_nhap = date_create($ngay_nhap);
        $ngay_nhap=date_format($ngay_nhap,"Y-m-d");
        $anh_hh = $_FILES["anh_hh"]; 
    // check lỗi
        if (strpos($anh_hh['type'],'image')===false) {
            $_SESSION['error'] = "Ảnh không được để trống và phải đúng định dạng";
            header("Location: ?btn_add");
            die;
        }
         else if ($anh_hh['size']>3000000) {
            $_SESSION['error'] = "Avartar phải nhỏ hơn 3m";
            header("Location: ?btn_add");
            die;
        }
        else{
            $anh_hh = save_file('anh_hh',$PATH_IMG . '/');
            if (empty($ten_hh)||empty($don_gia)||empty($ngay_nhap)||empty($mo_ta)||$giam_gia==""){
                $error = "Các trường không được để trống !";
                $_SESSION['error'] = $error;
                header("Location: ?btn_add");
                die;
            }
    
            if (strlen($ten_hh)>50) {
                $error = "Tên hàng hóa không được quá 50 kí tự";
                $_SESSION['error'] = $error;
                header("Location: ?btn_add");
                die;
            }
            if (strlen($don_gia)>9) {
                $error = "Độ dài của đơn giá không được quá 9 kí tự";
                $_SESSION['error'] = $error;
                header("Location: ?btn_add");
                die;
            }
            if ($don_gia<0) {
                $error = "Đơn giá không được âm";
                $_SESSION['error'] = $error;
                header("Location: ?btn_add");
                die;
            }
            if (strlen($giam_gia)>3) {
                $error = "Độ dài của giảm giá không được lớn hơn 3";
                $_SESSION['error'] = $error;
                header("Location: ?btn_add");
                die;
            }
            if ($giam_gia>100 || $giam_gia <0) {
                $error = "Giảm giá không được quá 100 và không được âm";
                $_SESSION['error'] = $error;
                header("Location: ?btn_add");
                die;
            }
            
           
            else{
                hang_hoa_insert($ten_hh,$don_gia,$anh_hh,$ngay_nhap,$mo_ta,$dac_biet,$luot_xem,$ma_loai,$giam_gia);
                $VIEW_NAME = "list.php";
                header("Location: #");
            }
        }
       
      
    }
    // Xóa
    elseif(array_key_exists("btn_delete",$_REQUEST)){
        $ma_hh = $_GET['btn_delete'];
        if (isset($ma_hh)){
            $hang_hoa_id = hang_hoa_select_byid($ma_hh);
            unlink($PATH_IMG."/".$hang_hoa_id["anh_hh"]);
            hang_hoa_delete($ma_hh);
            $ds_hang_hoa = hang_hoa_get_all();
            $VIEW_NAME = "list.php";
            header("Location: index.php");
        }
        
    }
    elseif(array_key_exists('btn_delete_all',$_REQUEST)){
            hang_hoa_delete($ma_hh);
            $ds_hang_hoa = hang_hoa_get_all();
            $VIEW_NAME = "list.php";
            header("Location: index.php");
            
    }
    // sửa
    elseif(array_key_exists("btn_edit",$_REQUEST)){
        $ma_hh = $_GET["btn_edit"];
        $hang_hoa_id = hang_hoa_select_byid($ma_hh);
        $ds_loai_hang = loai_hang_get_all();
        $VIEW_NAME = "edit.php";
    }
    elseif(array_key_exists("btn_save",$_REQUEST)){
        $hang_hoa_id = hang_hoa_select_byid($ma_hh);
        $anh_hh = $_FILES["anh_hh"];
        if ($anh_hh["size"]>0) {
            if (strpos($anh_hh['type'],'image')===false) {
                $_SESSION['error'] = "Phải là định dạng ảnh";
                header("Location: ?btn_edit=$ma_hh");
                die;
            }
            $hang_hoa_id["anh_hh"] = save_file('anh_hh',$PATH_IMG . '/');
        }
        if (empty($ten_hh)||empty($don_gia)||empty($ngay_nhap)||empty($mo_ta)||$giam_gia==""){
            $error = "Các trường không được để trống !";
            $_SESSION['error'] = $error;
            header("Location: ?btn_edit=$ma_hh");
            die;
        }

        if (strlen($ten_hh)>50) {
            $error = "Tên hàng hóa không được quá 50 kí tự";
            $_SESSION['error'] = $error;
            header("Location: ?btn_edit=$ma_hh");
            die;
        }
        if (strlen($don_gia)>9) {
            $error = "Độ dài của đơn giá không được quá 9 kí tự";
            $_SESSION['error'] = $error;
            header("Location: ?btn_edit=$ma_hh");
            die;
        }
        if ($don_gia<0) {
            $error = "Đơn giá không được âm";
            $_SESSION['error'] = $error;
            header("Location: ?btn_edit=$ma_hh");
            die;
        }
        if (strlen($giam_gia)>3) {
            $error = "Độ dài của giảm giá không được lớn hơn 3";
            $_SESSION['error'] = $error;
            header("Location: ?btn_edit=$ma_hh");
            die;
        }
        if ($giam_gia>100 || $giam_gia <0) {
            $error = "Giảm giá không được quá 100 và không được âm";
            $_SESSION['error'] = $error;
            header("Location: ?btn_edit=$ma_hh");
            die;
        }
             hang_hoa_update($ten_hh,$don_gia,$hang_hoa_id['anh_hh'],$ngay_nhap,$mo_ta,$dac_biet,$luot_xem,$ma_loai,$giam_gia,$ma_hh);
             $ds_hang_hoa = hang_hoa_get_all();
             $VIEW_NAME = "list.php";
             header("Location: #");
    }
    else{
        $VIEW_NAME = "list.php";
    }
    
    require_once "../layout.php";
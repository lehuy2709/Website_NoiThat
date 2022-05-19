<?php
    require_once "./../../global.php";
    require_once "./../../pdo.php";
    require_once "./../../dao/slide.php";
    check_login();
    $danh_sach_slide = slide_get_all();
    extract($_REQUEST);
// thêm slide
    if (array_key_exists("btn_add",$_REQUEST)) {
        $VIEW_NAME = "add.php";
    }
    else if (array_key_exists("btn_insert",$_REQUEST)) {
        if (empty($ten_slide) || strlen($ten_slide)>20) {
            $error = "Tên Slide không được để trống và không được quá 20 kí tự ";
            $_SESSION['error'] = $error;
            header("Location: ?btn_add");
        }
        else if(empty($duong_dan)){
            $error = "đường dẫn không được để trống";
            $_SESSION['error'] = $error;
            header("Location: ?btn_add");
        }
        else{
            $anh_slide = $_FILES["anh_slide"]; 
            if (strpos($anh_slide['type'],'image')===false) {
                $_SESSION['error'] = "Avartar phải là ảnh và không được để trống";
                header("Location: ?btn_add");
                die;
            }
            else if ($anh_hh['anh_slide']>3000000) {
                $_SESSION['error'] = "ảnh phải nhỏ hơn 3m";
                header("Location: ?btn_add");
                die;
            }
            else{
                $anh_slide = save_file('anh_slide',$PATH_IMG . '/');
                slide_insert($anh_slide, $duong_dan, $ten_slide);
                $VIEW_NAME = "list.php";
                header("location: #");
            }
          
        }

    }
    // xóa slide
    elseif(array_key_exists("btn_delete",$_REQUEST)){
        $ma_slide = $_GET['btn_delete'];
        if (isset($ma_slide)) {
            slide_delete($ma_slide);
            echo '<script type="text/javascript">alert("Xóa thành công")</script>';
            $danh_sach_slide = slide_get_all();
            $VIEW_NAME = "list.php";
            header("Location: index.php");
        }
        
    }
    elseif(array_key_exists('btn_delete_all',$_REQUEST)){
            slide_delete($ma_slide);
            $danh_sach_slide = slide_get_all();
            $VIEW_NAME = "list.php";
            header("Location: index.php");
            
    }
    // sửa slide
    elseif(array_key_exists("btn_edit",$_REQUEST)){
        $ma_slide = $_GET["btn_edit"];
        $danh_sach_slide = slide_get_all();
        $danh_sach_slide_id = slide_select_byid($ma_slide);
        $VIEW_NAME = "edit.php";
    }
    elseif(array_key_exists("btn_save",$_REQUEST)){
        $danh_sach_slide_id = slide_select_byid($ma_slide);
        $anh_slide = $_FILES["anh_slide"];
        if ($anh_slide["size"]>0) {
            if (strpos($anh_slide['type'],'image')===false) {
                $_SESSION['error'] = "Phải là định dạng ảnh";
                header("Location: ?btn_edit=$ma_slide");
                die;
            }
            else{
                $danh_sach_slide_id["anh_slide"] = save_file('anh_slide',$PATH_IMG . '/');

            }
        }
        if (empty($ten_slide)||empty($duong_dan)){
            $error = "Các trường không được để trống !";
            $_SESSION['error'] = $error;
            header("Location: ?btn_edit=$ma_slide");
            die;
        }
        else if(strlen($ten_slide)>20) {
            $error = "Tên slide  không được quá 20 kí tự !";
            $_SESSION['error'] = $error;
            header("Location: ?btn_edit=$ma_slide");
            die;
        }
            
        
        slide_update($danh_sach_slide_id["anh_slide"],$duong_dan, $ten_slide,$ma_slide);
        $danh_sach_slide = slide_get_all();
        $VIEW_NAME = "list.php";
        header("Location: #");
    }

    else {
        $VIEW_NAME = "list.php";
    }


























    require_once "../layout.php";
<?php
    require_once "./../../global.php";
    require_once "./../../pdo.php";
    require_once "./../../dao/settings.php";
    check_login();
    extract($_REQUEST);
    $web_settings = web_get_all();
    if (array_key_exists("btn_edit",$_REQUEST)) {
        $id = $_GET["btn_edit"];
        $web_settings_id = web_get_id($id);
        $VIEW_NAME = "edit.php";
    }
    elseif(array_key_exists("btn_save",$_REQUEST)){
        $web_settings_id = web_get_id($id);
        $logo = $_FILES["logo"];
        if ($logo["size"]>0) {
            if (strpos($logo['type'],'image')===false) {
                $_SESSION['error'] = "Phải là định dạng ảnh";
                header("Location: ?btn_edit=$id");
                die;
            }
            else{
                $web_settings_id["logo"] = save_file('logo',$PATH_IMG . '/');

            }
        }
        if (empty($sdt)||empty($dia_chi)){
            $error = "Các trường không được để trống !";
            $_SESSION['error'] = $error;
            header("Location: ?btn_edit=$id");
            die;
        }
        else if(strlen($sdt)>11) {
            $error = "sdt không được quá 11 kí tự !";
            $_SESSION['error'] = $error;
            header("Location: ?btn_edit=$id");
            die;
        }
            
        
        web_update($web_settings_id["logo"],$sdt,$dia_chi,$id);
        $web_settings = web_get_all();
        $VIEW_NAME = "list.php";
        header("Location: #");
    }
    else{
        $VIEW_NAME = "list.php";
    }
 

    require_once "../layout.php";



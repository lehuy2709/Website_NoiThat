<?php
    require_once "./../../global.php";
    require_once "./../../pdo.php";
    require_once "./../../dao/loai_hang.php";
    extract($_REQUEST);
    check_login();
    $ds_loai_hang = loai_hang_get_all();
    if (array_key_exists("btn_add",$_REQUEST)) {
        $VIEW_NAME = "add.php";
    }
    else if (array_key_exists("btn_insert",$_REQUEST)) {
            if (empty($ten_loai) || strlen($ten_loai)>20) {
                $error = "Tên loại hàng không được để trống và không được quá 20 kí tự ";
                $_SESSION['error'] = $error;
                header("Location: ?btn_add");
            }
            else{
                for ($i=0; $i <count($ds_loai_hang) ; $i++) { 
                    if ($ds_loai_hang[$i]["ten_loai"]==$ten_loai) {
                        $error = "Loại hàng này đã tồn tại ";
                        $_SESSION['error'] = $error;
                        header("Location: ?btn_add");
                        die;
                    }
                }
                 loai_hang_insert($ten_loai);
                 $VIEW_NAME = "list.php";
                 header("Location: #");
            }
			
        
    }
    elseif(array_key_exists("btn_delete",$_REQUEST)){
        $ma_loai = $_GET['btn_delete'];
        if (isset($ma_loai)) {
            loai_hang_delete($ma_loai);
            echo '<script type="text/javascript">alert("Xóa thành công")</script>';
            $ds_loai_hang = loai_hang_get_all();
            $VIEW_NAME = "list.php";
            header("Location: index.php");
        }
        
    }
    elseif(array_key_exists('btn_delete_all',$_REQUEST)){
            loai_hang_delete($ma_loai);
            $ds_loai_hang = loai_hang_get_all();
            $VIEW_NAME = "list.php";
            header("Location: index.php");
            
    }
    elseif(array_key_exists("btn_edit",$_REQUEST)){
        $ma_loai = $_GET["btn_edit"];
        $loai_hang_id = loai_hang_select_byid($ma_loai);

        $VIEW_NAME = "edit.php";
    }
    elseif(array_key_exists("btn_save",$_REQUEST)){
        if (empty($ten_loai) || strlen($ten_loai)>20) {
            $error = "Tên loại hàng không được để trống và không được quá 20 kí tự ";
            $_SESSION['error'] = $error;
            header("Location: ?btn_edit=$ma_loai");
        }
        else{
            
             loai_hang_update($ma_loai,$ten_loai);
             $ds_loai_hang = loai_hang_get_all();
             $VIEW_NAME = "list.php";
             header("Location: #");
        }
    }
    else{
      
        $VIEW_NAME = "list.php";

    }
    
    require_once "../layout.php";
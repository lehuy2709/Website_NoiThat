<?php
    
    function hoa_don_get_All(){
        $sql = "SELECT * FROM hoa_don";
        return pdo_query($sql);
    }
    function hoa_don_select_by_id($ma_hd){
        $sql = "SELECT * FROM hoa_don_chi_tiet WHERE ma_hd=?";
        return pdo_query($sql, $ma_hd);
    }
    function hoa_don_delete($ma_hd){
        $sql = "DELETE FROM hoa_don WHERE ma_hd=?";
        if(is_array($ma_hd)){
            foreach ($ma_hd as $ma) {
                pdo_execute($sql, $ma);
            }
        }
        else{
            pdo_execute($sql, $ma_hd);
        }
    }
    function hoa_don_chi_tiet_delete($ma_hd){
        $sql = "DELETE FROM hoa_don_chi_tiet WHERE ma_hd=?";
        if(is_array($ma_hd)){
            foreach ($ma_hd as $ma) {
                pdo_execute($sql, $ma);
            }
        }
        else{
            pdo_execute($sql, $ma_hd);
        }
    }
    function hoa_don_update($ma_hd){
        $sql = "UPDATE hoa_don SET trang_thai=1 WHERE ma_hd='$ma_hd'";
        pdo_execute($sql);
    }
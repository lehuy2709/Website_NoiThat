<?php
function binh_luan_insert($ma_kh, $ma_hh, $noi_dung, $ngay_bl){
    $sql = "INSERT INTO binh_luan(ma_kh, ma_hh, noi_dung, ngay_bl) VALUES (?,?,?,?)";
    pdo_execute($sql, $ma_kh, $ma_hh, $noi_dung, $ngay_bl);
}
// 
function binh_luan_update($ma_bl, $ma_kh, $ma_hh, $noi_dung, $ngay_bl){
    $sql = "UPDATE binh_luan SET ma_kh=?,ma_hh=?,noi_dung=?,ngay_bl=? WHERE ma_bl=?";
    pdo_execute($sql, $ma_kh, $ma_hh, $noi_dung, $ngay_bl, $ma_bl);
}
// 
function binh_luan_delete($ma_bl){
    $sql = "DELETE FROM binh_luan WHERE ma_bl=?";
    if(is_array($ma_bl)){
        foreach ($ma_bl as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $ma_bl);
    }
}
// 
function binh_luan_get_all(){
    $sql = "SELECT * FROM binh_luan bl ORDER BY ngay_bl DESC";
    return pdo_query($sql);
}
// 
function binh_luan_select_by_id($ma_bl){
    $sql = "SELECT * FROM binh_luan WHERE ma_bl=?";
    return pdo_query_one($sql, $ma_bl);
}
// 
// 
function binh_luan_select_by_hh($ma_hh){
    $sql = "SELECT * FROM binh_luan bl INNER JOIN khach_hang kh ON bl.ma_kh=kh.ma_kh WHERE ma_hh=?";
    return pdo_query($sql, $ma_hh);
}

?>
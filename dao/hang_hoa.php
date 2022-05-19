<?php
    function hang_hoa_insert($ten_hh,$don_gia,$anh_hh,$ngay_nhap,$mo_ta,$dac_biet,$luot_xem,$ma_loai,$giam_gia){
        $sql = "INSERT INTO hang_hoa(ten_hh,don_gia,anh_hh,ngay_nhap,mo_ta,dac_biet,luot_xem,ma_loai,giam_gia) values(?,?,?,?,?,?,?,?,?)";
        pdo_execute($sql,$ten_hh,$don_gia,$anh_hh,$ngay_nhap,$mo_ta,$dac_biet,$luot_xem,$ma_loai,$giam_gia);
    }
    function hang_hoa_get_all(){
        $sql = "SELECT * FROM hang_hoa";
        return pdo_query($sql);
    }
    function hang_hoa_delete($ma_hh){
        $sql = "DELETE FROM hang_hoa where ma_hh=?";
        if (is_array($ma_hh)) {
            foreach ($ma_hh as $ma) {
                pdo_execute($sql,$ma);
            }
        }
        else{
            pdo_execute($sql,$ma_hh);
        }

    }
    function hang_hoa_select_byid($ma_hh){
        $sql = "SELECT * FROM hang_hoa where ma_hh=?";
        return pdo_query_one($sql,$ma_hh);
    }
    function hang_hoa_update($ten_hh,$don_gia,$anh_hh,$ngay_nhap,$mo_ta,$dac_biet,$luot_xem,$ma_loai,$giam_gia,$ma_hh){
        $sql = "update hang_hoa
                set ten_hh = ?, 
                don_gia = ?, 
                anh_hh = ?, 
                ngay_nhap = ?, 
                mo_ta = ?, 
                dac_biet = ?, 
                luot_xem = ?, 
                ma_loai = ?,
                giam_gia = ?
                where ma_hh = ?";
        pdo_execute($sql, $ten_hh,$don_gia,$anh_hh,$ngay_nhap,$mo_ta,$dac_biet,$luot_xem,$ma_loai,$giam_gia,$ma_hh);
    }
    function hang_hoa_select_top8_sp(){
        $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh DESC LIMIT 0, 8 ";
        return pdo_query($sql);
    }
    
function hang_hoa_select_by_loai($ma_loai){
    $sql = "SELECT * FROM hang_hoa where ma_loai= ?";
    return pdo_query($sql,$ma_loai);
 }
 function hang_hoa_tang_so_luot_xem($ma_hh){
    $sql = "UPDATE hang_hoa SET luot_xem = luot_xem + 1 WHERE ma_hh=?";
    pdo_execute($sql, $ma_hh);
}
function hang_hoa_cung_loai($ma_loai, $ma_hh) {
    $sql = "SELECT * FROM hang_hoa WHERE ma_loai=? AND ma_hh!=? LIMIT 0,4";
    return pdo_query($sql, $ma_loai, $ma_hh);
}
function hang_hoa_select_keyword($keyword){
    $sql = "SELECT * FROM hang_hoa join loai_hang on loai_hang.ma_loai=hang_hoa.ma_loai where ten_hh like ? or ten_loai like ? ";
    return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
}
function hang_hoa_select_top10(){
    $sql = "SELECT * FROM hang_hoa WHERE luot_xem > 0 ORDER BY luot_xem DESC LIMIT 0, 10";
    return pdo_query($sql);
}

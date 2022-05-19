<?php

function khach_hang_get_all(){
    $sql = "SELECT * FROM khach_hang";
    return pdo_query($sql);
}

function khach_hang_insert($ten_tk, $mat_khau, $ho_ten, $email, $avatar, $kich_hoat, $vai_tro) {
    $sql = "INSERT INTO khach_hang(ten_tk, mat_khau, ho_ten, email, avatar, kich_hoat, vai_tro) VALUES (?,?,?,?,?,?,?)";
    return pdo_execute($sql, $ten_tk, $mat_khau, $ho_ten, $email, $avatar, $kich_hoat, $vai_tro);
}

function khach_hang_delete($ma_kh){
    $sql = "DELETE FROM khach_hang where ma_kh=?";
    if (is_array($ma_kh)) {
        foreach ($ma_kh as $ma) {
            pdo_execute($sql,$ma);
        }
    }
    else{
        pdo_execute($sql,$ma_kh);
    }
}
function khach_hang_select_byid($ma_kh){
    $sql = "SELECT * FROM khach_hang where ma_kh=?";
    return pdo_query_one($sql,$ma_kh);
}

function khach_hang_update($ten_tk, $mat_khau, $ho_ten, $email, $avatar, $kich_hoat, $vai_tro, $ma_kh){
    $sql = "UPDATE khach_hang
            SET ten_tk = ?, 
            mat_khau = ?, 
            ho_ten = ?, 
            email = ?, 
            avatar = ?, 
            kich_hoat = ?, 
            vai_tro = ?
            WHERE ma_kh = ?";
    pdo_execute($sql, $ten_tk, $mat_khau, $ho_ten, $email, $avatar, $kich_hoat, $vai_tro, $ma_kh);
}
function khach_hang_by_tai_khoan($ten_tk){
    $sql = "SELECT * FROM khach_hang WHERE ten_tk=?";
    return pdo_query_one($sql, $ten_tk);
}
?>
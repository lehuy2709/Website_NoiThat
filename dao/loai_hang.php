<?php
    function loai_hang_insert($ten_loai){
        $sql = "INSERT INTO loai_hang(ten_loai) values(?)";
        pdo_execute($sql,$ten_loai);

    }
    function loai_hang_get_all(){
        $sql = "SELECT * FROM loai_hang";
        return pdo_query($sql);
    }
    function loai_hang_delete($ma_loai){
        $sql = "DELETE FROM loai_hang where ma_loai=?";
        if (is_array($ma_loai)) {
            foreach ($ma_loai as $ma) {
                pdo_execute($sql,$ma);
            }
        }
        else{
            pdo_execute($sql,$ma_loai);
        }

    }
    function loai_hang_select_byid($ma_loai){
        $sql = "SELECT * FROM loai_hang where ma_loai=?";
        return pdo_query_one($sql,$ma_loai);
    }
    function loai_hang_update($ma_loai,$ten_loai){
        $sql = "UPDATE loai_hang SET ten_loai=? where ma_loai=?";
        pdo_execute($sql,$ten_loai,$ma_loai);
    }
    

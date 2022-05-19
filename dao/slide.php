<?php
    function slide_insert($anh_slide, $duong_dan, $ten_slide){
        $sql = "INSERT INTO sliders(anh_slide,duong_dan,ten_slide) values(?,?,?)";
        pdo_execute($sql,$anh_slide, $duong_dan, $ten_slide);
    }
    function slide_get_all(){
        $sql = "SELECT * FROM sliders";
        return pdo_query($sql);
    }
    function slide_delete($ma_slide){
        $sql = "DELETE FROM sliders where ma_slide=?";
        if (is_array($ma_slide)) {
            foreach ($ma_slide as $ma_sl) {
                pdo_execute($sql,$ma_sl);
            }
        }
        else{
            pdo_execute($sql,$ma_slide);
        }

    }
    function slide_select_byid($ma_slide){
        $sql = "SELECT * FROM sliders where ma_slide=?";
        return pdo_query_one($sql,$ma_slide);
    }
    function slide_update($anh_slide, $duong_dan, $ten_slide,$ma_slide){
        $sql = "update sliders
                set anh_slide = ?,
                    duong_dan = ?,
                    ten_slide = ?
                where ma_slide = ?";
        pdo_execute($sql, $anh_slide, $duong_dan, $ten_slide,$ma_slide);
    }

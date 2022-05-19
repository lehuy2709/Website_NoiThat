<?php
    function web_get_all(){
        $sql = "SELECT * FROM web_settings";
        return pdo_query($sql);
    }
    function web_get_id($id){
        $sql = "SELECT * FROM web_settings where id=?";
        return pdo_query_one($sql,$id);
    }
    function web_update($logo,$sdt,$dia_chi,$id){
        $sql = "update web_settings
                set logo = ?,
                    sdt = ?,
                    dia_chi = ?
                where id = ?";
        pdo_execute($sql,$logo,$sdt,$dia_chi,$id);
    }
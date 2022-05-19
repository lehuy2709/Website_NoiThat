<?php
    function pdo_get_connection(){
        $dbUrl = "mysql:host=localhost;dbname=duan1";
        $dbUser = "root";
        $dbPass = "";
        $conn = new PDO($dbUrl,$dbUser,$dbPass);
        return $conn;
    }

    function pdo_execute($sql){
        $args = array_slice(func_get_args(),1);
        try {
            $conn = pdo_get_connection();
            $sttm = $conn->prepare($sql);
            $sttm->execute($args);
        } catch (PDOException $e) {
            echo "có lỗi xảy ra" . $e->getMessage();
        }
        finally{
            unset($conn);
        }
    }

    function pdo_query($sql){
        $args = array_slice(func_get_args(),1);
        try {
            $conn = pdo_get_connection();
            $sttm = $conn->prepare($sql);
            $sttm->execute($args);
            $result = $sttm->fetchAll();
            return $result;
        } catch (PDOException $e) {
            echo "có lỗi xảy ra" . $e->getMessage();
        }
        finally{
            unset($conn);
        }
    }
    function pdo_query_one($sql){
        $args = array_slice(func_get_args(),1);
        try {
            $conn = pdo_get_connection();
            $sttm = $conn->prepare($sql);
            $sttm->execute($args);
            $result = $sttm->fetch();
            return $result;
        } catch (PDOException $e) {
            echo "có lỗi xảy ra" . $e->getMessage();
        }
        finally{
            unset($conn);
        }
    }

    
    function pdo_query_value($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try{
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return array_values($result)[0];
        }
        catch(PDOException $e){
            echo "có lỗi xảy ra" . $e->getMessage();
        }
        finally{
            unset($conn);
        }
    }
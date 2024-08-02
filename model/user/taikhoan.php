<?php


    function getAllUser() {
        $sql =  "select * from tai_khoan";
        return pdo_query($sql);
    }

    function getInforUserByNickName($tenUser) {
        $sql = "select * from tai_khoan where tenUser = '$tenUser'";
        return pdo_query_one($sql);
    }
    function getIdUserByNickName($tenUser) {
        $sql = "select idUser from tai_khoan where tenUser = '$tenUser'";
        return pdo_query_one($sql)['idUser'];
    }
    function dangkyTk($user, $pass) {
        $sql = "INSERT INTO `tai_khoan`(`tenUser`, `Password`) VALUES ('$user','$pass')";
        pdo_execute($sql);
    }
    function checkLogin($user, $pass) {
        $sql = "SELECT * FROM `tai_khoan` WHERE tenUser = '$user' and Password = '$pass'";
        $result = pdo_query($sql);
        if($result) {

            return true;
        }else {
            return false;
        }
    };
    function checkAdmin($user) {
        $sql = "SELECT vaiTro FROM `tai_khoan` WHERE tenUser = '$user'";
        $result = pdo_query_one($sql);
        if($result['vaiTro'] == 'admin') {
            return true;

        }
        return false;
    }
    function updateThongTinTK($hoTenUser, $sdt, $diachi, $idUser) {
        $sql = "UPDATE `tai_khoan` 
        SET `hoTenUser`='$hoTenUser',`sdt`='$sdt',`diaChi`='$diachi' WHERE idUser = $idUser";
        pdo_execute($sql);
    }
?>
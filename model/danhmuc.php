<?php 
    function loadall_danhmuc(){
        $sql = "SELECT * FROM danh_muc ORDER BY idDm desc";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }

    function load_ten_dm($id){
        $sql = "SELECT * FROM danh_muc WHERE idDm =".$id;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $tendm;
    }
    function update_danhmuc($id,$tendm){
        $sql = "UPDATE danh_muc SET tenDm = '$tendm' WHERE idDm=".$id;
        pdo_execute($sql);
    }

    function add_danhmuc($tendm){
        $sql = "INSERT INTO danh_muc( tenDm) VALUES ('$tendm')";
        pdo_execute($sql);
    }

    function delete_danhmuc($id){
        $sql = "DELETE FROM danh_muc WHERE idDm =" .$id;
        pdo_execute($sql);
    }
?>
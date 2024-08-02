<?php 
    // hiện thị 9 sản phẩm mới nhất
    function loadall_sanpham_home(){
        $sql = "SELECT * FROM san_pham WHERE 1 ORDER BY idSp desc ";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    // hiện thị top10 san phâm có lượt xem cao nhât

    function loadone_sanpham($id){
        $sql = "SELECT * FROM san_pham WHERE idSp = $id";
        $result = pdo_query_one($sql);
        return $result;
    }
    function loadone_sanphamDm($id){
        $sql = "SELECT * FROM san_pham inner join danh_muc on san_pham.idDm = danh_muc.idDm WHERE idSp = $id";
        $result = pdo_query_one($sql);
        return $result;
    }

    function loadsp_cung_loai($id, $iddm){
        $sql = "SELECT * FROM san_pham WHERE idDm = $iddm and idSp <> $id";
        $result = pdo_query($sql);
        return $result;
    }

    function loadall_sanpham($iddm){
        $sql = "SELECT * FROM san_pham WHERE trangThai= 1";

        if($iddm != 0){
            $sql .= ' and idDm = '.$iddm.'';
        }
        $sql .= " ORDER BY idSp desc";
        $listsanpham=pdo_query($sql);   
        return  $listsanpham;
    }

    function insert_sanpham($name,$giacu,$giamoi,$hinh,$mota,$iddm){
        $sql = "INSERT INTO san_pham(tenSp,gia,giaKm,anh,moTa,idDm) VALUES ('$name','$giacu','$giamoi','$hinh','$mota','$iddm')";
        pdo_execute($sql);
    }

    function update_sanpham($id,$iddm,$name,$giacu,$giamoi,$mota,$hinh){
        if($hinh != ""){
            
            $sql = "UPDATE san_pham SET tenSp='$name',gia='$giacu',giaKm='$giamoi',anh='$hinh',moTa='$mota',idDm='$iddm' WHERE idSp=".$id;
        }else{
            $sql = "UPDATE san_pham SET tenSp='$name',gia='$giacu',giaKm='$giamoi',moTa='$mota',idDm='$iddm' WHERE idSp=".$id;

        }
        pdo_execute($sql);
    }

    function deleteDonHang($idSp) {
        $sql = "DELETE FROM don_hang WHERE idSp=".$idSp;
        pdo_execute($sql);
    }

    // câu truy vấn xóa cứng 
    function hard_delete($id){
        $sql = "DELETE FROM san_pham WHERE idSp=".$id;
        pdo_execute($sql);
    }

    // câu truy vấn xóa mềm 
    function soft_delete($id){
        $sql = "UPDATE san_pham SET trangThai = 0 WHERE idSp=".$id;
        pdo_execute($sql);
    }

?>
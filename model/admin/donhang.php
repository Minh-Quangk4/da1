<?php
function getDonhangAll()
{
    $sql = "SELECT 
        GROUP_CONCAT(chitietdonhang.idChiTietDonHang) AS chitietdonhang_ids,
        GROUP_CONCAT(chitietdonhang.soLuong) AS soLuongs,
        GROUP_CONCAT(chitietdonhang.idSp) AS idSps,
        GROUP_CONCAT(san_pham.idSp) AS sanpham_ids,
        GROUP_CONCAT(san_pham.tenSp) AS tenSps,
        GROUP_CONCAT(san_pham.gia) AS gias,
        GROUP_CONCAT(san_pham.anh) AS anhs,
        GROUP_CONCAT(san_pham.moTa) AS moTas,
        GROUP_CONCAT(san_pham.luotXem) AS luotXems,
        GROUP_CONCAT(san_pham.giaKm) AS giaKms,
        GROUP_CONCAT(san_pham.idDm) AS idDms,
        tai_khoan.idUser,
        tai_khoan.vaiTro,
        tai_khoan.tenUser,
        tai_khoan.Password,
        tai_khoan.hoTenUser,
        tai_khoan.sdt,
        tai_khoan.diaChi,
        don_hang.idDonHang,
        don_hang.ngayDat,
        don_hang.trangthai,
        tai_khoan.role
    FROM `don_hang` 
    INNER JOIN chitietdonhang ON chitietdonhang.idDonHang = don_hang.idDonHang 
    INNER JOIN tai_khoan ON tai_khoan.idUser = don_hang.idUser
    INNER JOIN san_pham ON san_pham.idSp = chitietdonhang.idSp 
    GROUP BY don_hang.idDonHang";
    return pdo_query($sql);
}

function getDonhangCt($idDonHang)
{
    $sql = "SELECT * 
    FROM `don_hang` 
    INNER JOIN chitietdonhang ON chitietdonhang.idDonHang = don_hang.idDonHang 
    INNER JOIN tai_khoan ON tai_khoan.idUser = don_hang.idUser
    INNER JOIN san_pham ON san_pham.idSp = chitietdonhang.idSp
    WHERE don_hang.idDonHang = $idDonHang";
    
    return pdo_query($sql);
}

function getTimeDatHang($idDonHang) {
    $sql = "SELECT ngayDat from don_hang WHERE idDonHang = $idDonHang";
    return pdo_query_one($sql)['ngayDat'];
}
function updateStatusDh($idDonHang, $trangthai, $ngayDat) {
    $sql = "UPDATE `don_hang` SET `trangthai`='$trangthai', `ngayDat`='$ngayDat' WHERE idDonHang = $idDonHang";
    pdo_execute($sql);
}
?>
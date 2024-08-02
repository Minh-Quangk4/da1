<?php

function getIdDonHangNew()
{
    $sql = "SELECT idDonHang FROM `don_hang` ORDER BY idDonHang DESC";
    $result = pdo_query_one($sql);
    if ($result) {
        return $result['idDonHang'] + 1;
    } else {
        return 1;
    }
}
function TaoDonHang($idDonHang, $idUser)
{
    $sql = "INSERT INTO `don_hang`(`idDonHang`, `idUser`) 
        VALUES ('$idDonHang','$idUser')";
    pdo_execute($sql);
}
function taoCtDonHang($idDonHang, $soluong, $idSp)
{
    $sql = "INSERT INTO `chitietdonhang`(`soLuong`, `idSp`, `idDonHang`) VALUES ('$soluong','$idSp','$idDonHang')";
    pdo_execute($sql);
}
function getVlDonHangCode($code)
{
    $sql = "SELECT * FROM `don_hang` WHERE maDonHang = '$code'";
    return pdo_query_one($sql);
}

function getDonhangIdUser($idUser)
{
    $sql = "SELECT 
    GROUP_CONCAT(chitietdonhang.idChiTietDonHang) AS chitietdonhang_ids,
    GROUP_CONCAT(don_hang.idDonHang) AS idDonHangs,
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
    don_hang.ngayDat,
    don_hang.trangthai,
    tai_khoan.role
FROM `don_hang` 
INNER JOIN chitietdonhang ON chitietdonhang.idDonHang = don_hang.idDonHang 
INNER JOIN tai_khoan ON tai_khoan.idUser = don_hang.idUser
INNER JOIN san_pham ON san_pham.idSp = chitietdonhang.idSp 
WHERE tai_khoan.idUser = $idUser
GROUP BY don_hang.idDonHang";
    return pdo_query($sql);
}
?>
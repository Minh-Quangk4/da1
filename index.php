<?php
include "model/pdo.php";
include "model/sanpham.php";
include 'model/danhmuc.php';
include "global.php";
include "model/user/taikhoan.php";
include "strSS.php";
include "model/user/donhang.php";
include "model/function.php";

ob_start(); 
?>

<style>
    * {
        margin: 0 auto;
    }

    body {
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        background-color: #f0f0f0;
        color: #333;
    }

    .boxcenter {
        max-width: 1200px;
        margin: 0 auto;
    }

    header {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 20px 0;
    }

    .menu {
        background-color: #444;
        padding: 10px;
    }

    .menu ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
        display: flex;
        justify-content: space-around;
    }

    .menu ul li {
        display: inline;
    }

    .menu a {
        text-decoration: none;
        color: #fff;
        padding: 10px;
        display: inline-block;
        transition: color 0.3s ease;
    }

    .menu a:hover {
        color: #e44d26;
    }

    .main {
        display: flex;
        justify-content: space-between;
    }

    .boxleft {
        width: 70%;
    }

    .boxright {
        width: 30%;
    }

    .boxright .form_account {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .boxright .product_portfolio ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .boxright .product_portfolio ul li {
        margin-bottom: 10px;
    }

    .boxright .box_search {
        margin-top: 20px;
    }

    .catalog {
        display: flex;
        justify-content: space-between;
    }

    .items {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .box_items {
        width: 30%;
        margin-bottom: 20px;
        background-color: #fff;
        border-radius: 5px;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .box_items:hover {
        transform: translateY(-5px);
    }

    .box_items_img {
        position: relative;
        overflow: hidden;
    }

    .box_items_img img {
        width: 100%;
        height: auto;
        border-radius: 5px 5px 0 0;
        transition: transform 0.3s ease;
    }

    .box_items:hover .box_items_img img {
        transform: scale(1.1);
    }

    .add {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #e44d26;
        color: #fff;
        padding: 10px;
        border-radius: 5px;
        text-align: center;
        cursor: pointer;
    }

    .item_name {
        text-decoration: none;
        color: #333;
        display: block;
        padding: 10px;
        font-weight: bold;
        transition: color 0.3s ease;
    }

    .item_name:hover {
        color: #e44d26;
    }

    .price {
        color: #e44d26;
        padding: 10px;
    }

    .mb {
        margin-bottom: 20px;
    }

    .footer {
        background-color: #333;
        color: #fff;
        padding: 20px 0;
        text-align: center;
    }

    .footer-left,
    .footer-right {
        width: 50%;
        display: inline-block;
        vertical-align: top;
    }

    .card_1,
    .card_2,
    .card_3 {
        background-color: #444;
        color: #fff;
        padding: 20px;
        margin-top: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .card_1 img,
    .image img {
        width: 100%;
        height: auto;
        margin-top: 10px;
        border-radius: 5px;
    }

    .card_1 p,
    .card_1 div,
    .card_1 h3 {
        margin-bottom: 10px;
    }

    .icons i {
        margin-right: 10px;
        font-size: 20px;
    }

    .images {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .image_3 {
        width: 100%;
    }

    .image_3 img {
        border-radius: 5px;
        margin-top: 10px;
    }

    .footer-right a {
        color: #fff;
        text-decoration: none;
        display: block;
        margin-bottom: 10px;
        transition: color 0.3s ease;
    }

    .footer-right a:hover {
        color: #e44d26;
    }
</style>
<?php


$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();



include "view/header.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "lienhe":
            include "view/lienhe.php";
            break;
        case "gioithieu":
            include "view/gioithieu.php";
            break;
        case "hoidap":
            include "view/hoidap.php";
            break;
        case "sanpham":
            if (isset($_POST['keyword']) && $_POST['keyword'] != 0) {
                $kyw = $_POST['keyword'];
            } else {
                $kyw = '';
            }
            if (isset($_GET['iddm']) && $_GET['iddm'] > 0) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }

            $dssp = loadall_sanpham($iddm);
            include "view/sanpham.php";
            break;
        case "sanphamct":
            if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                $sp = loadone_sanpham($_GET['idsp']);
                $sp_cung_loai = loadsp_cung_loai($_GET['idsp'], $sp['idDm']);
                $binh_luan = loadone_sanpham($_GET['idsp']);
                include "view/chitietsanpham.php";
            }
            break;
        case "dangnhap":
            include "view/login.php";
            break;

        case "dangky":

            if (isset($_POST['btnDangKy'])) {
                dangkyTk($_POST['user'], $_POST['pass']);
            }
            include "view/register.php";
            break;

        case "gio_hang":


            if (isset($_POST['btnTaoDonHang'])) {

                if(isset($_COOKIE['user'])) {
                    $idUser = getIdUserByNickName($_COOKIE['user']);
                    $idDonHang = getIdDonHangNew();

                    $ten = $_POST["tenUser"];
                    $sdt = $_POST["sdt"];
                    $diachi = $_POST["dc"];
                    
                    // update tai_khoan
                    updateThongTinTK($ten, $sdt, $diachi, $idUser);
                    TaoDonHang($idDonHang, $idUser);
                    for ($i = 0; $i < $_POST['soluongSpGio']; $i++) {

                        $idSp = $_POST["idsp$i"];

                        $sl = $_POST["soluong$i"];
                    
                        taoCtDonHang($idDonHang, $sl, $idSp);

                    }
                    ob_clean(); 
                    header('location: ?act=check_bill');
                } else {
                    echo 'Vui lòng đăng nhập trước khi đặt hàng';
                }

            }else {
                $inforUser = 0;

                if(isset($_COOKIE['user'])) {
                    $inforUser = getInforUserByNickName($_COOKIE['user']);
                }
                include "view/cart.php";
            }
            break;
        case "check_bill":
            if(isset($_COOKIE['user'])) {
                $idUser = getIdUserByNickName($_COOKIE['user']);
                $bill = getDonhangIdUser($idUser);
                include 'view/checkout.php';
            }
            break;
    }
} else {
    include "view/home.php";
}
include "view/tintuc.php";
include "view/footer.php";
?>
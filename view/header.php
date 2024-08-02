<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }

    body {
        background-color: #f0f0f0;
        font-size: 17px;
    }

    header {
        height: 100px;
        display: flex;
        background-color: #fff !important;
        align-items: center;
        position: relative;
    }

    .nav-main ul li a {
        text-decoration: none;
    }

    .logo {
        width: 200px;
        font-size: 50px;
        margin-right: 10px;
    }

    .search {
        display: flex;
        align-items: center;
        justify-content: space-between;
        border: 1px solid rgb(158, 155, 155);
        height: 50px;
        width: 400px;
        border-radius: 8px;
        margin: 50px;
    }

    .search button {
        background: none;
        border: none;
    }

    .search input {
        margin-left: 4px;
        border: none;
        height: 100%;
        width: 100%;
    }

    .search i {
        font-size: 20px;
        margin: 10px;
    }

    .search input:focus {
        outline: none;
    }

    .nav-header ul {
        display: flex;
        font-size: 17px;
    }

    .nav-header li {
        display: flex;
        align-items: center;
        margin: 20px;
        width: 120px;
    }

    .nav-header i {
        margin: 5px;
        font-size: 25px;
    }

    .form-login i {
        font-size: 25px;
        color: #fff;
        margin: 10px;
    }

    .form-login {
        display: flex;
        align-items: center;
        position: absolute;
        justify-content: center;
        right: 20px;
        width: 150px;
        background-color: #821818;
        height: 70%;
        border-radius: 10px;
    }

    .form-login a {
        color: #fff;
        width: 50px;
    }

    .nav-main {
        height: 50px;
        color: #fff;
        background: #353333;
    }

    .nav-main i {
        margin: 4px;
    }

    .nav-main ul {
        margin-left: 165px;
        display: flex;
        list-style: none;
    }

    .nav-main li {
        display: flex;
        align-items: center;
        margin-right: 88px;
    }

    .nav-main a {
        line-height: 50px;
        color: #fff;
    }

    .father-li-sp {
        position: relative;
    }

    .ch-li-sp {
        display: none !important;
        left: 0;
        top: 50px;
        position: absolute;
        background-color: #ffff;
        flex-direction: column;
        width: 300px;
        padding: 10px;
    }

    .ch-li-sp a {
        color: black;
    }

    .father-li-sp:hover .ch-li-sp {
        display: flex !important;
    }

    .ch-li-sp li:hover {
        background-color: #b5b3b3;
        width: 100%;
    }

    .bigbox {
        width: 1400px;
        height: 400px;
        margin-top: 30px;
        margin-left: 55px;
        border: none;
    }

    .smallbox {
        display: grid;
        grid-template-columns: 1fr 1fr;
    }

    .boxsmallest {

        width: 900px;
        height: 400px;
    }

    .boxsmallest1 {
        border: 1px solid black;
        width: 500px;
        height: 400px;
        border: none;
    }

    .banner1 {
        width: 900px;
        height: 400px;
    }

    .banner1>img {
        width: 100%;
        height: 100%;
    }

    .boxcon1 {
        border: 1px solid gray;
        width: 206px;
        height: 190px;

        overflow: hidden;
        margin-left: 30px;
    }

    .bannercon {
        width: 100%;
        height: 100%;
    }

    .bannercon>img {
        width: 100%;
        height: 100%;
    }

    .bigbox2 {
        width: 1420px;
        height: 60px;
        margin-top: 30px;
        margin-left: 55px;
    }

    .bigbox2>img {
        width: 100%;
    }

    .bigbox3 {
        width: 1420px;

        margin-top: 50px;
        margin-left: 55px;
        background-color: #f0f0f0;
    }

    .goku {
        border: 1px solid black;
        width: 1320px;
        margin-top: 50px;
        margin-left: 48px;
        border: none;
    }

    .gohan {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        gap: 1px;
    }

    .goten {

        width: 250px;
        height: 450px;
        margin-left: 40px;
        background-color: #fff;
        margin-bottom: 60px;
    }

    .anhsp {
        border: 1px solid black;
        width: 240px;
        height: 250px;
        border: none;
    }

    .anhsp>img {
        width: 100%;
        height: 100%;
    }

    .tensp {
        border: 1px solid black;
        width: 250px;
        height: 40px;
        margin-top: 10px;
        text-align: center;
        border: none;
    }

    .tensp>a {
        line-height: 40px;
        font-weight: 600;
    }

    .giasp {
        border: 1px solid black;
        width: 250px;
        height: 60px;
        margin-top: 5px;
        text-align: center;
        border: none;
        margin-left: 30px;
    }

    .flex>p {
        font-weight: 700;
    }

    s {
        color: gray;
    }

    .gray {
        margin-left: 20px;
    }

    .red {
        color: brown;
        margin-left: 20px;
    }

    .flex {
        display: flex;
    }

    .flex1 {
        margin-bottom: 30px;
        display: flex;
    }

    .buttonxemct {
        margin-top: 40px;
        margin-left: 45px;
    }

    .bt {
        width: 150px;
        height: 30px;
        background-color: red;
        border: none;
        font-weight: 700;
    }

    .bt>a {
        color: #fff;
    }

    .bt:hover {
        background-color: gray;
    }

    .bigbox4 {
        width: 1420px;

        margin-left: 55px;
        margin-top: 50px;
    }

    .bigbox {
        margin-left: 55px;
        margin-top: 50px;
    }

    .boxtt {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        margin: 50px;
    }

    .boxtt1 {
        border: 1px solid #ccc;
        width: 300px;
        height: 300px;
        margin-left: 15px;
    }

    .chinhanh1 {
        width: 300px;
        height: 169px;
        border: none;
    }

    .chinhanh1>img {
        width: 100%;
        height: 100%;
    }

    .nd {
        border: none;
        width: 280px;
        height: 90px;
        margin-top: 20px;
        margin-left: 15px;
    }

    .nd>a {
        color: gray;
        font-weight: 500;
    }

    .tieu1 {
        display: flex;
        margin-left: 63px;
        margin-top: 30px;
        justify-content: space-between;
    }

    .left {
        margin-right: 60px;
        font-size: 18px;
    }
    </style>

    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css" type="text/css" />
    <!-- Font awesome -->
    <link rel="stylesheet" href="./vendor/font-awesome/css/font-awesome.min.css" type="text/css" />

    <!-- Custom css - Các file css do chúng ta tự viết -->
    <link rel="stylesheet" href="./assets/css/app.css" type="text/css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
    <header>
        <div class="logo">logo</div>
        <a href="./index.php"><img src="./img/logo.jpg" alt="" width="200px" ;="" height="64px" style="
    position: relative;
    right: 78px;
"></a>
        <form action="" method="" class="search">
            <input type="text" placeholder="Bạn cần tìm gì?" />
            <button><i class="bx bx-search"></i></button>
        </form>
        <nav class="nav-header">
            <ul>
                <li class="nav-hotline">
                    <i class="bx bx-phone-call"></i>
                    <a href="#" style="text-decoration: none">Hotline: 0354179060000000</a>
                </li>
                <li class="info-cart">
                    <i class="bx bx-notepad"></i>
                    <a href="?act=check_bill" style="text-decoration: none">Tra cứu đơn hàng</a>
                </li>
                <li class="cart">
                    <i style="color: black" class="bx bxs-cart"></i>
                    <a href="?act=gio_hang ">Giỏ hàng</a>
                </li>
            </ul>
        </nav>
    </header>
    <nav class="nav-main">
        <ul>
            <li>
                <i class="bx bxs-user"></i>
                <a href="index.php">Trang chủ</a>
            </li>
            <li class="father-li-sp">
                <i class="bx bxs-box"></i>
                <a href="?act=danhmuc">danh mục</a>
                <i class="bx bxs-down-arrow"></i>
            </li>
            <li><i class="bx bx-news"> </i><a href="?act=sanpham">sản phẩm</a></li>
            <li>
                <i class="bx bxs-user-rectangle"> </i><a href="?act=gioithieu">Giới thiệu</a>
            </li>
            <li>
                <i class="bx bxs-phone-call"></i><a href="?act=lienhe">Liên hệ</a>
            </li>
            <li><i class="bx bxs-videos"></i><a href="?act=hoidap ">hỏi đáp</a></li>

            <?php 
                if(isset($_COOKIE['user'])) {?>
            <a href="">xin chào:
                <?=$_COOKIE['user']?></a>
            <?php
                    if(checkAdmin($_COOKIE['user'])) {?>
            <a style="margin-left: 30px" href="admin">Trang admin</a>

            <?php
                    } ?>
            <a style="margin-left: 30px" href="model/user/dangxuat.php">Đăng xuất</a>
            <?php
                    
                }else {?>
            <li><i class="bx bxs-login"></i><a href="?act=dangky">Đăng ký</a></li>
            <li>
                <i class="bx bxs-signup"></i><a href="?act=dangnhap">đăng nhập</a>
            </li>
            <?php
                }
            ?>
        </ul>
    </nav>
</body>

</html>

<style>
    body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
}

.boxcenter {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

/* Header Styles */
header {
    border-radius: 10px;
    position: relative;
    background-color: black;
    color: #fff;
    text-align: center;
    padding: 15px 0;
   
}

.header_admin h1 {
    margin: 0;
}

/* Navigation Styles */
.menu ul {
    list-style: none;
    padding: 0;
    margin: 0;
    background-color: #444;
}

.menu li {
    display: inline;
}

.menu a {
    text-decoration: none;
    color: #fff;
    padding: 10px 15px;
    display: inline-block;
}

.menu a:hover {
    background-color: #555;
}

/* Responsive adjustments (optional) */
@media (max-width: 768px) {
    .menu ul {
        text-align: center;
    }

    .menu li {
        display: block;
    }

    .menu a {
        display: block;
        width: 100%;
        box-sizing: border-box;
    }
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án 1</title>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <style>
     
    </style>
</head>
<body>
    <div class="boxcenter">
       <!-- BIGIN HEADER -->
       <header>
        <div class="row mb header_admin">
            <h1>Admin</h1>
        </div>
        <div class="row mb menu">
            <ul>
              <li><a href="../index.php">Trở về trang mua hàng</a></li>
              <li><a href="index.php">Trang chủ</a></li>
              <li><a href="?act=listdm">Danh mục</a></li>
              <li><a href="?act=listsp">Hàng hóa</a></li>
              <li><a href="../admin/user/list.php">Khách hàng</a></li>
              <li><a href="?act=listbl">Bình luận</a></li>
              <li><a href="?act=list_don_hang">Đơn hàng</a></li>
              <li><a href="?act=thongke">Thống kê</a></li>

            </ul>
        </div>
       </header>
        <!-- END HEADER -->
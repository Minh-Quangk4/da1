
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f8f8f8;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 70%;
        margin: 50px auto;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .header {
        background-color: #2c3e50;
        color: #ecf0f1;
        padding: 20px;
        text-align: center;
        border-radius: 8px 8px 0 0;
        height: 110px;
        margin-bottom: px;
    }

    h1 {
        margin: 0;
        font-size: 28px;
    }

    .content {
        padding: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #ecf0f1;
        padding: 15px;
        text-align: left;
    }

    th {
        background-color: #3498db;
        color: #fff;
    }

    input[type="checkbox"] {
        margin-right: 5px;
    }

    .button-group {
        margin-top: 20px;
        text-align: center;
    }

    input[type="button"] {
        padding: 10px 20px;
        background-color: #2ecc71;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    input[type="button"]:hover {
        background-color: #27ae60;
    }
</style>

<div class="container">
    <div class="header">
        <h1>DANH SÁCH DANH MỤC</h1>
    </div>
    <div class="content">
        <form action="#" method="POST">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ DANH MỤC</th>
                    <th>TÊN DANH MỤC</th>
                    <th></th>
                </tr>
                <a onclick="return confirm()" href=""></a>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    $suadm = "index.php?act=suadm&id=" . $idDm;
                    $xoadm = "index.php?act=xoadm&id=" . $idDm;
                
                    echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>' . $idDm . '</td>
                        <td>' . $tenDm. '</td>
                        <td>
                            <a onclick="return confirm(\'Bạn có muốn sửa không?\')" href="' . $suadm . '"><input type="button" value="Sửa"></a>
                            <a onclick="return confirm(\'Bạn có muốn xóa không?\')" href="' . $xoadm . '"><input type="button" value="Xóa"></a>
                        </td>
                    </tr>';
                }
                
                ?>
            </table>
            <div class="button-group">
                <input class="mr20" type="button" value="CHỌN TẤT CẢ">
                <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
                <a href="index.php?act=adddm"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
            </div>
        </form>
    </div>
</div>

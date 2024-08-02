<style>
    /* Các phần tử chung */
    .row {
        margin-bottom: 20px;
    }

    /* Tiêu đề trang */
    .frmtitle {
        background-color: #343a40;
        color: #fff;
        padding: 10px;
        text-align: center;
    }

    /* Bảng danh sách sản phẩm */
    table {
        width: 100%;
        border-collapse: collapse;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    th,
    td {
        border: 1px solid #dee2e6;
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #343a40;
        color: #fff;
    }

    /* Ảnh sản phẩm */
    td img {
        max-width: 80px;
        max-height: 80px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    /* Cột hành động */
    td a {
        margin-right: 5px;
        text-decoration: none;
        color: #007bff;
    }

    /* Nút nhập thêm */
    input[type="button"] {
        background-color: #28a745;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    /* Nút xóa và sửa */
    input[type="button"]:hover {
        background-color: #218838;
    }
</style>
<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH HÀNG HÓA</h1>
    </div>
    <div class="row2 form_content ">

        <div class="row2 mb10 formds_loai">
            <form action="index.php?act=listsp" method="post">
                <select name="iddm" id="" style="
    width: 130px;
    height: 30px;
    border-radius: 10px;
    /* padding-bottom: 10px; */
    margin-bottom: 20px;
">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option value="' . $idDm . '">' . $tenDm . '</option>';
                    }
                    ?>
                    <input type="submit" value="LỌC" name="clickOK" style="
    width: 83px;
    height: 30px;
    border-radius: 10px;
    margin-left: 10px;
    background-color: black;
    color: white;
    font-weight: bold;
    font-size: 12px;
">
                </select>

                <table>
                    <tr>
                        <th></th>
                        <th>MÃ ĐIỆN THOẠI</th>
                        <th>TÊN ĐIỆN THOẠI</th>
                        <th>GIÁ CŨ</th>
                        <th>GIÁ MỚI</th>
                        <th>ẢNH SẢN PHẨM</th>
                        <th style="text-align:center;">MÔ TẢ</th>
                        <th>CHỨC NĂNG</th>
                        <th>CHI TIẾT</th>

                    </tr>

                    <?php
                    foreach ($listsanpham as $sanpham) {
                        extract($sanpham);
                        $hard_delete = "index.php?act=hard_delete&id=" . $idSp;
                        $soft_delete = "index.php?act=soft_delete&id=" . $idSp;
                        $sanphamct = "index.php?act=sanphamchitiet&id=" . $idSp;
                        $suasp = "index.php?act=suasp&id=" . $idSp;
                        $hinhpath = "../upload/" . $anh;
                        if (is_file($hinhpath)) {
                            $hinh = '<img src="' . $hinhpath . '" alt="" width="100px" height="100px">';
                        } else {
                            $hinh = "not file img!";
                        }

                        echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>' . $idSp . '</td>
                                    <td>' . $tenSp . '</td>
                                    <td>' . $gia . '</td>
                                    <td>' . $giaKm . '</td>
                                    <td><img src="../upload/' . $anh . '" alt="Ảnh sản phẩm"></td>
                                    <td>' . $moTa . '</td>
                                    <td><a href="' . $suasp . '"><input type="button" value="Sửa"></a>
                                    <a href="' . $hard_delete . '"><input type="button" value="Xóa " onclick="return confirm(\'bạn có chắc chắn muốn xóa\')"></a> 
                                    <td><a href="' . $sanphamct . '"><input type="button" value="chi tiết"></a>
                                </tr>';
                    }
                    ?>
                </table>
        </div>
        <div class="row mb10 ">
            <input class="mr20" type="button" value="CHỌN TẤT CẢ">
            <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
            <a href="index.php?act=addsp"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
        </div>
        </form>
    </div>
</div>




</div>
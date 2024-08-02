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
        <h1>DANH SÁCH ĐƠN HÀNG</h1>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <th>Tên người đặt</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Ngày đặt</th>
                        <th>Trạng thái</th>
                        <th>Chức năng</th>

                    </tr>

                    <?php
                    foreach ($allDh as $dh) {
                        extract($dh);

                            $tenSpArr = explode(',', $tenSps);
    $soLuongArr = explode(',', $soLuongs);
    $anhArr = explode(',', $anhs);

                        echo '<tr>
        <td>' . $hoTenUser . '</td>
        <td>' . $sdt . '</td>
        <td>' . $diaChi . '</td>';

                        echo '<td>';
                        for ($i = 0; $i < count($tenSpArr); $i++) {
                            $tenSp = $tenSpArr[$i];
                            echo $tenSp . '<br>';
                            echo '<br>';
                            echo '<br>';
                        }
                        echo '</td>';

                        echo '<td>';
                        for ($i = 0; $i < count($soLuongArr); $i++) {
                            $soLuong = $soLuongArr[$i];
                            echo $soLuong . '<br>';
                            echo '<br>';
                            echo '<br>';
                            echo '<br>';
                        }
                        echo '</td>';

                        echo '<td>';
                        for ($i = 0; $i < count($anhArr); $i++) {
                            $anh = $anhArr[$i];
                            echo '<img src="../upload/' . $anh . '" alt="Ảnh sản phẩm"><br>';
                            echo '<br>';
                            echo '<br>';
                        }
                        echo '</td>';

                        echo '<td>' . $ngayDat . '</td>
      <td>' . $trangthai . '</td>
      <td> <a  href="?act=chitiet_donhang&id='. $idDonHang . '">xử lý đơn hàng</a></td>
      </tr>';
                    }
                    ?>
                </table>
            </div>
            <div class="row mb10 ">
        
            </div>
        </form>
    </div>
</div>




</div>
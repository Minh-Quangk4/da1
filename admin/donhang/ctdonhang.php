<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <div class="thongtin">
        <h1>Thông tin đơn hàng và khách hàng</h1>
        <h2>Tổng tiền:</h2>
        <h2>Trạng thái:
            <?= $allDh[0]['trangthai'] ?>
        </h2>
        <h2>Phương thức thanh toán: Giao hàng ship code</h2>
        <h2>Tên khách hàng:
            <?= $allDh[0]['hoTenUser'] ?>
        </h2>
        <h2>Thời gian đặt:
            <?= $allDh[0]['ngayDat'] ?>
        </h2>


        <form action="?act=chitiet_donhang&id=<?= $_GET['id'] ?>" method="post">
            <div class="trangthai">
                <select name="trangthai">
                    <option>Đang xử lý</option>
                    <option>Xác nhận đơn hàng</option>
                    <option>Đã vận chuyển</option>
                    <option>Giao thành công</option>
                </select>
                <button name="update-status-dh">Cập nhật</button>
            </div>
        </form>
    </div>
    <div class="chitietdonhang">
        <h1>Chi tiết đơn hàng</h1>
        <table>
            <tr>
                <th>Tên sản phẩm</th>
                <th>Ảnh sản phẩm</th>
                <th>Gía</th>
                <th>Số lượng</th>
                <th>Tổng giá</th>
            </tr>
            <?php
            foreach ($allDh as $Dh) { ?>
                <tr>
                    <td>
                        <?= $Dh['tenSp'] ?>
                    </td>
                    <td><img width="50px" src="../upload/<?= $Dh['anh'] ?>" alt=""></td>
                    <td>
                        <?= $Dh['giaKm'] ?>
                    </td>
                    <td>
                        <?= $Dh['soLuong'] ?>
                    </td>
                    <td>
                        <?= $Dh['soLuong'] * $Dh['giaKm'] ?>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>

    </div>

</body>

</html>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }
</style>
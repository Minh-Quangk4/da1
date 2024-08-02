<style>
    .order-status {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        text-align: center;
    }

    .status-icon {
        font-size: 50px;
        color: #3498db;
    }

    .status-text {
        font-size: 24px;
        margin-top: 10px;
        color: #333;
    }

    .status-description {
        font-size: 16px;
        margin-top: 10px;
        color: #666;
    }

    .btn-back {
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #3498db;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        font-size: 18px;
        transition: background-color 0.3s;
    }

    .btn-back:hover {
        background-color: #267bb5;
    }
</style>


<?php

    foreach ($bill as $c) { ?>
            <div style="margin-top: 10px;" class="order-status">
                <div class="status-icon">&#10004;</div>
                <div class="status-text">Đơn hàng của bạn đã ghi nhận. <br> Theo dõi trạng thái bên dưới để biết thêm về đơn hàng</div>

                <div class="order-details">
                    <p>Ten: <?=$c['hoTenUser']?></p>
                    <p>Sdt: <?=$c['sdt']?></p>
                    <p>Địa chỉ: <?=$c['diaChi']?></p>
                    <p>Tên sản phẩm: <?=$c['tenSps']?></p>
                    <p>Ngày đặt hàng: <?=$c['ngayDat'] ?> </p>
                    <p>Số lượng: <?=$c['soLuongs']?></p>
                    <p>Ship code</p>
                    <p>Trạng thái: <?=$c['trangthai']?></p>
                </div>
            </div>
            <?php
        }
?>
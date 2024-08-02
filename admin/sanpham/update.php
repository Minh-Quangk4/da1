<style>
    .row {
        margin-bottom: 20px;
        overflow: hidden;
    }

    .fmrtile {
        background-color: #333;
        color: #fff;
        padding: 10px;
    }

    .content {
        padding: 20px;
        background-color: #f4f4f4;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .mb10 {
        margin-bottom: 10px;
    }

    select,
    input[type="text"],
    input[type="file"],
    textarea {
        width: 100%;
        padding: 8px;
        margin-top: 6px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }

    input[type="submit"],
    input[type="reset"],
    input[type="button"] {
        background-color: #333;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover,
    input[type="reset"]:hover,
    input[type="button"]:hover {
        background-color: #555;
    }
</style>
<?php
if(is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/".$anh;
if(is_file($hinhpath)) {
    $hinhpath = '<img src="'.$hinhpath.'" width="100px" height="100px">';
} else {
    $hinhpath = "lỗi ảnh";
}
?>
<div class="row2">
    <div class="row2 font_title">
        <h1>CẬP NHẬT SẢN PHẨM</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
            <div class="row2 mb10 form_content_container">
                <label>Danh mục</label> <br>
                <select name="iddm" id="">
                    <?php
                    foreach($listdanhmuc as $value) {
                        if($value['idDm'] == $idDm) {
                            echo '<option value="'.$value['idDm'].'" selected>'.$value['tenDm'].'</option>';

                        } else {
                            echo '<option value="'.$value['idDm'].'" >'.$value['tenDm'].'</option>';
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="row2 mb10 form_content_container">
                <label> Tên sản phẩm</label> <br>
                <input type="text" name="name" value="<?= $tenSp ?>">
            </div>
            <div class="row2 mb10">
                <label>giá cũ </label> <br>
                <input type="text" name="giacu" value="<?= $gia ?>">
            </div>
            <div class="row2 mb10">
                <label>Giá mới </label> <br>
                <input type="text" name="giamoi" value="<?= $giaKm ?>">
            </div>
            <div class="row2 mb10">
                <label>Hình ảnh</label> <br>
                <input type="file" name="hinh">
                <?= $hinhpath ?>
            </div>
            <div class="row2 mb10">
                <label>Mô tả </label> <br>
                <textarea name="mota" id="" cols="30" rows="10"><?= $moTa ?></textarea>
            </div>
            <div class="row mb10 ">
                <input type="hidden" name="id" value="<?= $idSp ?>">
                <input class="mr20" name="capnhat" type="submit" value="CẬP NHẬT">
                <input class="mr20" type="reset" value="NHẬP LẠI">

                <a href="index.php?act=listsp"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if(isset($thanhcong) && ($thanhcong != '')) {
                echo $thanhcong;
            }
            ?>
        </form>
    </div>
</div>
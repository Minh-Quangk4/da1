
<?php 
    if(checkSS('cart')) {

    
?>
<style>
    a{
        text-decoration: none;
        list-style: none;
    }
    a:hover{
        color: aliceblue;
    }
</style>




<section class="h-100 mt-5 h-custom mb-5" >
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
                <div class="card card-registration card-registration-2" style="border-radius: 15px; position: relative;border-radius: 15px;top: -40px;">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-lg-8">
                                <div class="p-5">
                                    <div class="d-flex justify-content-between align-items-center mb-5">
                                        <h1 class="fw-bold mb-0 text-black">Giỏ Hàng</h1>
                                        <h6 class="mb-0 text-muted"><?=sizeof($_SESSION['cart'])?> Sản phẩm</h6>
                                    </div>
                                    <hr class="my-4">
                                    <?php 
                                    $i = 0;
                                    foreach($_SESSION['cart'] as $sp) {?>

                                    <div class="row row-cart mb-4 d-flex justify-content-between align-items-center">
                                        <div class="col-md-2 col-lg-2 col-xl-2">
                                            <img src="upload/<?=$sp['anh']?>" class="img-fluid rounded-3" alt="Cotton T-shirt">
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                            <h6 class="text-muted"><?=$sp['tenDm']?></h6>
                                            <h6 class="text-black mb-0"><?=$sp['tenSp']?></h6>
                                        </div>
                                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                            <h6 id="cart-gia" class="mb-0"><?=$sp['gia']?></h6>
                                        </div>

                                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                            <input class="cart-sl" style="width: 50px; text-align: center;" type="text" value="<?=$sp['soluong']?>">
                                        
                                        </div>
                                        <input class="cart-tt" style="width: 120px; text-align: center;" type="text" value="<?=$sp['gia'] ?>" disabled>
                                        <a style="margin-left: 25px;" href="updateSS.php?i=<?=$i?>">Xóa</a>
                                    </div>

                                    <?php
                                    $i++;}   
                                    ?>
                                    <div class="pt-5">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 bg-grey">
                                <form class="p-5" method="post" action="?act=gio_hang">
                                    <h3 class="fw-bold mb-5 mt-2 pt-1">Thanh Toán</h3>
                                    <hr class="my-4">

        
                                    <h5 class="text-uppercase mb-3">Mã giảm giá</h5>

                                    <div class="mb-5">
                                        <div class="form-outline">
                                            <input type="text" id="form3Examplea2"
                                                class="form-control form-control-lg" />
                                        </div>
                                    </div>

                                    <hr class="my-4">

                                    <div class="d-flex justify-content-between mb-5">
                                        <h5 class="text-uppercase">Tổng giá</h5>
                                        <h5 id="cart-all-price"></h5>
                                    </div>

                                    <div class="infr-user">
                                    <h5 class="text-uppercase mb-3">Điền thông tin</h5>
        
                                    <?php 
                                    $i = 0;
                                        foreach($_SESSION['cart'] as $sp) {?>

                                            <input type="hidden" name="idsp<?=$i?>" value="<?=$sp['idsp']?>">
                                            <input type="hidden" name="soluong<?=$i?>" value="<?=$sp['soluong']?>">
                                    <?php
                                        $i++;}
                                    ?>
                                        <input type="hidden" name="soluongSpGio" value="<?=sizeof($_SESSION['cart'])?>">
                                        <p><input value="<?=($inforUser ? $inforUser['hoTenUser'] : '')?>" type="text" name="tenUser" placeholder="Tên khách hàng"></p>
                                        <p><input value="<?=($inforUser ? $inforUser['sdt'] : '')?>" type="text" name="sdt" placeholder="Số điện thoại"></p>
                                        <p><input value="<?=($inforUser ? $inforUser['diaChi'] : '')?>" type="text" name="dc" placeholder="Địa chỉ" ></p>
                    
                                    </div>
                         
                                    <button type="submit" name="btnTaoDonHang" class="btn btn-dark btn-block btn-lg"
                                    data-mdb-ripple-color="dark">Đặt hàng</button>
                                    

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    }
    else {
        echo "<h3>Giỏ hàng trống</h3>";
    }
?>
<script>
   const sl = document.querySelectorAll('.cart-sl');
   const tt = document.querySelector('#cart-all-price');
   const giaSps = document.querySelectorAll('.cart-tt');

   const updateGia = (e) => {
        const elm = e.target;
        const gia = elm.closest('.row-cart').querySelector('#cart-gia').innerText;
        // Tính toán và cập nhật giá trị
        elm.closest('.row-cart').querySelector('.cart-tt').value = elm.value * Number(gia);

        LoadThanhTien();
   }

    sl.forEach((elm) => {
        elm.addEventListener('input', updateGia);
    });

    const LoadThanhTien = () => {
        tt.innerText = Array.from(giaSps).reduce((sum, elm) => {
            return sum + Number(elm.value);
        }, 0);
    };
    LoadThanhTien();

</script>


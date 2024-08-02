<?php
session_start(); // Khởi tạo session

if(!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}


function checkSS($name)
{
    return (isset($_SESSION[$name]) ? 1 : 0);
}

if (isset($_POST['add-cart'])) {
    include "model/pdo.php";
    include 'model/sanpham.php';

    $sp = loadone_sanphamDm($_POST['idsp']);

    $checkSpDaco = false;

    if ($sp) {
        foreach ($_SESSION['cart'] as &$cartItem) {
            if ($_POST['idsp'] === $cartItem['idsp']) {
                $checkSpDaco = true;
                $cartItem['soluong'] += $_POST['sl'];
            }
        }


        if (!$checkSpDaco) {
            $data = [
                'idsp' => $_POST['idsp'],
                'tenDm' => $sp['tenDm'],
                'tenSp' => $sp['tenSp'],
                'anh' => $sp['anh'],
                'gia' => $sp['giaKm'],
                'soluong' => $_POST['sl']
            ];
            $_SESSION['cart'][] = $data;
        }
        echo "<h2>Thêm thành công, Bạn sẽ tự động chuyển về trang chủ sau:</h2>";
        echo " <h1 id='countdown'>3 </h1>";
        echo " <h3>giây</h3>";
        header("refresh:3; url=index.php");
    } else {
        echo "Không thể tìm thấy thông tin sản phẩm cho ID: " . $_POST['idsp'];
    }
}
?>
<style>
    h1 {
  font-size: 30px;
  text-align: center;
}
h2{
    text-align: center;
}
h3{
    position: relative;
    top: -70px;
    font-size: 30px;
    left: 782px;
}
</style>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
  var countdownElement = document.getElementById("countdown");
  var count = 3 ;

  var countdown = setInterval(function() {
    count--;
    countdownElement.textContent = count;

    if (count <= 0) {
      clearInterval(countdown);
    }
  }, 1000);
});

</script>

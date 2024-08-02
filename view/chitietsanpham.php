<?php
// Kết nối CSDL
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "duan1smp";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Xử lý khi người dùng bình luận
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $noiDung = $_POST["noiDung"];
    $idUser = $_POST["idUser"];
    $idSp = $_POST["idSp"];

    // Thêm bình luận vào CSDL
    $sql = "INSERT INTO binh_luan (noiDung, idUser, idSp, ngayBinhLuan) VALUES ('$noiDung', $idUser, $idSp, NOW())";
    $conn->query($sql);
}

// Lấy dữ liệu bình luận từ CSDL
$sql = "SELECT binh_luan.noiDung, tai_khoan.tenUser, binh_luan.ngayBinhLuan FROM binh_luan
        JOIN tai_khoan ON binh_luan.idUser = tai_khoan.idUser
        WHERE binh_luan.idSp = 7"; // Thay 7 bằng id sản phẩm bạn muốn hiển thị bình luận

$result = $conn->query($sql);
?>
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
esponsive


  /* thanh điều hướng  trang  */
  .navbar {
    padding: 20px;
    background-color: #fff;
    max-width: 100%;

  }

  .navbar a {
    padding: 10px;
    line-height: 30px;
    font-size: 15px;
    color: black;
  }

  .img-responsive {
    display: block;
    position: relative;
    width: 300px;
    height: 309px;
    left: 300px;
    top: 168px;
    border-radius: 28px;
  }

  /* sản phẩm chi tiết */
  .main-productdetails {
    margin: 0 auto;
    /* Đặt margin auto để căn giữa theo chiều ngang */
    background-color: #f0f0f0;
    margin-top: 20px;
  }

  .main-productdetails .roww {

    background-color: #fff;
    display: flex !important;
    justify-content: center !important;

  }

  .main-productdetails .row .rol1 {
    width: 40%;
  }

  .main-productdetails .rol1 p img {
    border: 2px solid #fff;
  }

  .main-productdetails .rol1 p img:hover {
    border: 2px solid red;
    cursor: pointer;
  }


  .main-productdetails .rol1 .product {
    display: flex;
    flex-direction: column;

  }

  .main-productdetails .rol1 .product img {
    position: relative;
    top: 87px;
    width: 350px;
    height: 290px;
  }

  .main-productdetails .banner_product {
    width: 100%;
    margin: 10px;
  }


  .main-productdetails .row .rol2 {
    width: 60%;
    padding: 10px;
  }


  .main-productdetails .rol2 {
    margin-left: 10%;
  }

  .main-productdetails .rol2 h3 {
    margin-top: 30px;
  }

  .main-productdetails .rol2>p {
    padding: 10px;
    background-color: black;
  }

  .main-productdetails .rol2 p {

    font-size: 20px;
    color: #fff;
    padding: 10px;
    align-items: center;
    align-content: center;
    text-align: center;
    width: 300px;
    border-radius: 100px;
  }

  .product_name {
    padding: 20px 20px 20px 0;
    position: relative;
    right: 977px;
    top: 50px;
    color: white;
  }

  .main-productdetails .group-button {
    margin-top: 30px;
  }

  .main-productdetails .soluong {
    background-color: #f0f0f0;
    height: 25px;
    width: 25px;
    border: #fff;
    border-radius: 100px;
  }

  .main-productdetails .soluong1 {
    width: 150px;
    height: 25px;
    border: 0.5px solid gray;
  }

  .main-productdetails #soluong {
    text-align: center;
    border: 1px solid rgb(231, 229, 229);
    width: 58px;
    border-radius: 18px;
  }

  .main-productdetails .buy_here {
    margin-top: 50px;

  }

  .main-productdetails .buy_here a {
    display: inline-block;
    padding: 10px 72px;
    background-color: red;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    transition: background-color 0.3s;
  }

  .main-productdetails .buy_here a:hover {
    background-color: darkred;

  }

  .main-productdetails .content h3 {
    color: #1ABEE2;
    font-size: 20px;
    margin: 20px 0 10px;
  }

  .main-productdetails .khuyenmai {
    background-color: #fff;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    padding: 30px;
    border: 1px solid black;
  }

  .main-productdetails .khuyenmai h3 {
    font-size: 24px;
    margin: 10px 0;

  }

  .main-productdetails .box_content {
    border: 1px solid black;
    min-height: 150px;
    padding: 70px;
    margin-bottom: 20px;
  }

  .main-productdetails .box_content p {
    color: black;
    font-size: 16px;
  }

  .main-productdetails .box_content i {
    color: greenyellow;
    padding: 0 5px;
  }

  .main-productdetails .row2 {
    display: flex;
    margin-top: 7px;
    background-color: black;
    border-radius: 30px;
    width: 1000px;
    position: relative;
    left: 68px;
    height: 760px;
    top: 10px;
  }

  .main-productdetails .row2 .mota {
    position: relative;
    top: 588px;
    height: 0px;
    left: 15px;
    color: white;
  }


  .main-productdetails .mota h3 {
    position: relative;
    margin-bottom: 20px;
    left: 0px;
    top: -2px;
  }

  .main-productdetails .row2 .tintuc {
    margin-left: 0.5%;
    width: 24.5%;
    padding: 10px;
    color: #333;

    background-color: #fff;

  }

  .main-productdetails .tintuc .title {
    font-size: 30px;
    margin-bottom: 20px;
  }

  .main-productdetails .tintuc .list_tintuc {
    display: flex;
    padding-bottom: 20px;
  }

  .main-productdetails .tintuc .list_tintuc img {
    width: 50px;
    height: 50px;
  }

  .main-productdetails .binhluan {
    margin-top: 7px;
    padding: 20px;
    border-radius: 5px;
    background-color: #fff;
  }

  .main-productdetails .binhluan h2 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
  }

  .main-productdetails .binhluan input[type="text"] {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 10px;
  }

  .main-productdetails .binhluan button {
    background-color: black;
    color: #fff;
    border: none;
    border-radius: 18px;
    padding: 10px 20px;
    cursor: pointer;
    margin-left: 10px;
  }

  .main-productdetails .list_binhluan {
    margin-top: 20px;
  }

  .main-productdetails .list_binhluan h3 {
    margin-bottom: 5px;
  }

  .main-productdetails .list_binhluan p {
    margin-bottom: 20px;
  }

  .main-productdetails .list_binhluan p i {
    color: yellow;

  }


  .main-productdetails .list_binhluan p:last-child {
    margin-bottom: 0;
  }
.uudaikhimuamac{
  position: relative;
    top: 54px;
    text-align: center;
    font-size: larger;
    font-weight: bolder;
}
.rol{
  width: 0px;
  height: 0px;
}
</style>


<section class="main-productdetails">
  <section class="roww">
    <section class="row2">
    <section class="rol" >
      <div  class="product">
        <img width="50%" class="img-responsive" src="./upload/<?=$sp['anh']?>" id="main_img">
      </div>
    </section>
    <section class="mota" style="width: 100%;">
      <h3>Mô tả sản phẩm</h3>
      <P><?=$sp['moTa']?></P>
    </section>

  </section>
    <section class="rol2">
      <h2 class="product_name"><?=$sp['tenSp']?></h2>
      
      <p name="price"> Giá sản phẩm: <?=$sp['giaKm']?>vnđ</p>
      <form action="strSS.php" method="post">
        <div class="group-button">
          <button type="button" class="soluong" onclick="thaydoisoluong('-')">-</button>
          <input name="sl" type="tel" class="soluong1" value="1" id="soluong">
          <button type="button" class="soluong" onclick="thaydoisoluong('+')">+</button>
          <input name="idsp" type="hidden" value="<?=$sp['idSp']?>">
        </div>
        <div class="buy_here">
          <button style="color: white;background-color: black;padding: 5px;border: none;border-radius: 10px;" name="add-cart">Thêm vào giỏ</button>
        </div>
      </form>
      <div class="content">
        <div class="uudaikhimuamac">Ưu đãi khi mua kèm Macbook</div>
        <div class="khuyenmai">
          <h3></h3>
        </div>
        <div class="box_content">
          <p><i class='bx bxs-check-circle'></i>Giảm ngay 300.000đ khi mua thêm RAM kèm với PC.</p>
          <p><i class='bx bxs-check-circle'></i>Giảm ngay 200.000đ khi mua thêm SSD kèm với PC</p>
          <p><i class='bx bxs-check-circle'></i>Giảm ngay 200.000đ khi mua thêm SSD kèm với PC</p>
        </div>

      </div>
    </section>

  </section>
  
  <section class="binhluan">
  <form method="POST" action="">
        <label for="noiDung">Nhập đánh giá sản phẩm của bạn tại đây:</label><br>
        <input type="text" name="noiDung" id="noiDung" required></input>

        <!-- Trường ẩn để lưu idUser và idSp -->
        <input type="hidden" name="idUser" value="8"> <!-- Thay 8 bằng idUser của người đăng nhập hoặc một giải pháp đăng nhập hợp lý -->
        <input type="hidden" name="idSp" value="7"> <!-- Thay 7 bằng id sản phẩm bạn muốn hiển thị bình luận -->

        <button type="submit">Gửi bình luận</button>
    </form>

    <!-- Hiển thị bình luận -->
    <h2>Đánh giá của khách hàng:</h2>
    <ul>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<li><strong>{$row['tenUser']} ({$row['ngayBinhLuan']}):</strong> {$row['noiDung']}</li>";
            }
        } else {
            echo "<li>Chưa có bình luận nào.</li>";
        }
        ?>
    </ul>
  </section>
</section>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script>
  function thaydoisoluong(toantu) {
    let luong = $('#soluong');
    let soluong = luong.val();

    if (toantu === '-') {
      if (parseInt(soluong) > 1) {
        luong.val(parseInt(soluong) - 1);
      }
    } else if (toantu === '+') {
      luong.val(parseInt(soluong) + 1);
    } else {
      alert('cảnh báo nguy hiểm');
    }
  }

  $(() => {
    $('p img').click(function () {
      let imgPath = $(this).attr('src');
      $('#main_img').attr('src', imgPath);
    })
  }) 
</script>
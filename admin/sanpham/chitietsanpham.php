<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .card-body {
        margin: 60px;
    }
    .menu ul {
    list-style: none;
    padding: 0;
    margin: 0;
    background-color: #444;
    width: 1176px;
    position: relative;
    left: 13px;
}
header {
    border-radius: 10px;
    position: relative;
    background-color: black;
    color: #fff;
    text-align: center;
    padding: 15px 0;
    width: 1177px;
}
    </style>
</head>

<body>
    <div class="row2">

        <div class="row mt-3 ">
            <h1>Chi Tiết Sản Phẩm</h1>
            <?php

if(is_array($sanpham)) {
    extract($sanpham);
}


$suasp = "index.php?act=suasp&id=" . $idSp;


$hinhpath="../upload/".$anh;
if(is_file($hinhpath)){
$anh="<img src='".$hinhpath."' height='500 '>";
}else{
$anh="No photo";
}

          
            
echo'
<div class="d-flex">
<div class="" style="width:40%">
<p   >'.$anh.'</p>
   
</div>
        <div style="width:600px" class="card-body">
    <h3>Tên Sản phẩm :  '.$tenSp.'</h3>
    <p> Giá: '.$gia.'</p>
    <p>  Giá khuyến mại: '.$giaKm.'</p>
    <p> Mô tả:'.$moTa.'</p>
    
    <a href="' . $suasp . '"><input  class="btn btn-primary" type="button" value="Sửa thông tin sản phẩm"></a>

</div>
  
</div>'
?>
        </div>

        <h2 class="text-center">Bình Luận</h2>
        <div class="">
            <table class="table table-light table-striped">
                <tr>
                    <td>Tên</td>
                    <td>email</td>
                    <td>Nội dung bình luận</td>
                    <td>Ngày đăng</td>
                    <td>Chức năng</td>
                </tr>
                <tr>
                    <td>quang</td>
                    <td>email@gmail.com</td>
                    <td>Sản phẩm đẹp</td>
                    <td>5-11-2023</td>
                    <td><button class="btn btn-danger">Xóa </button>
                        <button class="btn btn-success">Sửa </button>
                    </td>
                </tr>

            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
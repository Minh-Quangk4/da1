<?php
$connect = new mysqli('localhost', 'root', '', 'duan1smp');
$query = "SELECT chitietdonhang.soLuong as soLuongDatDon, san_pham.tenSp FROM san_pham INNER JOIN chitietdonhang ON san_pham.idSp = chitietdonhang.idSp";
$result = mysqli_query($connect, $query);
$data = [];
while ($row = mysqli_fetch_array($result)) {
  $data[] = $row;
}
?>
<html>


<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {
      packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['tenSp', 'soLuongDatDon'],
        <?php
        foreach ($data as $key) {
          echo "['" . $key['tenSp'] . "' , " . $key['soLuongDatDon'] . "],";
        }
        ?>

      ]);

      var options = {
        title: 'Thống kê số lượng đặt đơn hàng theo sản phẩm',
        is3D: true,
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
      chart.draw(data, options);
    }
  </script>
</head>

<body>
  <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
</body>
<div class="thongketong">

    <div class="bao">
        <a id="a1" href="../admin/tienlaitheongay.php">Thống kê tiền lãi theo ngày</a>
    </div>
    <div class="bao">
        <a id="a1" href="../admin/tienlaitheothang.php">Thống kê tiền lãi theo tháng</a>
    </div>
    <div class="bao">
        <a id="a1" href="../admin/tienlaitheonam.php">Thống kê tiền lãi theo năm</a>
    </div>
</div>

</html>
<style>
  #a1 {
    text-decoration: none;
    text-align: center;
    align-content: center;
    display: block;
    align-items: center;
    align-content: center;
    position: relative;
    top: 5px;
    color: white;
    font-weight: bold;
    
  }

  .bao {
    width: 222px;
    height: 30px;
    background-color: black;
    margin: auto;
    border-radius: 100px;
    margin-right: 32px;
    
    
  }
  .thongketong{
    display: inline-flex;
    padding-left: 188px;
  }
  #a1:hover{
    color:aqua;
  }
  
</style>
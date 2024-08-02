<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "duan1smp";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Câu lệnh SQL
$sql = "SELECT YEAR(donh.ngayDat) AS Nam,
       MONTH(donh.ngayDat) AS Thang,
       SUM((CAST(ctdh.soLuong AS DECIMAL) * CAST(sp.gia AS DECIMAL)) - (CAST(ctdh.soLuong AS DECIMAL) * CAST(sp.giaKm AS DECIMAL))) AS LoiNhuan
FROM chitietdonhang ctdh
JOIN don_hang donh ON donh.idDonHang = ctdh.idDonHang
JOIN san_pham sp ON ctdh.idSp = sp.idSp

GROUP BY YEAR(donh.ngayDat), MONTH(donh.ngayDat)";

$result = $conn->query($sql);

$rows = array();
$table = array();
$table['cols'] = array(
    array('label' => 'Tháng', 'type' => 'string'),
    array('label' => 'Lợi nhuận', 'type' => 'number')
);

while ($row = $result->fetch_assoc()) {
    $temp = array();
    $temp[] = array('v' => (string)$row['Thang']);
    $temp[] = array('v' => (float)$row['LoiNhuan']);
    $rows[] = array('c' => $temp);
}

$table['rows'] = $rows;
$jsonTable = json_encode($table);
?>
<!DOCTYPE html>
<html>

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var jsonData = <?php echo $jsonTable; ?>;
            var data = new google.visualization.DataTable(jsonData);

            var options = {
                title: 'Số tiền lãi theo tháng',
                legend: {
                    position: 'bottom'
                }
            };

            var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));

            chart.draw(data, options);
        }
    </script>
</head>

<body>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
</body>
<div class="thongketong">
    <div class="bao">
        <a id="a1" href="../admin/?act=thongke">Trở lại trang thống kê</a>
    </div>
    <div class="bao">
        <a id="a1" href="./tienlaitheongay.php">Thống kê tiền lãi theo ngày</a>
    </div>
    <div class="bao">
        <a id="a1" href="./tienlaitheothang.php">Thống kê tiền lãi theo tháng</a>
    </div>
    <div class="bao">
        <a id="a1" href="./tienlaitheonam.php">Thống kê tiền lãi theo năm</a>
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

    .thongketong {
        display: inline-flex;
        padding-left: 188px;
    }

    #a1:hover {
        color: aqua;
    }
</style>
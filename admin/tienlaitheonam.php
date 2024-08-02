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
            // Dữ liệu số tiền lãi theo từng năm từ PHP hoặc từ API
            var jsonData = [
                ['Năm', 'Lợi Nhuận'],
                <?php
                // Kết nối cơ sở dữ liệu và thực hiện truy vấn SQL
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "duan1smp";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Kết nối thất bại: " . $conn->connect_error);
                }

            
                $sql = "SELECT YEAR(donh.ngayDat) AS Nam,
            
                SUM((CAST(ctdh.soLuong AS DECIMAL) * CAST(sp.gia AS DECIMAL)) - (CAST(ctdh.soLuong AS DECIMAL) * CAST(sp.giaKm AS DECIMAL))) AS LoiNhuan
                FROM chitietdonhang ctdh
                JOIN don_hang donh ON donh.idDonHang = ctdh.idDonHang
                JOIN san_pham sp ON ctdh.idSp = sp.idSp

                GROUP BY YEAR(donh.ngayDat)";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "['" . $row['Nam'] . "', " . $row['LoiNhuan'] . "],";
                    }
                }
                $conn->close();
                ?>
            ];

            var data = google.visualization.arrayToDataTable(jsonData);

            var options = {
                title: 'Số Tiền Lãi theo Năm',
                hAxis: {
                    title: 'Năm'
                },
                vAxis: {
                    title: 'Lợi Nhuận'
                },
                legend: 'none'
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
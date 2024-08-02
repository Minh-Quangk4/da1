<!DOCTYPE html>
<html>

<head>
    <title>Biểu đồ thống kê lợi nhuận theo ngày</title>
    <!-- Load thư viện Google Chart -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        // Load thư viện Google Chart
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            // Tạo dữ liệu từ kết quả của câu lệnh SQL
            var data = google.visualization.arrayToDataTable([
                ['Ngày', 'Lợi nhuận'],
                <?php
                // Kết nối đến cơ sở dữ liệu (điều chỉnh thông tin kết nối của bạn)
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "duan1smp";

                // Tạo kết nối đến cơ sở dữ liệu
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Kiểm tra kết nối
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Truy vấn cơ sở dữ liệu để lấy thông tin thống kê tiền lãi theo ngày
                

                $sql = "SELECT DATE(donh.ngayDat) AS NgayDat,
        
                SUM((CAST(ctdh.soLuong AS DECIMAL) * CAST(sp.gia AS DECIMAL)) - (CAST(ctdh.soLuong AS DECIMAL) * CAST(sp.giaKm AS DECIMAL))) AS LoiNhuan
                    FROM chitietdonhang ctdh
                    JOIN don_hang donh ON donh.idDonHang = ctdh.idDonHang
                    JOIN san_pham sp ON ctdh.idSp = sp.idSp

                    GROUP BY DATE(donh.ngayDat)";


                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "['" . $row["NgayDat"] . "', " . $row["LoiNhuan"] . "],";
                    }
                }

                // Đóng kết nối cơ sở dữ liệu
                $conn->close();
                ?>
            ]);

            // Thiết lập cấu hình biểu đồ
            var options = {
                title: 'Biểu đồ lợi nhuận theo ngày',
                width: 900,
                height: 500,
                legend: {
                    position: 'none'
                }
            };

            // Vẽ biểu đồ cột
            var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
</head>

<body>
    <!-- Địa điểm để vẽ biểu đồ -->
    <div id="chart_div"></div>
</body>
<div class="thongketong">
    <div class="bao">
        <a id="a1" href="../admin/?act=thongke">Trở lại trang thống kê </a>
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
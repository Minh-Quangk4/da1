<?php
// database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "duan1";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // query to get monthly sales data
    $sql = "SELECT YEAR(date_order) AS year, MONTH(date_order) AS month, SUM(total_bill) AS total_revenue
            FROM bills
            GROUP BY YEAR(date_order), MONTH(date_order)
            ORDER BY year, month";
    $result = $conn->query($sql);

    // process data for Chart.js
    $data = [];
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $data[] = ['month' => $row['month'], 'year' => $row['year'], 'revenue' => $row['total_revenue']];
    }
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
} finally {
    if ($conn) {
        $conn = null; // Close the connection in the finally block
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Monthly Revenue Chart</title>
    <!-- Include Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <a href="?act=bieudongay">Biểu đồ theo ngày</a>
    <!-- HTML container for the chart -->
    <canvas id="revenueChart" width="400" height="130"></canvas>

    <script>
        // JavaScript code to render the chart
        var ctx = document.getElementById('revenueChart').getContext('2d');

        var data = <?php echo json_encode($data); ?>;

        // Process data to group by year
        var groupedData = {};
        data.forEach(entry => {
            var year = entry.year;
            if (!groupedData[year]) {
                groupedData[year] = { labels: [], revenues: [] };
            }
            groupedData[year].labels.push(entry.month);
            groupedData[year].revenues.push(entry.revenue);
        });

        var datasets = Object.keys(groupedData).map(year => ({
            label: 'Doanh thu tháng ' + year,
            data: groupedData[year].revenues,
            fill: false,
            borderColor: getRandomColor()
        }));

        var chartData = {
            labels: groupedData[Object.keys(groupedData)[0]].labels,
            datasets: datasets
        };

        var revenueChart = new Chart(ctx, {
            type: 'line',
            data: chartData,
            options: {
                scales: {
                    x: [{
                        title: {
                            display: true,
                            text: 'Tháng'
                        }
                    }],
                    y: [{
                        title: {
                            display: true,
                            text: 'Doanh thu'
                        },
                        ticks: {
                            suggestedMin: 0 // Ensure the y-axis starts from 0
                }
                    }]
                }
            }
        });

        // Function to generate random colors
        function getRandomColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }
    </script>
</body>
</html>

<?php
// Kết nối CSDL
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "duan1smp";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Xử lý xóa bình luận
if (isset($_POST['delete_comment'])) {
    $comment_id = $_POST['comment_id'];
    $sql_delete_comment = "DELETE FROM binh_luan WHERE idBinhLuan = $comment_id";
    $conn->query($sql_delete_comment);
}

// Lấy dữ liệu bình luận
$sql_get_comments = "SELECT binh_luan.idBinhLuan, binh_luan.noiDung, binh_luan.ngayBinhLuan, tai_khoan.tenUser
                    FROM binh_luan
                    INNER JOIN tai_khoan ON binh_luan.idUser = tai_khoan.idUser";
$result_comments = $conn->query($sql_get_comments);

?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý bình luận</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <h2 class="mb-4">Quản lý bình luận</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Người dùng</th>
                    <th>Bình luận</th>
                    <th>Ngày</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result_comments->num_rows > 0) {
                    while ($row = $result_comments->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>{$row['tenUser']}</td>";
                        echo "<td>{$row['noiDung']}</td>";
                        echo "<td>{$row['ngayBinhLuan']}</td>";
                        echo "<td>
                        <form method='post' onsubmit='return confirm(\"Bạn có chắc chắn muốn xóa bình luận này?\");'>
                            <input type='hidden' name='comment_id' value='{$row['idBinhLuan']}'>
                            <button type='submit' name='delete_comment' class='btn btn-danger btn-sm mr-2'>Xóa</button>
                        </form>
                        <button type='button' class='btn btn-primary btn-sm' data-toggle='modal' data-target='#replyModal{$row['idBinhLuan']}'>Phản hồi</button>
                      </td>";
                        echo "</tr>";

                        // Modal cho phản hồi
                        echo "<div class='modal fade' id='replyModal{$row['idBinhLuan']}' tabindex='-1' role='dialog' aria-labelledby='replyModalLabel' aria-hidden='true'>
                        <div class='modal-dialog' role='document'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <h5 class='modal-title' id='replyModalLabel'>Phản hồi bình luận</h5>
                                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button>
                                </div>
                                <div class='modal-body'>
                                    <!-- Nội dung phản hồi -->
                                    <form action='#' method='post'>
                                        <textarea class='form-control' name='reply_content' rows='3' placeholder='Nhập phản hồi của bạn'></textarea>
                                        <input type='hidden' name='comment_id' value='{$row['idBinhLuan']}'>
                                        <button type='submit' class='btn btn-primary mt-3'>Gửi phản hồi</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Không có bình luận nào</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS và Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>

<?php
// Đóng kết nối CSDL
$conn->close();
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng bình luận</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin-top: 50px;
        }

        table {
            width: 100%;
            margin-bottom: 1rem;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        table th,
        table td {
            padding: 1rem;
            vertical-align: middle;
            border: none;
        }

        table th {
            background-color: #f8f8f8;
            font-weight: bold;
            text-align: center;
        }

        table tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        .btn-action {
            cursor: pointer;
            transition: all 0.3s ease;
            padding: 8px 16px;
            border-radius: 6px;
            border: 1px solid #007bff;
            background-color: #007bff;
            color: #fff;
        }

        .btn-action:hover {
            transform: scale(1.05);
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
            background-color: #444;
            width: 1160px;
            position: relative;
            left: 15px;
            text-decoration: none;
            list-style: none;
        }

        .header_admin h1 {
            margin: 0;
            position: relative;
            left: 538px;
        }

        a {
            text-decoration: none;
        }

        a:hover {
            color: #ffffff;
            text-decoration: none;
        }
    </style>
</head>

<body>


    <!-- Bootstrap JS và Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
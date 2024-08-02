<a class="trovea" href="../" style="
    list-style: none;
    font-size: larger;
    font-weight: bold;
    color: black;
    position: relative;
    text-decoration: none;
    left: 234px;
    top: 48px;
"><img id="trove" src="./back.gif" alt="">Trở về trang chủ</a>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Quản Lý Người Dùng</title>
</head>

<body>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Quản Lý Người Dùng</h2>

        <?php
        // Kết nối CSDL
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $database = "duan1smp";

        $conn = new mysqli($servername, $username, $password, $database);

        // Kiểm tra kết nối
        if ($conn->connect_error) {
            die("Kết nối thất bại: " . $conn->connect_error);
        }

        // Xử lý các hành động (xóa, cấp quyền admin, vô hiệu hóa, kích hoạt người dùng)
        if (isset($_GET['action']) && isset($_GET['id'])) {
            $action = $_GET['action'];
            $userId = $_GET['id'];

            switch ($action) {
                case 'delete':
                    // Xóa người dùng
                    $sql = "DELETE FROM tai_khoan WHERE idUser = $userId";
                    $conn->query($sql);
                    break;

                case 'grant_admin':
                    // Cấp quyền admin
                    $sql = "UPDATE tai_khoan SET vaiTro = 'admin' WHERE idUser = $userId";
                    $conn->query($sql);
                    break;

                case 'revoke_admin':
                    // Hủy quyền admin
                    $sql = "UPDATE tai_khoan SET vaiTro = 'Người dùng' WHERE idUser = $userId";
                    $conn->query($sql);
                    break;

                case 'disable':
                    // Vô hiệu hóa người dùng
                    $sql = "UPDATE tai_khoan SET role = 0 WHERE idUser = $userId";
                    $conn->query($sql);
                    break;

                case 'enable':
                    // Kích hoạt người dùng
                    $sql = "UPDATE tai_khoan SET role = 1 WHERE idUser = $userId";
                    $conn->query($sql);
                    break;
            }
        }

        // Lấy danh sách người dùng
        $result = $conn->query("SELECT * FROM tai_khoan");
        ?>

        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Tên Người Dùng</th>
                    <th>Vai Trò</th>
                    <th>Trạng Thái</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <td><?= $row['idUser'] ?></td>
                        <td><?= $row['tenUser'] ?></td>
                        <td><?= $row['vaiTro'] ?></td>
                        <td>
                            <?php echo ($row['role'] === '1') ? '<span class="badge badge-success">Hoạt Động</span>' : '<span class="badge badge-danger">Vô Hiệu Hóa</span>'; ?>
                        </td>
                        <td>
                            <a href="?action=delete&id=<?= $row['idUser'] ?>" class="btn btn-danger btn-sm">Xóa</a>
                            <?php if ($row['vaiTro'] === 'admin') : ?>
                                <a href="?action=revoke_admin&id=<?= $row['idUser'] ?>" class="btn btn-warning btn-sm">Hủy Quyền Admin</a>
                            <?php elseif ($row['vaiTro'] !== 'admin') : ?>
                                <a href="?action=grant_admin&id=<?= $row['idUser'] ?>" class="btn btn-success btn-sm">Cấp Quyền Admin</a>
                            <?php endif; ?>
                            <?php if ($row['role'] === '0') : ?>
                                <a href="?action=enable&id=<?= $row['idUser'] ?>" class="btn btn-primary btn-sm">Kích Hoạt</a>
                            <?php endif; ?>
                            <a href="?action=disable&id=<?= $row['idUser'] ?>" class="btn btn-warning btn-sm">Vô Hiệu Hóa</a>
                        </td>

                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <?php
        // Đóng kết nối
        $conn->close();
        ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
<style>
    #trove {
        position: relative;
        left: -24px;
        width: 50px;
        height: 50px;
        top: -4px;
    }
</style>

</html>
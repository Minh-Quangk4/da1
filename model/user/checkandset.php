<?php
ob_start();

include "../pdo.php";
include "taikhoan.php";

if (isset($_POST['btnDangNhap'])) {
    if (checkLogin($_POST['user'], $_POST['pass'])) {
        setcookie('user', $_POST['user'], time() + 3600, '/');
        header('location: ../../index.php');
exit;
    } else {
        echo "Sai password.";
        
    }
}




?>
<a href="../../">back</a>

<?php 
    setcookie('user', $_POST['user'], time() + -3600, '/');
    header('location: ../../index.php');
            exit;

?>
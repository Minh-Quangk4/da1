<?php
session_start();
    if (isset($_SESSION['cart']) && isset($_GET['i'])) {
        if(sizeof($_SESSION['cart']) == 1) {
            session_destroy();
        }
        unset($_SESSION['cart'][$_GET['i']]);
    }
    header('location: ./?act=gio_hang');    
?>
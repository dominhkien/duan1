<?php
ob_start();
$act = $_GET['act'] ?? "";

switch ($act) {
    case 'home':
        $title = "Trang chủ";
        $VIEW = "view/public/home.php";
        break;

    default:
        $title = "Trang chủ";
        $VIEW = "view/public/home.php";
        break;
}
ob_end_flush();

include "view/layout/header.php";
include "view/layout/banner.php";
include $VIEW;
include "view/layout/footer.php";

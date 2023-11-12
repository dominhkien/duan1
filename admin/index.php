<?php
ob_start();
$act = $_GET['act'] ?? "";

switch ($act) {
    case 'home':
        $title = "Trang chủ";
        $VIEW = "public/home.php";
        break;

    default:
        $title = "Trang chủ";
        $VIEW = "public/home.php";
        break;
}
ob_end_flush();

include "layout/header.php";
include "layout/left.php";
include  $VIEW;
include "layout/footer.php";

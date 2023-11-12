<?php
require_once "model/pdo.php";
require_once "model/phim/loaiphim.php";
require_once "model/phim/phim.php";
ob_start();
$act = $_GET['act'] ?? "";
$list_loai = listtl();
$list_phim = select3_phim();
$top3_phim = top3_phim();

switch ($act) {
    case "home":
        $title = "Trang chủ";
        $VIEW = "view/public/home.php";
        break;

    case "listmovie":
        $title = "Danh sách phim";
        $VIEW = "view/public/listmovie.php";
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

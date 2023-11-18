<?php
require_once "model/pdo.php";
require_once "model/phim/theloai.php";
require_once "model/phim/phim.php";
require_once "model/time/ngay_chieu.php";
require_once "model/time/gio_chieu.php";
require_once "model/time/dia_diem.php";

ob_start();
$act = $_GET['act'] ?? "";
$id_ctg = $_REQUEST['id_ctg'] ?? 0;

$list_loai = all_theloai();
$list_ngc = list_showdate();
$list_phim = all_phim($id_ctg);
$phim_hot = phim_hot();
$phim_3 = phim_3();

switch ($act) {
    case "home":
        $title = "Trang chủ";
        $VIEW = "view/public/home.php";
        break;

    case "listphim":
        $title = "Danh sách phim";
        $list_phim = all_phim($id_ctg);
        $VIEW = "view/public/listmovie.php";
        break;

    case "ctphim":
        // var_dump($_GET);
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $one_phim = one_phim($_GET['id_phim']);
        }
        // var_dump($one_phim);
        $VIEW = "view/public/productdetail.php";
        break;

    case "ghe":
        $title = "Danh sách ghế";
        $VIEW = "view/public/ghe.php";
        break;

    case "pay":
        $title = "Thanh toán";
        $VIEW = "view/public/thanhtoan.php";
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

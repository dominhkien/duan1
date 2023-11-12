<?php
require_once "../model/pdo.php";
require_once "../model/phim/phim.php";

ob_start();
$act = $_GET['act'] ?? "";

switch ($act) {
    case 'home':
        $title = "Trang chủ";
        $VIEW = "public/home.php";
        break;

    case 'listphim':
        $title = "Danh sách phim";
        $list = all_phim();
        $VIEW = "phim/list.php";
        break;

    case 'addphim':
        $title = "Thêm phim";
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            extract($_POST);
            extract($_FILES);
            // var_dump($_POST);
            $nameimg = $anh['name'];
            move_uploaded_file($anh['tmp_name'], "../upload/" . $nameimg);
            add_phim($ten_phim, $nameimg, $mo_ta, $thoi_luong, $danh_gia, $ngay_chieu, $trailer);
            $thong_bao = "Thêm thành công !!";
        }
        $VIEW = "phim/add.php";
        break;

    case 'sphim':
        if (isset($_GET['id_phim']) && ($_GET['id_phim'] > 0)) {
            $one_phim = one_phim($_GET['id_phim']);
        }
        $VIEW = "phim/update.php";
        break;

    case 'suaphim':
        $title = "Sửa phim";
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            extract($_POST);
            $dir = "../upload/";
            if (!empty($_FILES['anh']['name'])) {
                $nameimg = $_FILES['anh']['name'];
                $updateimg = $dir . basename($nameimg);
                move_uploaded_file($_FILES['anh']['tmp_name'], $updateimg);
            } else {
                $updateimg = '';
            }
            update_phim($ten_phim, $updateimg, $mo_ta, $thoi_luong, $danh_gia, $ngay_chieu, $trailer, $id_phim);
        }
        $list = all_phim();
        $VIEW = "phim/list.php";
        break;

    case "xoaphim":
        $title = "Xoá phim";
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            delete_phim($_GET['id_phim']);
        }
        $list = all_phim();
        $VIEW = "phim/list.php";
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

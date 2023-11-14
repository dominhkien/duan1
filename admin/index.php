<?php
require_once "../model/pdo.php";
require_once "../model/phim/phim.php";
require_once "../model/phim/theloai.php";

ob_start();
$act = $_GET['act'] ?? "";

switch ($act) {
    case 'home':
        $title = "Trang chủ";
        $VIEW = "public/home.php";
        break;

    case 'listtheloai':
        $title = "Danh sách loại phim";
        $list_theloai = all_theloai();
        $VIEW = "loaiphim/list.php";
        break;

    case 'addtheloai':
        $title = "Thêm loại phim";
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            extract($_POST);
            add_theloai($ten_loai);
        }
        $VIEW = "loaiphim/add.php";
        break;

    case 'stheloai':
        //var_dump($_GET);
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $one_loai = one_theloai($_GET['idtl']);
        }
        $VIEW = "loaiphim/update.php";
        break;

    case 'updatetheloai':
        $title = "Sửa loại phim";
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            extract($_POST);
            update_theloai($id_loai, $ten_loai);
        }
        $list_theloai = all_theloai();
        $VIEW = "loaiphim/list.php";
        break;

    case 'xoatheloai':
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            delete_theloai($_GET['idtl']);
        }
        $list_theloai = all_theloai();
        $VIEW = "loaiphim/list.php";
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

            $thong_bao = "Thêm thành công !!";
        }
        $VIEW = "phim/add.php";
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

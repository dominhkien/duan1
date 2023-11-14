<?php
require_once "../model/pdo.php";
require_once "../model/phim/loaiphim.php";
require_once "../model/phim/phim.php";
require_once "../model/time/dia_diem.php";
require_once "../model/time/gio_chieu.php";
require_once "../model/time/ngay_chieu.php";
ob_start();
$act = $_GET['act'] ?? "";

switch ($act) {
    case 'home':
        $title = "Trang chủ";
        $VIEW = "public/home.php";
        break;
        // thêm thể loại
    case 'addloaiphim':
        $title = "Thêm Loại Phim";
        if (isset($_POST['them']) && $_POST['them']) {
            $tenloai = $_POST['loaiphim'];
            addtl($tenloai);
            $mess = "Thêm Thành Công";
        }
        $VIEW = "loaiphim/add.php";
        break;
        //danh sách thể loại
    case 'dsloaiphim':
        $title = "Danh Sách Loại Phim";
        $listtl = listtl();
        $VIEW = "loaiphim/list.php";
        break;
        // xoá thể loại
    case 'deletetl':
        if (isset($_GET['id_loai']) && $_GET['id_loai'] > 0) {
            xoatl($_GET['id_loai']);
        }
        $listtl = listtl();
        $VIEW = "loaiphim/list.php";
        break;
        //sửa loại phim
    case 'updatetl':
        if (isset($_GET['id_loai']) && $_GET['id_loai'] > 0) {
            $id_loai = $_GET['id_loai'];
            $one_loai = one_loai($id_loai);
            $VIEW = "loaiphim/update.php";
        }
        break;
        // sửa loại phim
    case 'updateloaiphim':
        $title = "Sửa Loại Phim";
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $tenloai = $_POST['loaiphim'];
            $id_loai = $_POST['id_loai'];
            updatetl($tenloai, $id_loai);
        }
        $listtl = listtl();
        $VIEW = "loaiphim/list.php";
        break;
        // danh sách phim
    case 'listphim':
        $title = "Danh sách phim";
        $list = all_phim();
        $VIEW = "phim/list.php";
        break;
        // thêm phim
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
        //sửa phim
    case 'sphim':
        if (isset($_GET['id_phim']) && ($_GET['id_phim'] > 0)) {
            $one_phim = one_phim($_GET['id_phim']);
        }
        $VIEW = "phim/update.php";
        break;
        // sửa phim
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
        // xoá phim
// địa điểm
    case "xoaphim":
        $title = "Xoá phim";
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            delete_phim($_GET['id_phim']);
        }
        $list = all_phim();
        $VIEW = "phim/list.php";
        break;
    case 'add_location':
        $title = "Thêm Địa Điểm";
        if (isset($_POST['them']) && $_POST['them']) {
            $ten_diadiem = $_POST['ten_diadiem'];
            add_location($ten_diadiem);
            $mess = "Thêm Thành Công";
        }
        $VIEW = "diadiem/add.php";
        break;
    case 'list_location':
        $title = "Danh Sách Địa Điểm";
        $list_location = list_location();
        $VIEW = "diadiem/list.php";
        break;
    case 'delete_location':
        if (isset($_GET['id_diadiem']) && $_GET['id_diadiem'] > 0) {
            delete_location($_GET['id_diadiem']);
        }
        $list_location = list_location();
        $VIEW = "diadiem/list.php";
        break;
    case 'update_location':
        $title = "Sửa Địa Điểm";
        if (isset($_GET['id_diadiem']) && $_GET['id_diadiem'] > 0) {
            $id_diadiem = $_GET['id_diadiem'];
            $one_location = one_location($id_diadiem);
            $VIEW = "diadiem/update.php";
        }

        break;
    case 'update_dd':
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $ten_diadiem = $_POST['ten_diadiem'];
            $id_diadiem = $_POST['id_diadiem'];
            update_location($ten_diadiem, $id_diadiem);
        }
        $list_location = list_location();
        $VIEW = "diadiem/list.php";
        break;
// giờ chiếu
    case 'add_showtime':
        $title = "Thêm Địa Điểm";
        if (isset($_POST['them']) && $_POST['them']) {
            $gio_chieu = $_POST['gio_chieu'];
            add_showtime($gio_chieu);
            $mess = "Thêm Thành Công";
        }
        $VIEW = "giochieu/add.php";
        break;
    case 'list_showtime':
        $title = "Danh Sách Địa Điểm";
        $list_showtime = list_showtime();
        $VIEW = "giochieu/list.php";
        break;
    case 'delete_showtime':
        if (isset($_GET['id_giochieu']) && $_GET['id_giochieu'] > 0) {
            delete_showtime($_GET['id_giochieu']);
        }
        $list_showtime = list_showtime();
        $VIEW = "giochieu/list.php";
        break;
    case 'update_showtime':
        $title = "Sửa Địa Điểm";
        if (isset($_GET['id_giochieu']) && $_GET['id_giochieu'] > 0) {
            $id_giochieu = $_GET['id_giochieu'];
            $one_showtime = one_showtime($id_giochieu);
            $VIEW = "giochieu/update.php";
        }

        break;
    case 'update_time':
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $gio_chieu = $_POST['gio_chieu'];
            $id_giochieu = $_POST['id_giochieu'];
            update_showtime($gio_chieu, $id_giochieu);
        }
        $list_showtime = list_showtime();
        $VIEW = "giochieu/list.php";
        break;
// ngày chiếu
    case 'add_showdate':
        $title = "Thêm Địa Điểm";
        if (isset($_POST['them']) && $_POST['them']) {
            $ngay_chieu = $_POST['ngay_chieu'];
            add_showdate($ngay_chieu);
            $mess = "Thêm Thành Công";
        }
        $VIEW = "ngaychieu/add.php";
        break;
    case 'list_showdate':
        $title = "Danh Sách Địa Điểm";
        $list_showdate = list_showdate();
        $VIEW = "ngaychieu/list.php";
        break;
    case 'delete_showdate':
        if (isset($_GET['id_ngaychieu']) && $_GET['id_ngaychieu'] > 0) {
            delete_showdate($_GET['id_ngaychieu']);
        }
        $list_showdate = list_showdate();
        $VIEW = "ngaychieu/list.php";
        break;
    case 'update_showdate':
        $title = "Sửa Địa Điểm";
        if (isset($_GET['id_ngaychieu']) && $_GET['id_ngaychieu'] > 0) {
            $id_ngaychieu = $_GET['id_ngaychieu'];
            $one_showdate = one_showdate($id_ngaychieu);
            $VIEW = "ngaychieu/update.php";
        }

        break;
    case 'update_ngc':
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $ngay_chieu = $_POST['ngay_chieu'];
            $id_ngaychieu = $_POST['id_ngaychieu'];
            update_showdate($ngay_chieu, $id_ngaychieu);
        }
        $list_showdate = list_showdate();
        $VIEW = "ngaychieu/list.php";
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

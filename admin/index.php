<?php
session_start();
if (!isset($_SESSION['admin']) || empty($_SESSION['admin'])) {
    header('location: ../index.php');
}
require_once "../model/pdo.php";
require_once "../model/phim/phim.php";
require_once "../model/phim/theloai.php";
require_once "../model/phong/phong.php";
require_once "../model/rap/rap.php";
require_once "../model/khuyenmai/khuyenmai.php";
require_once "../model/time/dia_diem.php";
require_once "../model/time/gio_chieu.php";
require_once "../model/time/ngay_chieu.php";
require_once "../model/ghe/ghe.php";
require_once "../model/ve/ve.php";

ob_start();
$act = $_GET['act'] ?? "";
$id_ctg = $_REQUEST['id_ctg'] ?? 0;

$list = all_phim($id_ctg);
$list_theloai = all_theloai();
$list_diadiem = list_location();
$list_rap = list_rap();
$list_phong = list_phong();
$list_ngaychieu = list_showdate();
$list_giochieu = list_showtime();
$list_ve = all_ve();

switch ($act) {
    case 'home':
        $title = "Trang chủ";
        // var_dump($list);
        $VIEW = "public/home.php";
        break;

        // phòng
    case 'list_phong':
        $title = "Danh Sách Loại Phim";
        $list_phong = list_phong();
        $VIEW = "phong/list.php";
        break;

    case 'add_phong':
        $title = "Thêm Phòng";
        if (isset($_POST['them']) && $_POST['them']) {
            $ten_phong = $_POST['ten_phong'];
            $id_phim = $_POST['id_phim'];
            $id_rap = $_POST['id_rap'];
            add_phong($ten_phong, $id_phim, $id_rap);
            $mess = "Thêm Thành Công";
        }
        $VIEW = "phong/add.php";
        break;

    case 'update_phong':
        if (isset($_GET['id_phong']) && $_GET['id_phong'] > 0) {
            $id_phong = $_GET['id_phong'];
            $one_phong = one_phong($id_phong);
            $VIEW = "phong/update.php";
        }
        break;

    case 'sua_phong':
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $ten_phong = $_POST['ten_phong'];
            $id_phong = $_POST['id_phong'];
            $id_phim = $_POST['id_phim'];
            $id_rap = $_POST['id_rap'];
            update_phong($ten_phong, $id_phim, $id_rap, $id_phong);
        }
        $list_phong = list_phong();
        $VIEW = "phong/list.php";
        break;

    case 'delete_phong':
        if (isset($_GET['id_phong']) && $_GET['id_phong'] > 0) {
            $id_phong = $_GET['id_phong'];
            delete_phong($id_phong);
        }
        $list_phong = list_phong();
        $VIEW = "phong/list.php";
        break;

        // rạp
    case 'list_rap':
        $title = "Danh Sách Rap";
        $list_rap = list_rap();
        $VIEW = "rap/list.php";
        break;

    case 'add_rap':
        $title = "Thêm Rạp";
        if (isset($_POST['them']) && $_POST['them']) {
            $ten_rap = $_POST['ten_rap'];
            $id_diadiem = $_POST['id_diadiem'];
            $id_diadiem = $_POST['id_diadiem'];
            add_rap($ten_rap, $id_diadiem);
            $mess = "Thêm Thành Công";
        }
        $VIEW = "rap/add.php";
        break;

    case 'update_rap':
        $title = "Sửa Rạp";
        if (isset($_GET['id_rap']) && $_GET['id_rap'] > 0) {
            $id_rap = $_GET['id_rap'];
            $one_rap = one_rap($id_rap);
            $VIEW = "rap/update.php";
        }
        break;

    case 'sua_rap':
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $ten_rap = $_POST['ten_rap'];
            $id_rap = $_POST['id_rap'];
            $id_diadiem = $_POST['id_diadiem'];
            update_rap($ten_rap, $id_diadiem, $id_rap);
        }
        $list_rap = list_rap();
        $VIEW = "rap/list.php";
        break;

    case 'delete_rap':
        if (isset($_GET['id_rap']) && $_GET['id_rap'] > 0) {
            $id_rap = $_GET['id_rap'];
            delete_rap($id_rap);
        }
        $list_rap = list_rap();
        $VIEW = "rap/list.php";
        break;

        // khuyến mãi 
    case 'list_km':
        $title = "Danh Sách km";
        $list_km = list_km();
        $VIEW = "khuyenmai/list.php";
        break;

    case 'add_km':
        $title = "Thêm Rạp";
        if (isset($_POST['them']) && $_POST['them']) {
            $khuyen_mai = $_POST['khuyen_mai'];
            add_km($khuyen_mai);
            $mess = "Thêm Thành Công";
        }
        $VIEW = "khuyenmai/add.php";
        break;

    case 'update_km':
        $title = "Sửa Rạp";
        if (isset($_GET['id_km']) && $_GET['id_km'] > 0) {
            $id_km = $_GET['id_km'];
            $one_km = one_km($id_km);
            $VIEW = "khuyenmai/update.php";
        }
        break;

    case 'sua_km':
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $khuyen_mai = $_POST['khuyen_mai'];
            $id_km = $_POST['id_km'];
            update_km($khuyen_mai, $id_km);
        }
        $list_km = list_km();
        $VIEW = "khuyenmai/list.php";
        break;

    case 'delete_km':
        if (isset($_GET['id_km']) && $_GET['id_km'] > 0) {
            $id_km = $_GET['id_km'];
            delete_km($id_km);
        }
        $list_km = list_km();
        $VIEW = "khuyenmai/list.php";
        break;

    case 'add_location':
        $title = "Thêm Địa Điểm";
        if (isset($_POST['them']) && $_POST['them']) {
            $ten_diadiem = $_POST['ten_diadiem'];
            $id_phim = $_POST['id_phim'];
            add_location($ten_diadiem, $id_phim);
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
            $id_phim = $_POST['id_phim'];
            update_location($ten_diadiem, $id_phim, $id_diadiem);
        }
        $list_location = list_location();
        $VIEW = "diadiem/list.php";
        break;

        // giờ chiếu
    case 'add_showtime':
        $title = "Thêm Địa Điểm";
        if (isset($_POST['them']) && $_POST['them']) {
            $gio_chieu = $_POST['gio_chieu'];
            $id_ngaychieu = $_POST['id_ngaychieu'];
            $id_phim = $_POST['id_phim'];
            $id_phong = $_POST['id_phong'];
            add_showtime($gio_chieu, $id_ngaychieu, $id_phim, $id_phong);
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
            $id_ngaychieu = $_POST['id_ngaychieu'];
            $id_phim = $_POST['id_phim'];
            $id_phong = $_POST['id_phong'];
            update_showtime($gio_chieu, $id_ngaychieu, $id_phim, $id_phong, $id_giochieu);
        }
        $list_showtime = list_showtime();
        $VIEW = "giochieu/list.php";
        break;

        // ngày chiếu
    case 'add_showdate':
        $title = "Thêm Địa Điểm";
        if (isset($_POST['them']) && $_POST['them']) {
            $ngay_chieu = $_POST['ngay_chieu'];
            $id_phim = $_POST['id_phim'];
            $id_rap = $_POST['id_rap'];
            $id_phong = $_POST['id_phong'];
            add_showdate($ngay_chieu, $id_phim, $id_rap, $id_phong);
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
        $title = "Sửa ngày chiếu";
        if (isset($_GET['id_ngaychieu']) && $_GET['id_ngaychieu'] > 0) {
            $id_ngaychieu = $_GET['id_ngaychieu'];
            $one_showdate = one_showdate($id_ngaychieu);
            $VIEW = "ngaychieu/update.php";
        }
        break;

    case 'update_ngc':
        var_dump($_POST);
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $ngay_chieu = $_POST['ngay_chieu'];
            $id_ngaychieu = $_POST['id_ngaychieu'];
            $id_phim = $_POST['id_phim'];
            $id_rap = $_POST['id_rap'];
            $id_phong = $_POST['id_phong'];
            update_showdate($ngay_chieu, $id_phim, $id_rap, $id_phong, $id_ngaychieu);
        }
        $list_showdate = list_showdate();
        $VIEW = "ngaychieu/list.php";
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
        $VIEW = "phim/list.php";
        break;

    case 'addphim':
        $title = "Thêm phim";
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            extract($_FILES);
            $ten_phim = $_POST['ten_phim'];
            $id_loai = $_POST['id_loai'];
            $mo_ta = $_POST['mo_ta'];
            $id_diadiem = $_POST['id_diadiem'];
            $id_rap = $_POST['id_rap'];
            $thoi_luong = $_POST['thoi_luong'];
            $gia_phim = $_POST['gia_phim'];
            $km_phim = $_POST['km_phim'];
            $trailer = $_POST['trailer'];
            // var_dump($_POST);
            $upload = $anh['name'];
            move_uploaded_file($anh['tmp_name'], "../upload/" . $upload);
            add_phim($upload, $ten_phim, $mo_ta, $thoi_luong, $trailer, $gia_phim, $km_phim, $id_loai, $id_rap, $id_diadiem);

            $thong_bao = "Thêm thành công !!";
        }
        $VIEW = "phim/add.php";
        break;

    case 'sphim':
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $one_phim = one_phim($_GET['id_phim']);
        }
        $VIEW = "phim/update.php";
        break;

    case 'updatephim':
        // var_dump($_POST);
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            extract($_FILES);
            $dir = "../upload/";
            $id_phim = $_POST['id_phim'];
            $ten_phim = $_POST['ten_phim'];
            $id_loai = $_POST['id_loai'];
            $mo_ta = $_POST['mo_ta'];
            $id_diadiem = $_POST['id_diadiem'];
            $id_rap = $_POST['id_rap'];
            $thoi_luong = $_POST['thoi_luong'];
            $gia_phim = $_POST['gia_phim'];
            $km_phim = $_POST['km_phim'];
            $trailer = $_POST['trailer'];

            if (!empty($_FILES['anh']['name'])) {
                $nameimg = $_FILES['anh']['name'];
                $updateimg = $dir . basename($nameimg);
                move_uploaded_file($_FILES['anh']['tmp_name'], $updateimg);
            } else {
                $updateimg = '';
            }

            update_phim($updateimg, $ten_phim, $mo_ta, $thoi_luong, $trailer, $gia_phim, $km_phim, $id_loai, $id_rap, $id_diadiem, $id_phim);
        }
        $list = all_phim();
        $VIEW = "phim/list.php";
        break;

    case 'xoaphim':
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            delete_phim($_GET['id_phim']);
        }
        $list = all_phim();
        $VIEW = "phim/list.php";
        break;

        // ghế 
    case 'list_ghe':
        $title = "Danh Sách Ghế";
        $list_ghe = list_ghe();
        $VIEW = "ghe/list.php";
        break;

    case 'add_ghe':
        $title = "Thêm Ghế";
        if (isset($_POST['them']) && $_POST['them']) {
            $ten_ghe = $_POST['ten_ghe'];
            $gia_ghe = $_POST['gia_ghe'];
            add_ghe($ten_ghe, $gia_ghe);
            $mess = "Thêm Thành Công";
        }
        $VIEW = "ghe/add.php";
        break;

    case 'update_ghe':
        $title = "Sửa Ghe";
        if (isset($_GET['id_ghe']) && $_GET['id_ghe'] > 0) {
            $id_ghe = $_GET['id_ghe'];
            $one_ghe = one_ghe($id_ghe);
            $VIEW = "ghe/update.php";
        }
        break;

    case 'sua_ghe':
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $gia_ghe = $_POST['gia_ghe'];
            $ten_ghe = $_POST['ten_ghe'];
            $id_ghe = $_POST['id_ghe'];
            update_ghe($ten_ghe, $gia_ghe, $id_ghe);
        }
        $list_ghe = list_ghe();
        $VIEW = "ghe/list.php";
        break;

    case 'delete_ghe':
        if (isset($_GET['id_ghe']) && $_GET['id_ghe'] > 0) {
            $id_ghe = $_GET['id_ghe'];
            delete_ghe($id_ghe);
        }
        $list_ghe = list_ghe();
        $VIEW = "ghe/list.php";
        break;

    case 've':
        $title = "Vé";
        $VIEW = "ve/list.php";
        break;

    case 'trangthaive':
        $title = "Trạng thái vé";
        $one_ve = one_ve($_GET['id_ve']);
        $VIEW = "ve/trangthaive.php";
        break;

    case 'capnhattt':
        var_dump($_POST);
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $id_ve = $_POST['id_ve'];
            $trangthai = $_POST['trangthai'];
            if ($trangthai == 1) {
                update_ve($id_ve);
            }
        }
        $VIEW = "ve/list.php";
        break;

    case 'thongkeve':
        $title = "Thống kế vé";
        $da_thanhtoan = ve_da_thanhtoan();
        $ch_thanhtoan = ve_ch_thanhtoan();
        $VIEW = "ve/thongke.php";
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
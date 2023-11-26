<?php
session_start();
require_once "model/pdo.php";
require_once "model/phim/theloai.php";
require_once "model/phim/phim.php";
require_once "model/time/ngay_chieu.php";
require_once "model/time/gio_chieu.php";
require_once "model/time/dia_diem.php";
require_once "model/ghe/ghe.php";
require_once "model/phong/phong.php";
require_once "model/rap/rap.php";
require_once "model/nguoidung/taikhoan.php";
require_once "model/thanhtoan/thanhtoan.php";

ob_start();
$act = $_GET['act'] ?? "";
$id_ctg = $_REQUEST['id_ctg'] ?? 0;
$is_sign_page = in_array($act, ['sign-up', 'sign-in']);

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
        $title = "Chi tiết phim";
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $one_phim = one_phim($_GET['id_phim']);
        }
        // var_dump($one_phim);
        $VIEW = "view/public/productdetail.php";
        break;

    case 'chondiadiem':
        // var_dump($_POST);
        $title = "Chọn địa điểm";
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $id_phim = $_POST['id_phim'];
        }
        $list_diadiem = list_location();
        $VIEW = "view/public/diadiem.php";
        break;

    case 'chonrap':
        // var_dump($_POST);
        $title = "Chọn rạp";
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $id_phim = $_POST['id_phim'];
            $id_diadiem = $_POST['id_diadiem'];
        }
        $list_rap = rap_of_phim($id_diadiem);
        $VIEW = "view/public/rap.php";
        break;

    case 'chonngaychieu':
        // var_dump($_POST);
        $title = "Chọn ngày chiếu";
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $id_phim = $_POST['id_phim'];
            $id_diadiem = $_POST['id_diadiem'];
            $id_rap = $_POST['id_rap'];
        }
        $list_ngay = date_of_rap($id_rap);
        $VIEW = "view/public/chonngaychieu.php";
        break;

    case 'chongiochieu':
        // var_dump($_POST);
        $title = "Chọn giờ chiếu";
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $id_phim = $_POST['id_phim'];
            $id_diadiem = $_POST['id_diadiem'];
            $id_rap = $_POST['id_rap'];
            $id_ngaychieu = $_POST['id_ngaychieu'];
        }
        $list_giochieu = time_of_phim($id_ngaychieu, $id_phim);
        $VIEW = "view/public/chongiochieu.php";
        break;

    case "ghe":
        $title = "Danh sách ghế";
        $list_10ghe = list_10ghe();
        $list_20ghe = list_20ghe();
        $list_30ghe = list_30ghe();
        //$ghe_of_ve = ghe_of_ve();

        $allSeats = array();
        foreach ($ghe_of_ve as $item) {
            if (isset($item["ds_ghe"])) {
                $seats = explode(" ", $item["ds_ghe"]);
                $allSeats = array_merge($allSeats, $seats);
            }
        }

        $seatsString = implode(" ", $allSeats);
        //var_dump($ghe_of_ve);
        // echo $seatsString;

        // var_dump($_SESSION['khach_hang']);
        // var_dump($_POST);
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $id_phim = $_POST['id_phim'];
            $id_diadiem = $_POST['id_diadiem'];
            $id_rap = $_POST['id_rap'];
            $id_ngaychieu = $_POST['id_ngaychieu'];
            $id_giochieu = $_POST['id_giochieu'];
        }
        $tt_phim = one_phim($id_phim);
        $phong_of_gio = phong_of_gio($id_giochieu);
        if (isset($_SESSION['khach_hang'])) {
            $VIEW = "view/public/ghe.php";
        } else {
            $VIEW = "view/public/sign-in.php";
        }
        break;

    case "pay":
        // var_dump($_POST);
        $title = "Chi tiết thanh toán";
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $id_phim = $_POST['id_phim'];
            $id_diadiem = $_POST['id_diadiem'];
            $id_rap = $_POST['id_rap'];
            $id_ngaychieu = $_POST['id_ngaychieu'];
            $id_giochieu = $_POST['id_giochieu'];
            $tong_gia = $_POST['tong_gia'];
            $ten_ghe = isset($_POST['ten_ghe']) ? $_POST['ten_ghe'] : array();

            $datve = array(
                'id_phim' => $id_phim,
                'id_diadiem' => $id_diadiem,
                'id_rap' => $id_rap,
                'id_ngaychieu' => $id_ngaychieu,
                'id_giochieu' => $id_giochieu,
                'tong_gia' => $tong_gia,
                'ten_ghe' => $ten_ghe
            );

            $_SESSION['datve'] = $datve;
        }
        $VIEW = "view/public/thanhtoan.php";
        break;

    case 'thanhtoanok':
        $title = "Thanh toán";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['truc_tiep'])) {
                $truc_tiep = $_POST['truc_tiep'];
            }
            $id_phim = $_POST['id_phim'];
            $id_diadiem = $_POST['id_diadiem'];
            $id_rap = $_POST['id_rap'];
            $id_ngaychieu = $_POST['id_ngaychieu'];
            $id_giochieu = $_POST['id_giochieu'];
            $tong_gia = $_POST['tong_gia'];
        }

        if (isset($truc_tiep)) {
            $ds_ghe = implode(' ', $_SESSION['datve']['ten_ghe']);
            add_ve($ds_ghe, $_SESSION['khach_hang']['id_kh'], $_SESSION['datve']['id_giochieu'], $_POST['tong_gia'], 0);
            unset($_SESSION['datve']);
            $VIEW = "view/public/home.php";
        } else {
            $VIEW = "vnpay_php/index.php";
        }
        // var_dump($_SESSION['datve']);
        // var_dump($_SESSION['khach_hang']);
        break;

    case 'saukhithanhtoan':
        $title = "Ngân hàng";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id_phim = $_POST['id_phim'];
            $id_diadiem = $_POST['id_diadiem'];
            $id_rap = $_POST['id_rap'];
            $id_ngaychieu = $_POST['id_ngaychieu'];
            $id_giochieu = $_POST['id_giochieu'];
            $tong_gia = $_POST['amount'];
        }

        $ds_ghe = implode(' ', $_SESSION['datve']['ten_ghe']);
        add_ve($ds_ghe, $_SESSION['khach_hang']['id_kh'], $_SESSION['datve']['id_giochieu'], $_POST['amount'], 1);
        unset($_SESSION['datve']);
        $VIEW = "vnpay_php/vnpay_create_payment.php";
        break;
    case 'sign-in':
        $title = "Đăng nhập";
        $VIEW = "view/public/sign-in.php";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $pass = $_POST['pass'];
            $email = $_POST['email'];
            $check_kh = check_khach_hang($email, $pass);
            if (is_array($check_kh)) {
                // Kiểm tra quyền của người dùng
                $role = $check_kh['role'];
                if ($role == 1) {
                    // Quyền admin
                    $_SESSION['admin'] = $check_kh;
                    header('location: index.php');
                } else {
                    // Quyền khách hàng
                    $_SESSION['khach_hang'] = $check_kh;
                    header('location: index.php');
                }
            } else {
                $VIEW = "view/public/sign-in.php";
            }
        }
        break;
    case 'sign-up':
        $title = "Đăng Ký";
        $VIEW = "view/public/sign-up.php";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $pass = $_POST['pass'];
            $email = $_POST['email'];
            $checkemail = check_email($email);
            if (!$checkemail) {
                insert_khach_hang($email, $pass);
                $VIEW = "view/public/sign-in.php";
            } else {
                $VIEW = "view/public/sign-up.php";
            }
        }
        break;
    case 'logout':
        dangxuat();
        header('location: index.php');
        break;
    case 'admin':
        header('location: admin/index.php');
        break;
    case 'comment':
          break;
    default:
        $title = "Trang chủ";
        $VIEW = "view/public/home.php";
        break;
}

include "view/layout/header.php";
if (!$is_sign_page) {
    include "view/layout/banner.php";
}
include $VIEW;
include "view/layout/footer.php";
ob_end_flush();
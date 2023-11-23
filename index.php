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

ob_start();
require_once "model/pdo.php";
require_once "model/nguoidung/taikhoan.php";
require_once "model/pdo.php";
require_once "model/phim/theloai.php";
require_once "model/phim/phim.php";
require_once "model/time/ngay_chieu.php";
require_once "model/time/gio_chieu.php";
require_once "model/time/dia_diem.php";
session_start();
$act = $_GET['act'] ?? "";
<<<<<<< HEAD
$id_ctg = $_REQUEST['id_ctg'] ?? 0;
$is_sign_page = in_array($act, ['sign-up', 'sign-in','chondiadiem','chonrap','chonngaychieu','chongiochieu','chonphong']);

$list_loai = all_theloai();
$list_ngc = list_showdate();
$list_phim = all_phim($id_ctg);
$phim_hot = phim_hot();
$phim_3 = phim_3();

=======
$is_sign_page = in_array($act, ['sign-up', 'sign-in']);
$list_loai = all_theloai();
$list_ngc = list_showdate();
$list_phim = all_phim();
$phim_hot = phim_hot();
$phim_3 = phim_3();
>>>>>>> f0245c972e461f1804b0d9400d346c7b8021f48b
switch ($act) {
    case "home":
        $title = "Trang chủ";
        $VIEW = "view/public/home.php";
        break;
    case "listphim":
        $title = "Danh sách phim";
        // $id_ctg = $_REQUEST['id_ctg'] ?? 0;
        // $list_phim = all_phim();
        $VIEW = "view/public/listmovie.php";
        break;

<<<<<<< HEAD
    case "listphim":
        $title = "Danh sách phim";
        $list_phim = all_phim($id_ctg);
        $VIEW = "view/public/listmovie.php";
        break;

=======
>>>>>>> f0245c972e461f1804b0d9400d346c7b8021f48b
    case "ctphim":
        // var_dump($_GET);
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $one_phim = one_phim($_GET['id_phim']);
        }
        // var_dump($one_phim);
        $VIEW = "view/public/productdetail.php";
        break;
<<<<<<< HEAD

    case 'chondiadiem':
        // var_dump($_POST);
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $id_phim = $_POST['id_phim'];
        }
        $list_diadiem = list_location();
        $VIEW = "view/public/diadiem.php";
        break;

    case 'chonrap':
        // var_dump($_POST);
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $id_phim = $_POST['id_phim'];
            $id_diadiem = $_POST['id_diadiem'];
        }
        $list_rap = rap_of_phim($id_diadiem);
        $VIEW = "view/public/rap.php";
        break;

    case 'chonngaychieu':
        // var_dump($_POST);
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
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $id_phim = $_POST['id_phim'];
            $id_diadiem = $_POST['id_diadiem'];
            $id_rap = $_POST['id_rap'];
            $id_ngaychieu = $_POST['id_ngaychieu'];
        }
        // echo $id_ngaychieu;
        // echo $id_phim;
        $list_giochieu = time_of_phim($id_ngaychieu, $id_phim);
        $VIEW = "view/public/chongiochieu.php";
        break;

    case 'chonphong':
        // var_dump($_POST);
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $id_phim = $_POST['id_phim'];
            $id_diadiem = $_POST['id_diadiem'];
            $id_rap = $_POST['id_rap'];
            $id_ngaychieu = $_POST['id_ngaychieu'];
            $id_giochieu = $_POST['id_giochieu'];
        }
        $list_phong = phong_of_phim($id_phim);
        $VIEW = "view/public/chonphong.php";
        break;

    case "ghe":
        $title = "Danh sách ghế";
        $list_10ghe = list_10ghe();
        $list_20ghe = list_20ghe();
        $list_30ghe = list_30ghe();

        // var_dump($_SESSION['khach_hang']);
        // var_dump($_POST);
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $id_phim = $_POST['id_phim'];
            $id_diadiem = $_POST['id_diadiem'];
            $id_rap = $_POST['id_rap'];
            $id_ngaychieu = $_POST['id_ngaychieu'];
            $id_giochieu = $_POST['id_giochieu'];
            $id_phong = $_POST['id_phong'];
        }
        $tt_phim = one_phim($id_phim);
        if (isset($_SESSION['khach_hang'])) {
            $VIEW = "view/public/ghe.php";
        } else {
            $VIEW = "view/public/sign-in.php";
        }
        break;

    case "pay":
        $title = "Thanh toán";
        // var_dump($_POST);
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $id_phim = $_POST['id_phim'];
            $id_diadiem = $_POST['id_diadiem'];
            $id_rap = $_POST['id_rap'];
            $id_ngaychieu = $_POST['id_ngaychieu'];
            $id_giochieu = $_POST['id_giochieu'];
            $id_phong = $_POST['id_phong'];
            $tong_gia = $_POST['tong_gia'];
            $ten_ghe = isset($_POST['ten_ghe']) ? $_POST['ten_ghe'] : array();

            $datve = array(
                'id_phim' => $id_phim,
                'id_diadiem' => $id_diadiem,
                'id_rap' => $id_rap,
                'id_ngaychieu' => $id_ngaychieu,
                'id_giochieu' => $id_giochieu,
                'id_phong' => $id_phong,
                'tong_gia' => $tong_gia,
                'ten_ghe' => $ten_ghe
            );

            $_SESSION['datve'] = $datve;
        }
        $VIEW = "view/public/thanhtoan.php";
        break;

    case 'thanhtoanok':
        var_dump($_POST);
        $VIEW = "view/public/hoanthanhthanhtoan.php";
        break;

=======
>>>>>>> f0245c972e461f1804b0d9400d346c7b8021f48b
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
<<<<<<< HEAD
        dangxuat();
        header('location: index.php');
=======
        // Xử lý đăng xuất bằng cách hủy bỏ session và chuyển hướng
        session_destroy();
        header('location: index.php');
        exit;
>>>>>>> f0245c972e461f1804b0d9400d346c7b8021f48b
        break;
    case 'admin':
        header('location: admin/index.php');
        break;
<<<<<<< HEAD

=======
>>>>>>> f0245c972e461f1804b0d9400d346c7b8021f48b
    default:
        $title = "Trang chủ";
        $VIEW = "view/public/home.php";
        break;
}
ob_end_flush();

include "view/layout/header.php";
<<<<<<< HEAD
=======
// Chỉ include banner nếu không ở trang sign-up hoặc sign-in
>>>>>>> f0245c972e461f1804b0d9400d346c7b8021f48b
if (!$is_sign_page) {
    include "view/layout/banner.php";
}
include $VIEW;
include "view/layout/footer.php";

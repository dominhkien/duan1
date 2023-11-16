<?php
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
$is_sign_page = in_array($act, ['sign-up', 'sign-in']);
$list_loai = all_theloai();
$list_ngc = list_showdate();
$list_phim = all_phim();
$phim_hot = phim_hot();
$phim_3 = phim_3();
switch ($act) {
    case 'home':
        $title = "Trang chủ";
        $VIEW = "view/public/home.php";
        break;
    case "listphim":
        $title = "Danh sách phim";
        // $id_ctg = $_REQUEST['id_ctg'] ?? 0;
        // $list_phim = all_phim();
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
        // Xử lý đăng xuất bằng cách hủy bỏ session và chuyển hướng
        session_destroy();
        header('location: index.php');
        exit;
        break;
    case 'admin':
        header('location: admin/index.php');
        break;
    default:
        $title = "Trang chủ";
        $VIEW = "view/public/home.php";
        break;
}
ob_end_flush();

include "view/layout/header.php";
// Chỉ include banner nếu không ở trang sign-up hoặc sign-in
if (!$is_sign_page) {
    include "view/layout/banner.php";
}
include $VIEW;
include "view/layout/footer.php";

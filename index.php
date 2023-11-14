<?php
ob_start();
require_once "model/pdo.php";
require_once "model/nguoidung/taikhoan.php";
$act = $_GET['act'] ?? "";

switch ($act) {
    case 'home':
        $title = "Trang chủ";
        $VIEW = "view/public/home.php";
        break;
        case 'sign-in':
            $title = "Đăng nhập";
            $VIEW = "view/public/sign-in.php";
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $pass=$_POST['pass'];
                $email=$_POST['email'];
                $check_kh=check_khach_hang($email,$pass);
                if(is_array($check_kh)){
                    $_SESSION['khach_hang']=$check_kh;
                    header('location: index.php');   
                }else{
                    $VIEW = "view/public/sign-in.php";
                }
            }
            break;
        case 'sign-up':
            $title = "Đăng Ký";
            $VIEW = "view/public/sign-up.php";
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $pass=$_POST['pass'];
                            $email=$_POST['email'];
                            $checkemail = check_email($email);
                        if (!$checkemail) {
                            insert_khach_hang($email,$pass);
                            $VIEW = "view/public/home.php";
                        } else {
                            $VIEW = "view/public/sign-up.php";
                        }
                }
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

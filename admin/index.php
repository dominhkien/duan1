<?php
require_once "../model/pdo.php";
require_once "../model/phim/loaiphim.php";
require_once "../model/phim/phim.php";
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
            if(isset($_POST['them']) && $_POST['them']){
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
            if(isset($_GET['id_loai']) && $_GET['id_loai']>0){
                xoatl($_GET['id_loai']);  
            }
            $listtl = listtl();
            $VIEW = "loaiphim/list.php";
            break;
            //sửa loại phim
        case 'updatetl':
            if(isset($_GET['id_loai']) && $_GET['id_loai']>0){
                $id_loai=$_GET['id_loai'];
                $one_loai = one_loai($id_loai);
                $VIEW = "loaiphim/update.php";  
            }
            break;
            // sửa loại phim
        case 'updateloaiphim':
            if ($_SERVER['REQUEST_METHOD'] == "POST"){
                    $tenloai=$_POST['loaiphim'];
                    $id_loai=$_POST['id_loai'];
                    updatetl($tenloai,$id_loai);
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
            case "xoaphim":
                $title = "Xoá phim";
                if ($_SERVER['REQUEST_METHOD'] == "GET") {
                    delete_phim($_GET['id_phim']);
                }
                $list = all_phim();
                $VIEW = "phim/list.php";
                break;
        case 'add_location':
            $title = "Thêm Loại Phim";
            if(isset($_POST['them']) && $_POST['them']){
                $tenloai = $_POST['loaiphim'];
                addtl($tenloai);
                $mess = "Thêm Thành Công";
            }
            $VIEW = "loaiphim/add.php";
            break;
    default:
        $title = "Trang chủ";
        $VIEW = "public/home.php";
        break;
}ob_end_flush();

include "layout/header.php";
include "layout/left.php";
include  $VIEW;
include "layout/footer.php";
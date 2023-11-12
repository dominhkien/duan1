<?php
ob_start();
$act = $_GET['act'] ?? "";

switch ($act) {
    case '':

        break;

    default:

        break;
}
ob_end_flush();

include "layout/header.php";
include "layout/left.php";
include "public/home.php";
include "layout/footer.php";

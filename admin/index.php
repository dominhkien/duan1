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
include "phim/add.php";
include "layout/footer.php";

<?php
function insert_binhluan($id_phim, $noi_dung)
{
    $id_kh = $_SESSION['khach_hang']['id_kh'];
    $date = date('Y-m-d');
    $sql = "insert into binh_luan (noi_dung, id_kh, id_phim, ngay_bl) values ('$noi_dung','$id_kh', '$id_phim', '$date')";
    $result = pdo_execute($sql);
    return $result;
}
?>
<?php
function all_ve()
{
    $sql = "select ve.*, khach_hang.email as email, gio_chieu.gio_chieu as gio_chieu, ngay_chieu.ngay_chieu as ngay_chieu, phim.ten_phim as ten_phim, phong.ten_phong as ten_phong from gio_chieu 
    join ve on ve.id_giochieu = gio_chieu.id_giochieu 
    join khach_hang on khach_hang.id_kh = ve.id_kh 
    join ngay_chieu on ngay_chieu.id_ngaychieu = gio_chieu.id_ngaychieu 
    join phim on phim.id_phim = gio_chieu.id_phim 
    join phong on phong.id_phong = gio_chieu.id_phong";
    $list_ve = pdo_query($sql);
    return $list_ve;
}
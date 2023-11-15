<?php
function all_phim($id_ctg = 0)
{
    $sql = "select phim.*, the_loai.ten_loai as ten_loai, ngay_chieu.ngay_chieu as ngay_chieu, gio_chieu.gio_chieu as gio_chieu, dia_diem.ten_diadiem as dia_diem, rap.ten_rap as ten_rap from phim";

    if ($id_ctg > 0) {
        $sql .= " join the_loai on phim.id_loai = the_loai.id_loai and the_loai.id_loai like '%" . $id_ctg . "%'";
    } else {
        $sql .= " join the_loai on phim.id_loai = the_loai.id_loai";
    }

    $sql .= " join ngay_chieu on phim.id_ngaychieu = ngay_chieu.id_ngaychieu 
    join gio_chieu on phim.id_giochieu = gio_chieu.id_giochieu 
    join dia_diem on phim.id_diadiem = dia_diem.id_diadiem
    join rap on phim.id_rap = rap.id_rap";
    $list = pdo_query($sql);
    return $list;
}

function one_phim($id_phim)
{
    $sql = "select phim.*, the_loai.ten_loai as ten_loai, ngay_chieu.ngay_chieu as ngay_chieu, gio_chieu.gio_chieu as gio_chieu, dia_diem.ten_diadiem as dia_diem, rap.ten_rap as ten_rap from phim 
    join the_loai on phim.id_loai = the_loai.id_loai 
    join ngay_chieu on phim.id_ngaychieu = ngay_chieu.id_ngaychieu 
    join gio_chieu on phim.id_giochieu = gio_chieu.id_giochieu 
    join dia_diem on phim.id_diadiem = dia_diem.id_diadiem
    join rap on phim.id_rap = rap.id_rap
    where phim.id_phim = ?";
    $one = pdo_query_one($sql, $id_phim);
    return $one;
}

function add_phim($anh, $ten_phim, $mo_ta, $thoi_luong, $trailer, $id_loai, $id_ngaychieu, $id_giochieu, $id_rap, $id_diadiem)
{
    $sql = "insert into phim (anh, ten_phim, mo_ta, thoi_luong, trailer, id_loai, id_ngaychieu, id_giochieu, id_rap, id_diadiem) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $anh, $ten_phim, $mo_ta, $thoi_luong, $trailer, $id_loai, $id_ngaychieu, $id_giochieu, $id_rap, $id_diadiem);
}

function update_phim($anh, $ten_phim, $mo_ta, $thoi_luong, $trailer, $id_loai, $id_ngaychieu, $id_giochieu, $id_rap, $id_diadiem, $id_phim)
{
    if (!empty($anh)) {
        $sql = "update phim set anh = ?, ten_phim = ?, mo_ta = ?, thoi_luong = ?, trailer = ?, id_loai = ?, id_ngaychieu = ?, id_giochieu = ?, id_rap = ?, id_diadiem = ? where id_phim = ?";
        pdo_execute($sql, $anh, $ten_phim, $mo_ta, $thoi_luong, $trailer, $id_loai, $id_ngaychieu, $id_giochieu, $id_rap, $id_diadiem, $id_phim);
    } else {
        $sql = "update phim set ten_phim = ?, mo_ta = ?, thoi_luong = ?, trailer = ?, id_loai = ?, id_ngaychieu = ?, id_giochieu = ?, id_rap = ?, id_diadiem = ? where id_phim = ?";
        pdo_execute($sql, $ten_phim, $mo_ta, $thoi_luong, $trailer, $id_loai, $id_ngaychieu, $id_giochieu, $id_rap, $id_diadiem, $id_phim);
    }
}

function delete_phim($id_phim)
{
    $sql = "delete from phim where id_phim = ?";
    pdo_execute($sql, $id_phim);
}

function phim_hot()
{
    $sql = "select phim.*, the_loai.ten_loai as ten_loai, ngay_chieu.ngay_chieu as ngay_chieu, gio_chieu.gio_chieu as gio_chieu, dia_diem.ten_diadiem as dia_diem, rap.ten_rap as ten_rap from phim 
    join the_loai on phim.id_loai = the_loai.id_loai 
    join ngay_chieu on phim.id_ngaychieu = ngay_chieu.id_ngaychieu 
    join gio_chieu on phim.id_giochieu = gio_chieu.id_giochieu 
    join dia_diem on phim.id_diadiem = dia_diem.id_diadiem
    join rap on phim.id_rap = rap.id_rap order by phim.id_phim desc";
    $phim_hot = pdo_query($sql);
    return $phim_hot;
}

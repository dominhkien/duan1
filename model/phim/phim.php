<?php
function all_phim()
{
    $sql = "select * from phim";
    $list = pdo_query($sql);
    return $list;
}

function one_phim($id_phim)
{
    $sql = "select * from phim where id_phim = ?";
    $one = pdo_query_one($sql, $id_phim);
    return $one;
}

function add_phim($anh, $ten_phim, $ten_loai, $mo_ta, $dia_diem, $rap, $ngay_chieu, $gio_chieu, $thoi_luong, $trailer)
{
    $sql = "insert into phim (anh, ten_phim, ten_loai, mo_ta, dia_diem, rap, ngay_chieu, gio_chieu, thoi_luong, trailer) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $anh, $ten_phim, $ten_loai, $mo_ta, $dia_diem, $rap, $ngay_chieu, $gio_chieu, $thoi_luong, $trailer);
}

function update_phim($id_phim, $anh, $ten_phim, $ten_loai, $mo_ta, $dia_diem, $rap, $ngay_chieu, $gio_chieu, $thoi_luong, $trailer)
{
    if (!empty($anh)) {
        $sql = "update phim set anh = ?, ten_phim = ?, ten_loai = ?, mo_ta = ?, dia_diem = ?, rap = ?, ngay_chieu = ?, gio_chieu = ?, thoi_luong = ?, trailer = ? where id_phim = ?";
        pdo_execute($sql, $anh, $ten_phim, $ten_loai, $mo_ta, $dia_diem, $rap, $ngay_chieu, $gio_chieu, $thoi_luong, $trailer, $id_phim);
    } else {
        $sql = "update phim set ten_phim = ?, ten_loai = ?, mo_ta = ?, dia_diem = ?, rap = ?, ngay_chieu = ?, gio_chieu = ?, thoi_luong = ?, trailer = ? where id_phim = ?";
        pdo_execute($sql, $ten_phim, $ten_loai, $mo_ta, $dia_diem, $rap, $ngay_chieu, $gio_chieu, $thoi_luong, $trailer, $id_phim);
    }
}

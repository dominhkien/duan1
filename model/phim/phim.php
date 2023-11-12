<?php
function add_phim($ten_phim, $anh, $mo_ta, $thoi_luong, $danh_gia, $ngay_chieu, $trailer)
{
    $sql = "insert into phim (ten_phim, anh, mo_ta, thoi_luong, danh_gia, ngay_chieu, trailer) values (?,?,?,?,?,?,?)";
    pdo_execute($sql, $ten_phim, $anh, $mo_ta, $thoi_luong, $danh_gia, $ngay_chieu, $trailer);
}

function update_phim($ten_phim, $anh, $mo_ta, $thoi_luong, $danh_gia, $ngay_chieu, $trailer, $id_phim)
{
    if ($anh != "") {
        $sql = "update phim set ten_phim = ?, anh = ?, mo_ta= ?,thoi_luong = ?,	danh_gia = ?,ngay_chieu = ?, trailer = ? where id_phim = ?";
        pdo_execute($sql, $ten_phim, $anh, $mo_ta, $thoi_luong, $danh_gia, $ngay_chieu, $trailer, $id_phim);
    } else {
        $sql = "update phim set ten_phim = ?, mo_ta= ?,thoi_luong = ?,	danh_gia = ?,ngay_chieu = ?, trailer = ? where id_phim = ?";
        pdo_execute($sql, $ten_phim, $mo_ta, $thoi_luong, $danh_gia, $ngay_chieu, $trailer, $id_phim);
    }
}

function delete_phim($id_phim)
{
    $sql = "delete from phim where id_phim = ?";
    pdo_execute($sql, $id_phim);
}

function all_phim()
{
    $sql = "select * from phim";
    $list = pdo_query($sql);
    return $list;
}

function one_phim($id_phim)
{
    $sql = "select * from phim where id_phim = ?";
    $one_phim = pdo_query_one($sql, $id_phim);
    return $one_phim;
}

<?php
// thêm giờ chiếu
function add_showtime($giochieu, $id_ngaychieu)
{
    $sql = "insert into gio_chieu(gio_chieu, id_ngaychieu) value(?, ?)";
    pdo_execute($sql, $giochieu, $id_ngaychieu);
}
//update giờ chiếu
function update_showtime($giochieu, $id_ngaychieu, $id_giochieu)
{
    $sql = "update gio_chieu set gio_chieu = ?, id_ngaychieu = ? where id_giochieu = ?";
    pdo_execute($sql, $giochieu, $id_ngaychieu, $id_giochieu);
}
//xoá giờ chiếu
function delete_showtime($id_giochieu)
{
    $id_dd = $_GET['id_giochieu'];
    $sql = "delete from gio_chieu where id_giochieu =?";
    pdo_execute($sql, $id_giochieu);
}
// list giờ chiếu
function list_showtime()
{
    $sql = "select * from gio_chieu order by id_giochieu desc";
    $list_showtime = pdo_query($sql);
    return $list_showtime;
}
//load 1
function one_showtime($id_giochieu)
{
    $sql = "select * from gio_chieu where id_giochieu =?";
    $one_showtime = pdo_query_one($sql, $id_giochieu);
    return $one_showtime;
}

function time_of_phim($id_phim)
{
    $sql = "select gio_chieu.gio_chieu from gio_chieu where gio_chieu.id_phim = ?";
    $time_of_phim = pdo_query_one($sql, $id_phim);
    return $time_of_phim;
}

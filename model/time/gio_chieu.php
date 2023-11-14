<?php
// thêm giờ chiếu
function add_showtime($giochieu)
{
    $sql = "insert into gio_chieu(gio_chieu) value(?)";
    pdo_execute($sql, $giochieu);
}
//update giờ chiếu
function update_showtime($giochieu, $id_giochieu)
{
    $sql = "update gio_chieu set gio_chieu = ? where id_giochieu = ?";
    pdo_execute($sql, $giochieu, $id_giochieu);
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

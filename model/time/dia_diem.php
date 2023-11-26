<?php
// thêm địa điểm
function add_location($ten_diadiem, $id_phim)
{
    $sql = "insert into dia_diem(ten_diadiem, id_phim) value(?, ?)";
    pdo_execute($sql, $ten_diadiem, $id_phim);
}
//update địa điểm
function update_location($ten_diadiem, $id_diadiem, $id_phim)
{
    $sql = "update dia_diem set ten_diadiem = ?, id_phim = ? where id_diadiem = ?";
    pdo_execute($sql, $ten_diadiem, $id_phim, $id_diadiem);
}
//xoá địa điểm
function delete_location($id_diadiem)
{
    $id_dd = $_GET['id_diadiem'];
    $sql = "delete from dia_diem where id_diadiem =?";
    pdo_execute($sql, $id_diadiem);
}
// list địa điểm
function list_location()
{
    $sql = "select dia_diem.*, phim.ten_phim as ten_phim from dia_diem 
    join phim on dia_diem.id_phim = phim.id_phim";
    $list_location = pdo_query($sql);
    return $list_location;
}
function diadiem_of_phim($id_phim)
{
    $sql = "select * from dia_diem where id_phim = ?";
    $list_location = pdo_query($sql, $id_phim);
    return $list_location;
}
//load 1
function one_location($id_diadiem)
{
    $sql = "select * from dia_diem where id_diadiem =?";
    $one_location = pdo_query_one($sql, $id_diadiem);
    return $one_location;
}
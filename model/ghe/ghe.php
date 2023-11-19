<?php
// thêm ghe
function add_ghe($ten_ghe, $gia_ghe)
{
    $sql = "insert into ghe(ten_ghe,gia_ghe) values(?,?)";
    pdo_execute($sql, $ten_ghe, $gia_ghe);
}
// update ghe
function update_ghe($ten_ghe, $gia_ghe, $id_ghe)
{
    $sql = "update ghe set ten_ghe = ? , gia_ghe = ? where id_ghe = ?";
    pdo_execute($sql, $ten_ghe, $gia_ghe, $id_ghe);
}
// xoá phòng
function delete_ghe($id_ghe)
{
    $sql = "delete from ghe where id_ghe = ?";
    pdo_execute($sql, $id_ghe);
}
// danh sách phòng
function list_ghe()
{
    $sql = "select * from ghe where trang_thai = 1 order by id_ghe asc";
    $list = pdo_query($sql);
    return $list;
}
function list_10ghe()
{
    $sql = "select * from ghe where trang_thai = 1 order by id_ghe asc limit 0,10";
    $list = pdo_query($sql);
    return $list;
}
function list_20ghe()
{
    $sql = "select * from ghe where trang_thai = 1 order by id_ghe asc limit 10,10";
    $list = pdo_query($sql);
    return $list;
}
function list_30ghe()
{
    $sql = "select * from ghe where trang_thai = 1 order by id_ghe asc limit 20,10";
    $list = pdo_query($sql);
    return $list;
}
// select 1 phòng theo id
function one_ghe($id_ghe)
{
    $sql = "select * from ghe where id_ghe = ?";
    $one_ghe = pdo_query_one($sql, $id_ghe);
    return $one_ghe;
}

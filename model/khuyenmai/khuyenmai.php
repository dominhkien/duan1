<?php
// thêm khuyến mãi
function add_km($khuyen_mai)
{
    $sql = "insert into khuyen_mai(khuyen_mai) values(?)";
    pdo_execute($sql, $khuyen_mai);
}
// update khuyến mãi
function update_km($khuyen_mai, $id_km)
{
    $sql = "update khuyen_mai set khuyen_mai = ? where id_km = ?";
    pdo_execute($sql, $khuyen_mai, $id_km);
}
// xoá khuyến mãi
function delete_km($id_km)
{
    $sql = "delete from khuyen_mai where id_km = ?";
    pdo_execute($sql, $id_km);
}
// danh sách khuyến mãi
function list_km()
{
    $sql = "select * from khuyen_mai order by id_km desc";
    $list = pdo_query($sql);
    return $list;
}
// select 1 khuyến mãi theo id
function one_km($id_km)
{
    $sql = "select * from khuyen_mai where id_km = ?";
    $one_km = pdo_query_one($sql, $id_km);
    return $one_km;
}
//model

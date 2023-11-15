<?php
// thêm rạp
function add_rap($ten_rap, $id_diadiem)
{
    $sql = "insert into rap(ten_rap, id_diadiem) values(?, ?)";
    pdo_execute($sql, $ten_rap, $id_diadiem);
}
// update rạp
function update_rap($ten_rap, $id_diadiem, $id_rap)
{
    $sql = "update rap set ten_rap = ?, id_diadiem = ? where id_rap = ?";
    pdo_execute($sql, $ten_rap, $id_diadiem, $id_rap);
}
// xoá rạp
function delete_rap($id_rap)
{
    $sql = "delete from rap where id_rap = ?";
    pdo_execute($sql, $id_rap);
}
// danh sách rạp
function list_rap()
{
    $sql = "select * from rap order by id_rap desc";
    $list = pdo_query($sql);
    return $list;
}
// select 1 rạp theo id
function one_rap($id_rap)
{
    $sql = "select * from rap where id_rap = ?";
    $one_rap = pdo_query_one($sql, $id_rap);
    return $one_rap;
}
//model
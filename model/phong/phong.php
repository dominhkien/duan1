<?php
// thêm phong
function add_phong($ten_phong, $id_phim)
{
    $sql = "insert into phong(ten_phong, id_phim) values(?, ?)";
    pdo_execute($sql, $ten_phong, $id_phim);
}
// update phong
function update_phong($ten_phong, $id_phim, $id_phong)
{
    $sql = "update phong set ten_phong = ?, id_phim = ? where id_phong = ?";
    pdo_execute($sql, $ten_phong, $id_phim, $id_phong);
}
// xoá phòng
function delete_phong($id_phong)
{
    $sql = "delete from phong where id_phong = ?";
    pdo_execute($sql, $id_phong);
}
// danh sách phòng
function list_phong()
{
    $sql = "select * from phong order by id_phong desc";
    $list = pdo_query($sql);
    return $list;
}
// select 1 phòng theo id
function one_phong($id_phong)
{
    $sql = "select * from phong where id_phong = ?";
    $one_phong = pdo_query_one($sql, $id_phong);
    return $one_phong;
}

function phong_of_phim($id_phim)
{
    $sql = "select phong.ten_phong from phong where phong.id_phim = ?";
    $phong_of_phim = pdo_query_one($sql, $id_phim);
    return $phong_of_phim;
}

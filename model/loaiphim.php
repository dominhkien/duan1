<?php
// thêm thể loại
function addtl($tenloai)
{
    $sql = "insert into the_loai(ten_loai) values(?)";
    pdo_execute($sql, $tenloai);
}
// update thể loại
function updatetl($id)
{
    $tenloai = $_POST['tenloai'];
    $id = $_GET['id'];
    $sql = "update the_loai set ten_loai = ? where id = ?";
    pdo_execute($sql, $tenloai, $id);
}
// xoá thể loại
function xoatl($id)
{
    $id = $_GET['id'];
    $sql = "delete from the_loai where id = ?";
    pdo_execute($sql, $id);
}
// danh sách thể loại
function listtl()
{
    $sql = "select * from the_loai order by id desc";
    pdo_query($sql);
}

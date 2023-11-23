<?php
// thêm ngày chiếu
function add_showdate($ngay_chieu, $id_phim)
{
    $sql = "insert into ngay_chieu(ngay_chieu, id_phim) value(?, ?)";
    pdo_execute($sql, $ngay_chieu, $id_phim);
}
//update ngày chiếu
function update_showdate($ngay_chieu, $id_phim, $id_ngaychieu)
{
    $sql = "update ngay_chieu set ngay_chieu = ?, id_phim = ? where id_ngaychieu = ?";
    pdo_execute($sql, $ngay_chieu, $id_phim, $id_ngaychieu);
}
//xoá ngày chiếu
function delete_showdate($id_ngaychieu)
{
    $sql = "delete from ngay_chieu where id_ngaychieu =?";
    pdo_execute($sql, $id_ngaychieu);
}
// list ngày chiếu
function list_showdate()
{
    $sql = "select * from ngay_chieu order by id_ngaychieu desc";
    $list_showdate = pdo_query($sql);
    return $list_showdate;
}
//load 1
function one_showdate($id_ngaychieu)
{
    $sql = "select * from ngay_chieu where id_ngaychieu =?";
    $one_showdate = pdo_query($sql, $id_ngaychieu);
    return $one_showdate;
}

<<<<<<< HEAD
function date_of_rap($id_rap)
{
    $sql = "select * from ngay_chieu where id_rap = ?";
    $date_of_phim = pdo_query($sql, $id_rap);
=======
function date_of_phim($id_phim)
{
    $sql = "select ngay_chieu.ngay_chieu from ngay_chieu where ngay_chieu.id_phim = ?";
    $date_of_phim = pdo_query_one($sql, $id_phim);
>>>>>>> f0245c972e461f1804b0d9400d346c7b8021f48b
    return $date_of_phim;
}
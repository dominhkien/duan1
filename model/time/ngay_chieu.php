<?php
// thêm ngày chiếu
function add_showdate($ngay_chieu){
    $sql = "insert into ngay_chieu(ngay_chieu) value(?)";
    pdo_execute($sql,$ngay_chieu);
}
//update ngày chiếu
function update_showdate($ngay_chieu,$id_ngaychieu){
    $sql ="update ngay_chieu set ngay_chieu = ? where id_ngaychieu = ?";
    pdo_execute($sql,$ngay_chieu,$id_ngaychieu);
}
//xoá ngày chiếu
function delete_showdate($id_ngaychieu){
    $id_dd =$_GET['id_ngaychieu'];
    $sql="delete from ngay_chieu where id_ngaychieu =?";
    pdo_execute($sql,$id_ngaychieu);
}
// list ngày chiếu
function list_showdate(){
    $sql ="select * from ngay_chieu order by id_ngaychieu desc";
    $list_showdate = pdo_query($sql);
    return $list_showdate;
}
//load 1
function one_showdate($id_ngaychieu){
    $sql ="select * from ngay_chieu where id_ngaychieu =?";
    $one_showdate = pdo_query_one($sql,$id_ngaychieu);
    return $one_showdate;
}
?>
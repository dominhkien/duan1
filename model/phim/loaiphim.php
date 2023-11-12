<?php
// thêm thể loại
 function addtl($tenloai){
    $sql = "insert into the_loai(ten_loai) values(?)";
    pdo_execute($sql,$tenloai);
 }
// update thể loại
 function updatetl($tenloai,$id_loai){
    $sql = "update the_loai set ten_loai = ? where id_loai = ?";
    pdo_execute($sql,$tenloai,$id_loai);
 }
// xoá thể loại
 function xoatl($id){
    $id = $_GET['id_loai'];
    $sql = "delete from the_loai where id_loai = ?";
    pdo_execute($sql,$id);
 }
// danh sách thể loại
 function listtl(){
    $sql = "select * from the_loai order by id_loai desc";
    $list = pdo_query($sql);
    return $list ;
 }
 //loading one
 function one_loai($id_loai)
 {
     $sql = "select * from the_loai where id_loai = ?";
     $one_loai = pdo_query_one($sql, $id_loai);
     return $one_loai;
 }
 //model
?>
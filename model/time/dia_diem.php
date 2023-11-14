<?php
// thêm địa điểm
function add_location($ten_diadiem){
    $sql = "insert into dia_diem(ten_diadiem) value(?)";
    pdo_execute($sql,$ten_diadiem);
}
//update địa điểm
function update_location($ten_diadiem,$id_diadiem){
    $sql ="update dia_diem set ten_diadiem = ? where id_diadiem = ?";
    pdo_execute($sql,$ten_diadiem,$id_diadiem);
}
//xoá địa điểm
function delete_location($id_diadiem){
    $id_dd =$_GET['id_diadiem'];
    $sql="delete from dia_diem where id_diadiem =?";
    pdo_execute($sql,$id_diadiem);
}
// list địa điểm
function list_location(){
    $sql ="select * from dia_diem order by id_diadiem desc";
    $list_location = pdo_query($sql);
    return $list_location;
}
//load 1
function one_location($id_diadiem){
    $sql ="select * from dia_diem where id_diadiem =?";
    $one_location = pdo_query_one($sql,$id_diadiem);
    return $one_location;
}
?>
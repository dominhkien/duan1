<?php
function add_phim_loai($id_phim, $id_loai)
{
    $sql = "insert into ct_phim_loaiphim (id_phim, id_loai) values (?, ?)";
    pdo_execute($sql, $id_phim, $id_loai);
}

function all_ct_phim_loai()
{
    $sql = "select * from ct_phim_loaiphim";
    $list = pdo_query($sql);
    return $list;
}

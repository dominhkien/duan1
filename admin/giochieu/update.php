<?php
if (is_array($one_showtime)) {
    extract($one_showtime);
} 
?>
<form action="index.php?act=update_time" method="post" class="form-horizontal">
    <div class="card-body">
        <h4 class="card-title">Sửa Giờ Chiếu</h4>
        <div class="form-group row">
            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Giờ Chiếu</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="gio_chieu" value="<?=$gio_chieu?>"
                    placeholder="Điền Giờ Chiếu">
                <input type="hidden" name="id_giochieu" value="<?=$id_giochieu?>">
            </div>
        </div>
    </div>
    <div class="border-top text-center">
        <div class="card-body">
            <input type="submit" name="capnhap" class="btn btn-outline-success" value="Sửa"></input>
            <a href="index.php?act=list_showtime"><input type="button" class="btn btn-outline-success"
                    value="Danh sách"></a>
        </div>

    </div>
</form>
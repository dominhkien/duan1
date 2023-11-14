<?php
if (is_array($one_km)) {
    extract($one_km);
} 
?>
<form action="index.php?act=sua_km" method="post" class="form-horizontal">
    <div class="card-body">
        <h4 class="card-title">Sửa khuyễn mại</h4>
        <div class="form-group row">
            <label for="fname" class="col-sm-3 text-right control-label col-form-label"> Khuyến mại</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="khuyen_mai" value="<?=$khuyen_mai?>"
                    placeholder="Điền tên phong">
                <input type="hidden" name="id_km" value="<?=$id_km?>">
            </div>
        </div>
    </div>
    <div class="border-top text-center">
        <div class="card-body">
            <input type="submit" name="capnhap" class="btn btn-outline-success" value="Sửa"></input>
            <a href="index.php?act=list_km"><input type="button" class="btn btn-outline-success" value="Danh sách"></a>
        </div>

    </div>
</form>
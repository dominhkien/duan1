<?php
if (is_array($one_showdate)) {
    extract($one_showdate);
} 
?>
<form action="index.php?act=update_ngc" method="post" class="form-horizontal">
                <div class="card-body">
                    <h4 class="card-title">Sửa Ngày Chiếu</h4>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ngày Chiếu</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="ngay_chieu" value="<?=$ngay_chieu?>"  placeholder="Điền Ngày Chiếu">
                            <input type="hidden" name="id_ngaychieu" value="<?=$id_ngaychieu?>">
                        </div>
                    </div>
                </div>
                <div class="border-top text-center">
                    <div class="card-body">
                        <input type="submit" name="capnhap" class="btn btn-outline-success" value="Sửa"></input>
                        <a href="index.php?act=list_showdate"><input type="button"  class="btn btn-outline-success"  value="Danh sách"></a>
                    </div>
                        
                </div>
            </form>
<form action="index.php?act=add_showdate" method="post" class="form-horizontal">
                <div class="card-body">
                    <h4 class="card-title">Thêm Ngày Chiếu</h4>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Địa Điểm</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="ngay_chieu"  placeholder="Điền Ngày Chiếu">
                        </div>
                    </div>
                </div>
                <div class="border-top text-center">
                    <div class="card-body">
                        <input type="submit" name="them" class="btn btn-outline-success" value="Thêm"></input>
                        <a href="index.php?act=list_showdate"><input type="button"  class="btn btn-outline-success"  value="Danh sách"></a>
                    </div>
                </div>
            </form>
            <form action="index.php?act=addphim" class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <h4 class="card-title text-center">Thêm phim</h4>
                    <div class="form-group row">
                        <label class="col-sm-3 text-right control-label col-form-label">Tên phim</label>
                        <div class="col-sm-9">
                            <input name="ten_phim" type="text" class="form-control" placeholder="Tên phim">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 text-right control-label col-form-label">Ảnh</label>
                        <div class="col-sm-9">
                            <input name="anh" type="file" class="form-control" placeholder="Ảnh">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 text-right control-label col-form-label">Mô tả</label>
                        <div class="col-sm-9">
                            <input name="mo_ta" type="Mô tả" class="form-control" placeholder="Mô tả">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 text-right control-label col-form-label">Thời
                            lượng</label>
                        <div class="col-sm-9">
                            <input name="thoi_luong" type="text" class="form-control" placeholder="Thời lượng">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 text-right control-label col-form-label">Đánh giá</label>
                        <div class="col-sm-9">
                            <input name="danh_gia" type="number" class="form-control" placeholder="Đánh giá">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 text-right control-label col-form-label">Ngày
                            chiếu</label>
                        <div class="col-sm-9">
                            <input name="ngay_chieu" type="date" class="form-control" placeholder="Ngày chiếu">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 text-right control-label col-form-label">Trailer</label>
                        <div class="col-sm-9">
                            <input name="trailer" type="text" class="form-control" placeholder="Trailer">
                        </div>
                    </div>
                </div>
                <div class="border-top text-center">
                    <div class="card-body">
                        <button type="submit" class="btn btn-outline-success">Thêm</button>
                        <button type="button" class="btn btn-outline-success">
                            <a class="text-success" href="index.php?act=listphim">Danh sách</a>
                        </button>
                    </div>
                </div>
                <p class="border-top text-center"><?= $thong_bao ?? "" ?></p>
            </form>
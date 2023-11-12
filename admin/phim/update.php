<?php
if (is_array($one_phim)) {
    extract($one_phim);
}
?>

<form action="index.php?act=suaphim" class="form-horizontal" method="post" enctype="multipart/form-data">
    <div class="card-body">
        <h4 class="card-title text-center">Sửa phim</h4>
        <input name="id_phim" value="<?= $id_phim ?>" type="text" class="form-control">
        <div class="form-group row">
            <label class="col-sm-3 text-right control-label col-form-label">Tên phim</label>
            <div class="col-sm-9">
                <input name="ten_phim" value="<?= $ten_phim ?>" type="text" class="form-control" placeholder="Tên phim">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 text-right control-label col-form-label">Ảnh</label>
            <div class="col-sm-9">
                <input name="anh" type="file" class="form-control" placeholder="Ảnh">
                <img style="width: 150px; height: 80px; object-fit: cover;" src="../upload/<?= $anh ?>" alt="">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 text-right control-label col-form-label">Mô tả</label>
            <div class="col-sm-9">
                <input name="mo_ta" value="<?= $mo_ta ?>" type="Mô tả" class="form-control" placeholder="Mô tả">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 text-right control-label col-form-label">Thời
                lượng</label>
            <div class="col-sm-9">
                <input name="thoi_luong" value="<?= $thoi_luong ?>" type="text" class="form-control"
                    placeholder="Thời lượng">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 text-right control-label col-form-label">Đánh giá</label>
            <div class="col-sm-9">
                <input name="danh_gia" value="<?= $danh_gia ?>" type="number" class="form-control"
                    placeholder="Đánh giá">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 text-right control-label col-form-label">Ngày
                chiếu</label>
            <div class="col-sm-9">
                <input name="ngay_chieu" value="<?= $ngay_chieu ?>" type="date" class="form-control"
                    placeholder="Ngày chiếu">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 text-right control-label col-form-label">Trailer</label>
            <div class="col-sm-9">
                <input name="trailer" value="<?= $trailer ?>" type="text" class="form-control" placeholder="Trailer">
            </div>
        </div>
    </div>
    <div class="border-top text-center">
        <div class="card-body">
            <button type="submit" class="btn btn-outline-success">Sửa</button>
            <button type="button" class="btn btn-outline-success">
                <a class="text-success" href="index.php?act=listphim">Danh sách</a>
            </button>
        </div>
    </div>
</form>
<div style="margin-left: 250px;" class="row text-center">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title m-b-0">Danh sách phim</h5>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Tên loại</th>
                            <th scope="col">Mô tả</th>
                            <th scope="col">Địa điểm</th>
                            <th scope="col">Rạp</th>
                            <th scope="col">Ngày chiếu</th>
                            <th scope="col">Giờ chiếu</th>
                            <th scope="col">Thời lượng</th>
                            <th scope="col">Trailer</th>
                            <th>!</th>
                        </tr>
                    </thead>
                    <tbody class="customtable">
                        <?php foreach ($list as $phim) : ?>
                        <?php extract($phim);
                            $newDate = date("d/m/Y", strtotime($ngay_chieu));
                            $xoaphim = "index.php?act=xoaphim&id_phim=$id_phim";
                            $suaphim = "index.php?act=sphim&id_phim=$id_phim";
                            ?>
                        <tr>

                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-outline-success text-center">
        <a style="color: #000000;" href="index.php?act=addphim">Thêm</a>
    </button>
</div>
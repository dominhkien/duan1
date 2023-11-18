<div style="margin-left: 250px;" class="row text-center">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title m-b-0">Danh Sách Giờ Chiếu</h5>
            </div>
            <form action="index.php?act=list_showtime" method="post">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NAME</th>
                                <th scope="col">DATE</th>
                                <th scope="col">FILM</th>
                                <th scope="col">OPTION</th>
                            </tr>
                        </thead>
                        <tbody class="customtable">
                            <tr>
                                <?php foreach ($list_showtime as $time) {
                                    $suatime = "index.php?act=update_showtime&id_giochieu=" . $time['id_giochieu'];
                                    $xoatime = "index.php?act=delete_showtime&id_giochieu=" . $time['id_giochieu'];
                                    echo '<tr>
                            <td>' . $time['id_giochieu'] . '</td>
                            <td>' . $time['gio_chieu'] . '</td>
                            <td>' . $time['id_ngaychieu'] . '</td>
                            <td>' . $time['id_phim'] . '</td>
                            <td><a href="' . $suatime . '"><input type="button"  value="Sửa"></a>
                            <a href="' . $xoatime . '"><input type="button"  value="Xoá"></a></td>
                        </tr>';
                                }
                                ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
    <button type="button" class="btn btn-outline-success text-center">
        <a style="color: #000000;" href="index.php?act=add_showtime">Thêm</a>
    </button>
</div>
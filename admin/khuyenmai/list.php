<div style="margin-left: 250px;" class="row text-center">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title m-b-0">Danh sách khuyễn mãi</h5>
            </div>
            <form action="index.php?act=list_km" method="post">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NAME</th>
                                <th scope="col">OPTION</th>
                            </tr>
                        </thead>
                        <tbody class="customtable">
                            <tr>
                                <?php foreach ($list_km as $km) {
                                    $update = "index.php?act=update_km&id_km=" . $km['id_km'];
                                    $delete = "index.php?act=delete_km&id_km=" . $km['id_km'];
                                    echo '<tr>
                            <td>' . $km['id_km'] . '</td>
                            <td>' . $km['khuyen_mai'] . '%' . '</td>
                            <td><a href="' . $update . '"><input type="button"  value="Sửa"></a>
                            <a href="' . $delete . '"><input type="button"  value="Xoá"></a></td>
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
        <a style="color: #000000;" href="index.php?act=add_km">Thêm</a>
    </button>
</div>
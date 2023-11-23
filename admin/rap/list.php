<div style="margin-left: 250px;" class="row text-center">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title m-b-0">Danh sách Rap</h5>
            </div>
            <form action="index.php?act=list_rap" method="post">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NAME</th>
                                <th scope="col">LOCATION</th>
<<<<<<< HEAD
                                <th scope="col">ROOM</th>
=======
>>>>>>> f0245c972e461f1804b0d9400d346c7b8021f48b
                                <th scope="col">OPTION</th>
                            </tr>
                        </thead>
                        <tbody class="customtable">
                            <tr>
                                <?php foreach ($list_rap as $rap) {
                                    $update = "index.php?act=update_rap&id_rap=" . $rap['id_rap'];
                                    $delete = "index.php?act=delete_rap&id_rap=" . $rap['id_rap'];
                                    echo '<tr>
                            <td>' . $rap['id_rap'] . '</td>
                            <td>' . $rap['ten_rap'] . '</td>
                            <td>' . $rap['id_diadiem'] . '</td>
<<<<<<< HEAD
                            <td>' . $rap['id_phong'] . '</td>
=======
>>>>>>> f0245c972e461f1804b0d9400d346c7b8021f48b
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
        <a style="color: #000000;" href="index.php?act=add_rap">Thêm</a>
    </button>
</div>
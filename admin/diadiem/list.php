<div style="margin-left: 250px;" class="row text-center">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title m-b-0">Danh Sách Địa Điểm</h5>
            </div>
            <form action="index.php?act=list_location" method="post">
<<<<<<< HEAD
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
                                <?php foreach ($list_location as $dd) {
                                    $suadd = "index.php?act=update_location&id_diadiem=" . $dd['id_diadiem'];
                                    $xoadd = "index.php?act=delete_location&id_diadiem=" . $dd['id_diadiem'];
                                    echo '<tr>
                            <td>' . $dd['id_diadiem'] . '</td>
                            <td>' . $dd['ten_diadiem'] . '</td>
                            <td><a href="' . $suadd . '"><input type="button"  value="Sửa"></a>
                            <a href="' . $xoadd . '"><input type="button"  value="Xoá"></a></td>
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
        <a style="color: #000000;" href="index.php?act=add_location">Thêm</a>
    </button>
=======
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th>
                                <label class="customcheckbox m-b-20">
                                    <input type="checkbox" id="mainCheckbox" />
                                    <span class="checkmark"></span>
                                </label>
                            </th>
                            <th scope="col">ID</th>
                            <th scope="col">NAME</th>
                            <th scope="col">OPTION</th>
                        </tr>
                    </thead>
                    <tbody class="customtable">
                        <tr>
                            <?php foreach ($list_location as $dd) {
                            $suadd = "index.php?act=update_location&id_diadiem=".$dd['id_diadiem'];
                            $xoadd = "index.php?act=delete_location&id_diadiem=".$dd['id_diadiem'];
                            echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$dd['id_diadiem'].'</td>
                            <td>'.$dd['ten_diadiem'].'</td>
                            <td><a href="'.$suadd.'"><input type="button"  value="Sửa"></a>
                            <a href="'.$xoadd.'"><input type="button"  value="Xoá"></a></td>
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
</div>
>>>>>>> f0245c972e461f1804b0d9400d346c7b8021f48b
</div>
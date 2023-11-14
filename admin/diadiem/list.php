<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title m-b-0">Danh Sách Địa Điểm</h5>
            </div>
            <form action="index.php?act=dsloaiphim" method="post">
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
                            <?php foreach ($listtl as $theloai) {
                            $suatl = "index.php?act=updatetl&id_loai=".$theloai['id_loai'];
                            $xoatl = "index.php?act=deletetl&id_loai=".$theloai['id_loai'];
                            echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$theloai['id_loai'].'</td>
                            <td>'.$theloai['ten_loai'].'</td>
                            <td><a href="'.$suatl.'"><input type="button"  value="Sửa"></a>
                            <a href="'.$xoatl.'"><input type="button"  value="Xoá"></a></td>
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
</div>
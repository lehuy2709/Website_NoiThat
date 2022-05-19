<h2>Quản lý khách hàng</h2>
<div class="card">
    <div class="card-header">Danh sách khách hàng
    </div>
    <form action="index.php" method="post">
        <div class="table-responsive">
            <table class="table align-items-center table-flush table-borderless">
                <thead>
                    <tr>
                        <th></th>
                        <th>Mã khách hàng</th>
                        <th>Tên tài khoản</th>
                        <th>Email</th>
                        <th>Avatar</th>
                        <th>Vai trò</th>
                        <th colspan="4">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ds_khach_hang as $kh)  :?>
                        <tr>
                        <td><input type="checkbox" name="ma_kh[]" id="" value="<?= $kh['ma_kh'] ?>" class="checkbox"></td>
                        <td><?= $kh['ma_kh'] ?></td>
                        <td><?= $kh['ten_tk'] ?></td>
                        <td><?= $kh['email'] ?></td>
                        <td><img src="<?= $IMAGE_URL .'/'.$kh['avatar']  ?>" alt="" width="50px"></td>
                        <td><?php  if ($kh['vai_tro']==1) { 
                                echo "Admin";
                            }
                            else{
                                echo "User";
                            }?>
                        
                        <td>
                            <a href="?btn_edit=<?=$kh['ma_kh'] ?>" class="btn btn-outline-info">SỬA</a>
                            <a href="?btn_delete=<?=$kh['ma_kh'] ?>" class="btn btn-outline-secondary"
                                onclick="return confirm('Bạn có muốn xóa ?')">XÓA</a>
                        </td>
                    </tr>
                    <?php endforeach; ?> 
                  

                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="6">
                            <button class="btn btn-secondary" id="check-all" type="button">Chọn tất cả</button>
                            <button class="btn btn-secondary" id="clear-all" type="button">Bỏ chọn tất cả</button>
                            <button class="btn btn-secondary" id="btn-delete" name="btn_delete_all"
                                onclick="return confirm('Bạn có muốn xóa ?')">Xóa các mục chọn</button>
                            <a href="<?php echo $ADMIN_URL?>/khach_hang/?btn_add" class="btn btn-success">THÊM</a>
                        </td>

                    </tr>
                </tfoot>
            </table>
        </div>
        <script src="<?php echo $ADMIN_URL?>/assets/js/check_box.js"></script>
    </form>

</div>
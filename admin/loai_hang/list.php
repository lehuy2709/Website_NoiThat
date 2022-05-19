<h2>Quản lý loại hàng</h2>
<div class="card">
    <div class="card-header">Danh sách loại hàng
    </div>
    <form action="index.php" method="post">
        <div class="table-responsive">
            <table class="table align-items-center table-flush table-borderless">
                <thead>
                    <tr>
                        <th></th>
                        <th>Mã loại hàng</th>
                        <th>Tên loại hàng</th>
                        <th colspan="4">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ds_loai_hang as $loai)  :?>
                        <tr>
                        <td><input type="checkbox" name="ma_loai[]" id="" value="<?= $loai['ma_loai'] ?>" class="checkbox"></td>
                        <td><?= $loai['ma_loai'] ?></td>
                        <td><?= $loai['ten_loai'] ?></td>
                        <td>
                            <a href="?btn_edit=<?=$loai['ma_loai'] ?>" class="btn btn-outline-info">SỬA</a>
                            <a href="?btn_delete=<?=$loai['ma_loai'] ?>" class="btn btn-outline-secondary"
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
                            <a href="<?php echo $ADMIN_URL?>/loai_hang/?btn_add" class="btn btn-success">THÊM</a>
                        </td>

                    </tr>
                </tfoot>
            </table>
        </div>
        <script src="<?php echo $ADMIN_URL?>/assets/js/check_box.js"></script>
    </form>

</div>
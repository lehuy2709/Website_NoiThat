<h2>Quản lý Slide</h2>
<div class="card">
    <div class="card-header">Danh sách Slide
    </div>
    <form action="index.php" method="post">
        <div class="table-responsive">
            <table class="table align-items-center table-flush table-borderless">
                <thead>
                    <tr>
                        <th></th>
                        <th>Mã Slide</th>
                        <th>Ảnh Slide</th>
                        <th>Đường dẫn</th>
                        <th>Tên Slide</th>
                        <th colspan="4">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($danh_sach_slide as $sl)  :?>
                        <tr>
                        <td><input type="checkbox" name="ma_slide[]" id="" value="<?= $sl['ma_slide'] ?>" class="checkbox"></td>
                        <td><?= $sl['ma_slide'] ?></td>
                        <td><img src="<?= $IMAGE_URL .'/'.$sl['anh_slide']  ?>" alt="" width="50px"></td>
                        <td><?= $sl['duong_dan'] ?></td>
                        <td><?= $sl['ten_slide'] ?></td>
                        <td>
                            <a href="?btn_edit=<?=$sl['ma_slide'] ?>" class="btn btn-outline-info">SỬA</a>
                            <a href="?btn_delete=<?=$sl['ma_slide'] ?>" class="btn btn-outline-secondary"
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
                            <a href="<?php echo $ADMIN_URL?>/slides/?btn_add" class="btn btn-success">THÊM</a>
                        </td>

                    </tr>
                </tfoot>
            </table>
        </div>
        <script src="<?php echo $ADMIN_URL?>/assets/js/check_box.js"></script>
    </form>

</div>
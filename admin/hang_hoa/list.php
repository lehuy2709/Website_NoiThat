<h2>Quản lý hàng hóa</h2>
<div class="card">
    <div class="card-header">Danh sách hàng hóa
    </div>
    <form action="index.php" method="post">
        <div class="table-responsive">
            <table class="table align-items-center table-flush table-borderless">
                <thead>
                    <tr>
                        <th></th>
                        <th>Mã</th>
                        <th>Tên hàng hóa</th>
                        <th>Ảnh</th>
                        <th>Ngày đăng</th>
                        <th>Đơn giá</th>
                        <th>Giảm giá</th>
                        <th>Lượt xem</th>
                        <th colspan="4">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($ds_hang_hoa as $hh)  :?>
                        <tr>
                        <td><input type="checkbox" name="ma_hh[]" id="" value="<?= $hh['ma_hh'] ?>" class="checkbox"></td>
                        <td><?= $hh['ma_hh'] ?></td>
                        <td><?= $hh['ten_hh'] ?></td>
                        <td><img src="<?= $IMAGE_URL .'/'.$hh['anh_hh']  ?>" alt="" width="50px"></td>
                        <td><?= $hh['ngay_nhap'] ?></td>
                        <td><?=number_format($hh['don_gia'], 0)?> đ</td>
                        <td><?= $hh['giam_gia'] ?>%</td>
                        <td><i class="zmdi zmdi-eye"></i> <?= $hh['luot_xem'] ?></td>
                        <td>
                            <a href="?btn_edit=<?=$hh['ma_hh'] ?>" class="btn btn-outline-info">SỬA</a>
                            <a href="?btn_delete=<?=$hh['ma_hh'] ?>" class="btn btn-outline-secondary"
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
                            <a href="<?php echo $ADMIN_URL?>/hang_hoa/?btn_add" class="btn btn-success">THÊM</a>
                        </td>

                    </tr>
                </tfoot>
            </table>
        </div>
        <script src="<?php echo $ADMIN_URL?>/assets/js/check_box.js"></script>
    </form>

</div>
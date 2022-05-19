<h2>Quản lý bình luận</h2>
<div class="card">
    <div class="card-header">Chi Tiết Bình Luận
    </div>
    <form action="index.php" method="post">
        <div class="table-responsive">
            <table class="table align-items-center table-flush table-borderless">
                <thead>
                    <tr>
                    <th></th>
                    <th>Nội dung</th>
                    <th>Ngày bình luận</th>
                    <th>Người bình luận</th>
                    <th colspan="6">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ds_bl as $bl)  :?>
                        <tr>
                        <td><input type="checkbox" name="ma_bl[]" id="" value="<?= $bl['ma_bl'] ?>" class="checkbox"></td>
                        <td><?= $bl['noi_dung'] ?></td>
                        <td><?= $bl['ngay_bl'] ?></td>
                        <td><?= $bl['ho_ten'] ?></td>
                        
                        
                        <td>
                        <a href="?btn_delete=&ma_bl=<?=$bl['ma_bl']?>&ma_hh=<?=$bl['ma_hh']?>" class="btn btn-outline-info">Xóa</a>
                        </td>
                    </tr>
                    <?php endforeach; ?> 
                  

                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="6">
                            <button class="btn btn-secondary" id="check-all" type="button">Chọn tất cả</button>
                            <button class="btn btn-secondary" id="clear-all" type="button">Bỏ chọn tất cả</button>
                            <button class="btn btn-secondary" id="btn-delete" name="btn_delete"
                                onclick="return confirm('Bạn có muốn xóa ?')">Xóa các mục chọn</button>
                        </td>

                    </tr>
                </tfoot>
            </table>
        </div>
        <script src="<?php echo $ADMIN_URL?>/assets/js/check_box.js"></script>
    </form>

</div>
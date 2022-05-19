<h2>Quản lý bình luận</h2>
<div class="card">
    <div class="card-header">Danh sách bình luận
    </div>
    <form action="index.php" method="post">
        <div class="table-responsive">
            <table class="table align-items-center table-flush table-borderless">
                <thead>
                    <tr>
                    <th>Hàng Hóa</th>
                    <th>Số Bình Luận</th>
                    <th>Mới Nhất</th>
                    <th>Cũ Nhất</th>
                    <th colspan="6">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ds_binh_luan as $bl)  :?>
                        <tr>
                        <td><?= $bl['ten_hh'] ?></td>
                        <td><?= $bl['so_luong'] ?></td>
                        <td><?= $bl['moi_nhat'] ?></td>
                        <td><?= $bl['cu_nhat'] ?></td>
                        <td>
                            <a href="?btn_details=<?=$bl['ma_hh'] ?>" class="btn btn-outline-info">Chi Tiết</a>
                        </td>
                    </tr>
                    <?php endforeach; ?> 
                  

                </tbody>
                <tfoot>
                </tfoot>
            </table>
        </div>
        <script src="<?php echo $ADMIN_URL?>/assets/js/check_box.js"></script>
    </form>

</div>
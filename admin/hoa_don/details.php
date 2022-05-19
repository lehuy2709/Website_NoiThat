<h2>Chi tiết đơn hàng</h2>
<div class="card">
    <div class="card-header">Chi tiết
    </div>
    <form action="index.php" method="post">
        <div class="table-responsive">
            <table class="table align-items-center table-flush table-borderless">
                <thead>
                    <tr>
                    <th>Mã hóa đơn</th>
                    <th>Mã hàng hóa</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá sản phẩm</th>
                    <th colspan="6">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ds_hoa_don as $hd)  :?>
                        <tr>
                        <td><?= $hd['ma_hd'] ?></td>
                        <td><?= $hd['ma_hh'] ?></td>
                        <td><?= $hd['ten_hh'] ?></td>
                        <td><?= $hd['so_luong'] ?></td>
                        <td><?= number_format($hd['don_gia']) ?></td>
                        <td>
                            <a href="<?= $ADMIN_URL?>/hoa_don/" class="btn btn-outline-info">Quay Lại</a>
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
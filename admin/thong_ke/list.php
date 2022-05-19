<h2>Thống kê</h2>
<div class="card">
    <div class="card-header">Thống kê loại hàng
    </div>
    <form action="index.php" method="post">
        <div class="table-responsive">
            <table class="table align-items-center table-flush table-borderless">
                <thead>
                    <tr>
                        <th>Loại hàng</th>
                        <th>Số lượng</th>
                        <th>Giá cao nhất</th>
                        <th>Giá thấp nhất</th>
                        <th>Giá trung bình</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($items as $tk)  :?>
                        <td><?= $tk['ten_loai'] ?></td>
                        <td><?= $tk['so_luong']?></td>
                        <td><?= number_format($tk['gia_max'] ,0) ?></td>
                        <td><?= number_format($tk['gia_min'] ,0)?></td>
                        <td><?=number_format($tk['gia_avg'] ,0) ?></td>
                    </tr>
                    <?php endforeach; ?> 
                  

                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="6">
                            <a href="index.php?btn_chart" class="btn btn-success">Xem biểu đồ</a>
                        </td>

                    </tr>
                </tfoot>
            </table>
        </div>
        <script src="<?php echo $ADMIN_URL?>/assets/js/check_box.js"></script>
    </form>

</div>
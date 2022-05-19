<h2>Quản lý Đơn hàng</h2>
<div class="card">
    <div class="card-header">Danh sách đơn hàng
    </div>
    <form action="index.php" method="post">
        <div class="table-responsive">
            <table class="table align-items-center table-flush table-borderless">
                <thead>
                    <tr>
                    <th>Mã hóa đơn</th>
                    <th>Mã khách hàng</th>
                    <th>Giá đơn hàng</th>
                    <th>Trạng thái</th>
                    <th>Ngày tạo</th>
                    <th>Địa chỉ</th>
                    <th colspan="6">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ds_hoa_don as $hd)  :?>
                        <tr>
                        <td><?= $hd['ma_hd'] ?></td>
                        <td><?= $hd['ma_kh'] ?></td>
                        <td><?= number_format($hd['thanh_tien']) ?></td>
                        <td>
							<a href="xulyhd.php?ma_hd=<?=$hd['ma_hd'] ?>" class="btn btn-xs <?php echo $hd["trang_thai"] == 0 ?'btn-danger' : 'btn-success' ?>" ><?php echo $hd["trang_thai"] == 0 ? 'Chưa xử lí': 'Đã xử lí'?></a>
						</td>
                        <td><?= $hd['ngay_tao'] ?></td>
                        <td><?= $hd['dia_chi'] ?></td>
                        <td>
                            <a href="?btn_details=<?=$hd['ma_hd'] ?>" class="btn btn-outline-info">Chi Tiết</a>
                            <a href="?btn_delete=<?=$hd['ma_hd'] ?>" class="btn btn-outline-secondary"
                                onclick="return confirm('Bạn có muốn xóa ?')">XÓA</a>
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
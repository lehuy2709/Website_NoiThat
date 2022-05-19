<h2>Cài đặt website</h2>
<div class="card">
    <div class="card-header">Cài đặt
    </div>
    <form action="index.php" method="post">
        <div class="table-responsive">
            <table class="table align-items-center table-flush table-borderless">
                <thead>
                    <tr>
                    <th>id</th>
                    <th>Logo</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th colspan="6">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($web_settings as $web)  :?>
                        <tr>
                        <td><?= $web['id'] ?></td>
                        <td><img src="<?= $IMAGE_URL?>/<?= $web["logo"] ?>" alt="" width="50px"></td>
                        <td>0<?= $web["sdt"] ?></td>
                        <td><?= $web['dia_chi'] ?></td>
                        <td>
                            <a href="?btn_edit=<?=$web['id']?>" class="btn btn-outline-info">Sửa</a>
                        </td>
                    </tr>
                    <?php endforeach; ?> 
                  

                </tbody>
            </table>
        </div>
        <script src="<?php echo $ADMIN_URL?>/assets/js/check_box.js"></script>
    </form>

</div>
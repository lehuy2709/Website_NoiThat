<h2>Thêm mới loại hàng</h2>
<div class="card">
<?php if (isset($_SESSION['error'])) { ?>
                <div class="warning alert-danger" style="padding:10px; margin-bottom:10px;">
                <strong>Lỗi !</strong> <?= $_SESSION['error'] ?>
                </div>
                <?php unset($_SESSION['error']) ?>
           <?php } ?>
    <form action="index.php" method="post">
       
        <div class="card">
            <div class="card-body">
                <div class="card-title">Thêm mới</div>
                <hr>
                <div class="form-group">
                    <label for="input-1">Mã Loại</label>
                    <input type="text" class="form-control" id="input-1" placeholder="Auto number" name="ma_loai"
                        readonly>
                </div>
                <div class="form-group">
                    <label for="input-2">Tên loại hàng</label>
                    <input type="text" class="form-control" id="input-2" placeholder="Ví dụ : Sofa " name="ten_loai">
                </div>
                <div class="form-group">
                    <button type="submit" name="btn_insert" class="btn btn-success">Thêm</button>
                    <a href="<?php echo $ADMIN_URL?>/loai_hang" class="btn btn-light">Quay Lại</a>
                </div>
            </div>

        </div>

    </form>

</div>
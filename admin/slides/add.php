<h2>Thêm mới Slide</h2>
<div class="card">
<?php if (isset($_SESSION['error'])) { ?>
                <div class="warning alert-danger" style="padding:10px; margin-bottom:10px;">
                <strong>Lỗi !</strong> <?= $_SESSION['error'] ?>
                </div>
                <?php unset($_SESSION['error']) ?>
           <?php } ?>
    <form action="index.php" method="post" enctype="multipart/form-data">
       
        <div class="card">
            <div class="card-body">
                <div class="card-title">Thêm mới</div>
                <hr>
                <div class="form-group">
                    <label for="input-1">Mã Slide</label>
                    <input type="text" class="form-control" id="input-1" placeholder="Auto number" name="ma_slide"
                        readonly>
                </div>
                <div class="form-group">
                    <label for="input-2">Ảnh Slide</label>
                    <input type="file" class="form-control" id="input-2" placeholder="" name="anh_slide">
                </div>
                <div class="form-group">
                    <label for="input-2">Đường dẫn</label>
                    <input type="text" class="form-control" id="input-2" placeholder="" name="duong_dan">
                </div>
                <div class="form-group">
                    <label for="input-2">Tên Slide</label>
                    <input type="text" class="form-control" id="input-2" placeholder="" name="ten_slide">
                </div>
                <div class="form-group">
                    <button type="submit" name="btn_insert" class="btn btn-success">Thêm</button>
                    <a href="<?php echo $ADMIN_URL?>/slides" class="btn btn-light">Quay Lại</a>
                </div>
            </div>

        </div>

    </form>

</div>
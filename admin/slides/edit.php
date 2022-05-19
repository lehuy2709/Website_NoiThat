<h2>Sửa Slide</h2>
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
                <div class="card-title">Sửa thông tin</div>
                <hr>
                <div class="form-group">
                    <label for="input-1">Mã Slide</label>
                    <input type="text" class="form-control" id="input-1" placeholder="Auto number" name="ma_slide"
                        readonly value="<?=$danh_sach_slide_id['ma_slide'] ?>">
                </div>
                <div class="form-group">
                    <label>Hình Ảnh</label>
                    <br>
                    <img src="<?=$IMAGE_URL . '/' . $danh_sach_slide_id['anh_slide']?>" width="100px" alt="">
                    <input type="file" class="form-control" name="anh_slide" style="margin-top:10px; padding:5px;">
                </div>
                <div class="form-group">
                    <label for="input-2">Đường dẫn</label>
                    <input type="text" class="form-control" id="input-3" placeholder="Ví dụ : Sofa " name="duong_dan" value="<?=$danh_sach_slide_id['duong_dan'] ?>">
                </div>
                <div class="form-group">
                    <label for="input-2">Tên Slide</label>
                    <input type="text" class="form-control" id="input-4" placeholder="" name="ten_slide" value="<?=$danh_sach_slide_id['ten_slide'] ?>">
                </div>
                <div class="form-group">
                    <button type="submit" name="btn_save" class="btn btn-success">Lưu lại</button>
                    <a href="<?php echo $ADMIN_URL?>/slides" class="btn btn-light">Quay Lại Danh Sách</a>
                </div>
            </div>

        </div>

    </form>

</div>
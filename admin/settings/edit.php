<h2>Sửa website</h2>
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
                <div class="card-title">Sửa</div>
                <hr>
                <div class="form-group">
                    <label for="input-1">ID</label>
                    <input type="text" class="form-control" id="input-1" placeholder="Auto number" name="id" 
                        value="<?= $web_settings_id["id"] ?>" readonly>
                </div>
                <div class="form-group">
                    <label>LOGO</label>
                    <br>
                    <img src="<?=$IMAGE_URL . '/' . $web_settings_id['logo']?>" width="100px" alt="">
                    <input type="file" class="form-control" name="logo" style="margin-top:10px; padding:5px;">
                </div>
                <div class="form-group">
                    <label for="input-2">SDT</label>
                    <input type="number" class="form-control" id="input-2" placeholder="" name="sdt" value="<?= $web_settings_id["sdt"] ?>">
                </div>
                <div class="form-group">
                    <label for="input-2">Địa chỉ</label>
                    <input type="text" class="form-control" id="input-2" placeholder="" name="dia_chi" value="<?=  $web_settings_id["dia_chi"]?>">
                </div>
                <div class="form-group">
                    <button type="submit" name="btn_save" class="btn btn-success">Lưu Lại</button>
                    <a href="<?php echo $ADMIN_URL?>/settings" class="btn btn-light">Quay Lại</a>
                </div>
            </div>

        </div>

    </form>

</div>
<h2>Sửa khách hàng</h2>
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
                    <label for="input-1">Mã khách hàng</label>
                    <input type="text" class="form-control" id="input-1" placeholder="Auto number" name="ma_kh"
                        value="<?=$khach_hang_id["ma_kh"] ?>" readonly>

                </div>
                <div class="form-group">
                    <label for="input-2">Tên tài khoản</label>
                    <input type="text" class="form-control" id="input-2" 
                        name="ten_tk" value="<?=$khach_hang_id["ten_tk"] ?>">
                </div>
                <div class="form-group">
                    <label for="input-3">Mật khẩu</label>
                    <input type="password" class="form-control" id="input-3" name="mat_khau"
                        value="<?=$khach_hang_id["mat_khau"] ?>">
                </div>
                <div class="form-group">
                    <label for="input-3">Họ tên</label>
                    <input type="text" class="form-control" id="input-3" name="ho_ten"
                        value="<?=$khach_hang_id["ho_ten"] ?>">
                </div>
                <div class="form-group">
                    <label for="input-3">Email</label>
                    <input type="email" class="form-control" id="input-3" name="email"
                        value="<?=$khach_hang_id["email"] ?>">
                </div>
                <div class="form-group">
                    <label>Avatar</label>
                    <br>
                    <img src="<?=$IMAGE_URL . '/' . $khach_hang_id['avatar']?>" width="100px" alt="">
                    <input type="file" class="form-control" name="avatar" style="margin-top:10px; padding:5px;">
                </div>

                <div class="form-control" style="margin-top:20px; width:50%;">
                    <label>Kích hoạt :</label>
                    <input type="radio" <?= $khach_hang_id['kich_hoat'] == 1 ? "checked" : "" ?> name="kich_hoat" value="1"> Chưa kích hoạt
                    <input type="radio" <?= $khach_hang_id['kich_hoat'] == 0 ? "checked" : "" ?> name="kich_hoat" value="0"> Kích hoạt
                </div>
                <div class="form-control" style="margin-top:20px; width:50%;">
                    <label>Vai trò :</label>
                    <input type="radio" <?= $khach_hang_id['vai_tro'] == 1 ? "checked" : "" ?> name="vai_tro" value="1"> Admin
                    <input type="radio" <?= $khach_hang_id['vai_tro'] == 0 ? "checked" : "" ?> name="vai_tro" value="0"> User
                </div>

                
                
                <div class="form-group">
                    <button type="submit" name="btn_save" class="btn btn-success">Lưu Lại</button>
                    <a href="<?php echo $ADMIN_URL?>/khach_hang" class="btn btn-light">Quay Lại</a>
                </div>
            </div>

        </div>

    </form>

</div>
<h2>Thêm mới khách hàng</h2>
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
                    <label for="input-1">Mã khách hàng</label>
                    <input type="text" class="form-control" id="input-1" placeholder="Auto number" name="ma_kh"
                        readonly>
                </div>
                <div class="form-group">
                    <label for="input-2">Tên tài khoản</label>
                    <input type="text" class="form-control" id="input-2" placeholder="Nhập tên tài khoản "
                        name="ten_tk">
                </div>
                <div class="form-group">
                    <label for="input-3">Mật khẩu</label>
                    <input type="password" class="form-control" id="input-3" placeholder="Nhập mật khẩu "
                        name="mat_khau">
                </div>
                <div class="form-group">
                    <label for="input-2">Họ tên</label>
                    <input type="text" class="form-control" id="input-2" placeholder="Nhập họ và tên "
                        name="ho_ten">
                </div>
                <div class="form-group">
                    <label for="input-2">Email</label>
                    <input type="email" class="form-control" id="input-2" placeholder="Nhập email "
                        name="email">
                </div>
                <div class="form-group">
                    <label for="input-4">Avatar</label>
                    <input type="file" class="form-control" id="input-4" name="avatar" style="padding:5px;">
                </div>

                <div class="form-control" style="margin-top:20px; width:50%;">
                <label>Kích hoạt :</label>
                    <input type="radio" name="kich_hoat" id="" value="1"> Chưa kích hoạt
                    <input type="radio" name="kich_hoat" id="" checked value="0"> Kích hoạt
                </div>

                <div class="form-control" style="margin-top:20px; width:50%;">
                    <label>Vai trò :</label>
                    <input type="radio" name="vai_tro" id="" value="1"> Admin
                    <input type="radio" name="vai_tro" id="" checked value="0">User
                </div>
                
                <div class="form-group">
                    <button type="submit" name="btn_insert" class="btn btn-success">Thêm</button>
                    <a href="<?php echo $ADMIN_URL?>/khach_hang" class="btn btn-light">Quay Lại</a>
                </div>
            </div>

        </div>

    </form>

</div>
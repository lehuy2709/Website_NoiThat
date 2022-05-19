<h2>Sửa hàng hóa</h2>
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
                    <label for="input-1">Mã hàng hóa</label>
                    <input type="text" class="form-control" id="input-1" placeholder="Auto number" name="ma_hh"
                        value="<?=$hang_hoa_id["ma_hh"] ?>" readonly>

                </div>
                <div class="form-group">
                    <label for="input-2">Tên hàng hóa</label>
                    <input type="text" class="form-control" id="input-2" placeholder="Ví dụ : GHẾ ĂN VERONA "
                        name="ten_hh" value="<?=$hang_hoa_id["ten_hh"] ?>">
                </div>
                <div class="form-group">
                    <label for="input-3">Đơn giá</label>
                    <input type="number" class="form-control" id="input-3" name="don_gia"
                        value="<?=$hang_hoa_id["don_gia"] ?>">
                </div>
                <div class="form-group">
                    <label>Hình Ảnh</label>
                    <br>
                    <img src="<?=$IMAGE_URL . '/' . $hang_hoa_id['anh_hh']?>" width="100px" alt="">
                    <input type="file" class="form-control" name="anh_hh" style="margin-top:10px; padding:5px;">
                </div>
                <div class="form-group">
                    <label for="input-5">Ngày nhập</label>
                    <input type="date" class="form-control" id="input-5" placeholder="" name="ngay_nhap"
                        value="<?= $hang_hoa_id["ngay_nhap"] ?>">
                </div>
                <div class="form-group">
                    <label for="input-6">Mô tả</label>
                    <div class="form-group">
                        <textarea name="mo_ta" style="width: 70%;height: 150px;"><?= $hang_hoa_id["mo_ta"]?></textarea>
                    </div>
                </div>
                <div class="form-control" style="margin-top:20px; width:50%;">
                    <label>Hàng đặc biệt :</label>
                    <input type="radio" <?= $hang_hoa_id['dac_biet'] == 1 ? "checked" : "" ?> name="dac_biet" value="1">
                    Đặc biệt
                    <input type="radio" <?= $hang_hoa_id['dac_biet'] == 0 ? "checked" : "" ?> name="dac_biet" value="0">
                    Bình thường
                </div>
                <div class="form-group">
                    <label for="">Số lượt xem</label>
                    <input class="form-control" type="text" name="luot_xem" readonly
                        value="<?= $hang_hoa_id['luot_xem'] ?>">
                </div>
                <div class="form-group">
                    <label>Loại hàng</label>
                    <select class="form-control" name="ma_loai" id="">
                        <?php foreach($ds_loai_hang as $loai_hang): ?>
                        <option <?php if($loai_hang['ma_loai'] == $hang_hoa_id['ma_loai']): ?> selected <?php endif ?>
                            value="<?=$loai_hang['ma_loai']?>"><?=$loai_hang['ten_loai']?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Giảm giá</label>
                    <input type="number" class="form-control" name="giam_gia" value="<?= $hang_hoa_id["giam_gia"] ?>">
                </div>
                <div class="form-group">
                    <button type="submit" name="btn_save" class="btn btn-success">Lưu Lại</button>
                    <a href="<?php echo $ADMIN_URL?>/hang_hoa" class="btn btn-light">Quay Lại</a>
                </div>
            </div>

        </div>

    </form>

</div>
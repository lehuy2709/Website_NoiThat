<h2>Thêm mới hàng hóa</h2>
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
                    <label for="input-1">Mã hàng hóa</label>
                    <input type="text" class="form-control" id="input-1" placeholder="Auto number" name="ma_hh"
                        readonly>
                </div>
                <div class="form-group">
                    <label for="input-2">Tên hàng hóa</label>
                    <input type="text" class="form-control" id="input-2" placeholder="Ví dụ : GHẾ ĂN VERONA "
                        name="ten_hh">
                </div>
                <div class="form-group">
                    <label for="input-3">Đơn giá</label>
                    <input type="number" class="form-control" id="input-3" name="don_gia">
                </div>
                <div class="form-group">
                    <label for="input-4">Hình ảnh</label>
                    <input type="file" class="form-control" id="input-4" name="anh_hh" style="padding:5px;">
                </div>
                <div class="form-group">
                    <label for="input-5">Ngày nhập</label>
                    <input type="date" class="form-control" id="input-5" placeholder="" name="ngay_nhap" >
                </div>
                <div class="form-group">
                    <label for="input-6">Mô tả</label>
                    <div class="form-group">
                        <textarea name="mo_ta" style="width: 70%;height: 150px;"></textarea>
                    </div>
                </div>
                <div class="form-control" style="margin-top:20px; width:50%;">
                    <label>Hàng đặc biệt :</label>
                    <input type="radio" name="dac_biet" id="" value="1"> Đặc biệt
                    <input type="radio" name="dac_biet" id="" checked value="0"> Bình thường
                </div>
                <div class="form-group">
                    <label for="">Số lượt xem</label>
                    <input class="form-control" type="text" name="luot_xem" readonly placeholder="0">
                </div>
                <div class="form-group">
                    <label>Loại hàng</label>
                    <select class="form-control" name="ma_loai" id="" style="width:50%;">
                        <?php foreach ($ds_loai_hang as $loai_hang) { ?>
                        <option value="<?=$loai_hang['ma_loai'] ?>"><?= $loai_hang['ten_loai'] ?>
                        </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Giảm giá</label>
                    <input type="number" class="form-control" name="giam_gia">
                </div>
                <div class="form-group">
                    <button type="submit" name="btn_insert" class="btn btn-success">Thêm</button>
                    <a href="<?php echo $ADMIN_URL?>/hang_hoa" class="btn btn-light">Quay Lại</a>
                </div>
            </div>

        </div>

    </form>

</div>
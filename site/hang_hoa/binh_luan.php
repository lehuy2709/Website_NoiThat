
<div class="comment">
    <div class="comment-title">
        <p class="title-cmt">Bình Luận</p>
    </div>
    <?php foreach ($ds_binh_luan as $bl) : ?>
    <div class="comment-show">
        <div class="inforguest-comment">
            <div class="imgguest-comment">
                <img src="<?= $IMAGE_URL ?>/<?= $bl["avatar"] ?>" alt="" />
            </div>
            <div class="guestname-comment">
                <p class="guest_name">Tên khách hàng : <?= $bl["ho_ten"] ?></p>
                <div class="guestname-comment-time">
                    <p class="cmt_time">Thời gian : <i><?= $bl["ngay_bl"] ?></i> </p>
                </div>
            </div>
        </div>
        <div class="detail-comment">
            <p class="content-cmt">Nội dung : <?= $bl["noi_dung"] ?> </p>
        </div>
    </div>
    <?php endforeach; ?>
    <?php if (!isset($_SESSION["user"])) : ?>
    <div class="login-comment">
        <p>Bạn cần <a href="<?= $SITE_URL?>/tai_khoan/dang_nhap.php">Đăng Nhập</a> để bình Luận</p>
    </div>
    <?php else : ?>
    <div class="fill-comment">
        <form action="<?= $_SERVER["REQUEST_URI"] ?>" method="post">
            <textarea name="noi_dung" id="" cols="50" rows="5"></textarea>
            <div class="btun">
                <button type="submit"><i class="ti-upload"></i> Gửi</button>
            </div>
        </form>
    </div>
    <?php endif; ?>

</div>
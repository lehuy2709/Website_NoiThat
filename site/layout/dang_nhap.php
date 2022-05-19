<ul class="submenu">
    <?php if (isset($_SESSION["user"])) : ?>
        <li><a href="<?= $SITE_URL ?>/tai_khoan/dang_nhap.php?logout">Đăng Xuất</a></li>
        <li><a href="<?= $SITE_URL ?>/tai_khoan/cap_nhat_tk.php">Cập Nhật</a></li>
    <?php else: ?>
        <li><a href="<?= $SITE_URL ?>/tai_khoan/dang_nhap.php">Đăng Nhập</a></li>
        <li><a href="<?= $SITE_URL ?>/tai_khoan/dang_ky.php">Đăng Ký</a></li>
    <?php endif; ?>
</ul>
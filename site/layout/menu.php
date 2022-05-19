<?php require_once './../../dao/loai_hang.php'; ?>
<?php require_once './../../global.php'; ?>
<div class="header-menu">
                <ul class="menu">
                    <li>
                        <b><a href="<?=$SITE_URL?>/trang_chinh/">Trang chủ</a></b>
                    </li>
                    <li>
                        <b><a href="#">Sản phẩm<i class="ti-angle-down"></i></a></b>
                        <ul class="submenus">
                            <?php $loai_hang = loai_hang_get_all(); ?>
                            <?php foreach ($loai_hang as $lh)  :?>
                            <li><a href="<?=$SITE_URL?>/hang_hoa/liet_ke.php?ma_loai=<?=$lh["ma_loai"]?>"><?= $lh["ten_loai"] ?></a></li>
                            <?php endforeach; ?>
                            
                        </ul>
                    </li>
                    <li>
                        <b><a href="#">Tin tức</a></b>
                    </li>
                    <li>
                        <b><a href="#">Liên hệ</a></b>
                    </li>
                    <li>
                        <b><a href="#">Về chúng tôi</a></b>
                    </li>
                </ul>
            </div>
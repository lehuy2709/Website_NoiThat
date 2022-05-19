
<div class="top_10_pr">
    <div class="title_top10" style="text-align: center;">
        <h3>
            <p><b>-- TOP 10 SẢN PHẨM ĐƯỢC YÊU THÍCH --</b></p>
        </h3>
    </div>
    <div class="count">
    <?php 
        require_once "./../../dao/hang_hoa.php";
        $hh_top_10 = hang_hoa_select_top10();
        foreach ($hh_top_10 as $hh) { ?>
            <div class="item">

            <a href="<?= $SITE_URL?>/hang_hoa/chi_tiet.php?ma_hh=<?= $hh["ma_hh"] ?>">
                    <img src="<?=$IMAGE_URL?>/<?=$hh['anh_hh']?>" alt="" class="item_img">
                    <div class="product-name">
                        <span><?=$hh['ten_hh'] ?></span>
                    </div>
                    <div class="price">
                    <?=$hh['don_gia'] ?> <u>đ</u>
                    </div>
                </a>
                <div class="add_cart">
                    <a href="<?= $SITE_URL?>/cart/add.php?id=<?= $hh["ma_hh"] ?>" class="btn btn-dark"><i class="bi bi-cart"></i>Mua nhanh</a>
                    <a href="<?= $SITE_URL?>/hang_hoa/chi_tiet.php?ma_hh=<?= $hh["ma_hh"] ?>" class="btn btn-dark"><i class="ti-eye"></i>Xem chi tiết</a>
                </div>
            </div>
       <?php }
 
        ?>

    








</div>
    </div>

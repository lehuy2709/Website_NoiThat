<?php $hh_cung_loai = hang_hoa_cung_loai($hang_hoa["ma_loai"],$ma_hh); ?>
<p><b>-- SẢN PHẨM LIÊN QUAN --</b></p>
<div class="news-product too">
       
        <?php foreach ($hh_cung_loai as $hh) :?>
            <div class="card-product">
          <!-- như containder -->
          <div class="card">
            <div class="card-img">
              <img src="<?= $IMAGE_URL?>/<?= $hh["anh_hh"] ?>" alt="" />
              <div class="actions">
                <ul>
                  <li>
                    <a href="<?= $SITE_URL?>/hang_hoa/chi_tiet.php?ma_hh=<?= $hh["ma_hh"] ?>"><i class="ti-eye"></i></a>
                    <span>See Details</span>
                  </li>
                  <li>
                    <a href="<?= $SITE_URL?>/cart/add.php?id=<?= $hh["ma_hh"] ?>"><i class="ti-shopping-cart"></i></a>
                    <span>Add To Cart</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="card-content">
              <div class="card-name">
                <h3><?= $hh["ten_hh"] ?></h3>
              </div>
              <div class="card-price">
                <h3><?= $hh["don_gia"] ?> VNĐ</h3>
                <div class="rating">
                  <i class="ti-star" aria-hidden="true"></i>
                  <i class="ti-star" aria-hidden="true"></i>
                  <i class="ti-star" aria-hidden="true"></i>
                  <i class="ti-star" aria-hidden="true"></i>
                  <i class="ti-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        
      </div>
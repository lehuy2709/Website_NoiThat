
<p><b>-- SẢN PHẨM MỚI NHẤT --</b></p>
<div class="card-product"> <!-- như containder -->
                <?php foreach ($item as $prod)  :?>
                    <div class="card">
                        <div class="card-img">
                            <img src="<?= $IMAGE_URL?>/<?= $prod["anh_hh"] ?>" alt="" />
                            <div class="actions">
                                <ul>
                                    <li>
                                        <a href="<?= $SITE_URL?>/hang_hoa/chi_tiet.php?ma_hh=<?= $prod["ma_hh"] ?>"><i class="ti-eye"></i></a>
                                        <span>See Details</span>
                                    </li>
                                    <li>
                                        <a href="<?= $SITE_URL?>/cart/add.php?id=<?= $prod["ma_hh"] ?>"><i class="ti-shopping-cart"></i></a>
                                        <span>Add To Cart</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-name">
                                <h3><?= $prod["ten_hh"] ?></h3>
                            </div>
                            <div class="card-price">
                                <h3><?= number_format($prod["don_gia"],0)?><span> <u style="font-size: 14px;">VNĐ</u></span></h3>
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
               <?php endforeach; ?>
</div>                

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .product-boxs {
            display: none;
        }
    </style>
</head>
<body>
    
</body>
</html>

<p><b>-- <?php if(isset($loai_hang_chi_tiet["ten_loai"])){
    echo $loai_hang_chi_tiet["ten_loai"];
}
else{
    echo "Sản phẩm bạn đang tìm";
} ?> --</b></p>
<div class="card-product"> <!-- như containder -->
                <?php foreach ($items as $prod)  :?>
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
                    
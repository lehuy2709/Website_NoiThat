<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $ROOT_URL?>/content/css/chitiet.css">
</head>

<body>
    <div class="infor-total">

        <div class="left">
            <div class="imgsp">
                <img src="<?=$IMAGE_URL?>/<?=$hang_hoa["anh_hh"]?>" alt="" />
            </div>
            <div class="imgphu">
                <div class="image">
                    <img src="<?= $IMAGE_URL?>/<?=$hang_hoa["anh_hh"]?>" alt="" />
                </div>
                <div class="image">
                    <img src="<?= $IMAGE_URL?>/<?=$hang_hoa["anh_hh"]?> " alt="" />
                </div>
                <div class="image">
                    <img src="<?= $IMAGE_URL?>/<?=$hang_hoa["anh_hh"]?>" alt="" />
                </div>
            </div>
        </div>
        <div class="right">
            <div class="inforsp">
                <div class="tensp">
                    <p class="name_product"><u><?=$hang_hoa["ten_hh"]?></u></p>
                </div>
                <div class="masp">
                    <p class="qr_sp">Mã sản phẩm: <?=$hang_hoa["ma_hh"]?></p>
                </div>
                <div class="giasp">
                    <p class="price_sp"><?=$hang_hoa["don_gia"]?> VND</p>
                </div>
                <div class="motasp">
                    <p class="details_sp">
                        <?=$hang_hoa["mo_ta"]?>
                    </p>
                </div>
                <div class="buttonsp">
                    <button type="submit">
                        <a href="<?= $SITE_URL?>/cart/add.php?id=<?= $hang_hoa["ma_hh"] ?>" style="text-decoration:none; color:aliceblue">
                            <i class="ti-shopping-cart"></i>
                            Thêm vào giỏ hàng
                        </a>
                    </button>
                </div>
            </div>


            <?php require_once "binh_luan.php"; ?>
        </div>
    </div>
    <?php require_once "hang_cung_loai.php"; ?>
</body>

</html>
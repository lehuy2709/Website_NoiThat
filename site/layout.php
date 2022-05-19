<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HQT Furniture</title>
    <link rel="stylesheet" href="<?= $ROOT_URL?>/content/themify-icons/themify-icons.css" />
    <link rel="stylesheet" href="<?= $ROOT_URL?>/content/css/index.css" />
    <link rel="icon" href="<?=$IMAGE_URL?>/HQT Furniture (2).png" />
    <link rel="stylesheet" href="<?= $ROOT_URL?>/content/js/slide.js">

</head>

<body>
    <div class="container" style="font-family: sans-serif">
        <div class="header">
            <div class="header-logo">
            <?php require 'layout/logo.php';?> 
               
            </div>
            <?php require 'layout/menu.php';?>     
            <div class="header-icon">
                <ul class="root">
                    <li>
                        <i class="ti-search" id="search-icon"></i>
                    </li>
                    <li>
                        <a href="../cart/list_cart.php"><i class="ti-shopping-cart"></i></a>
                        
                    </li>
                    <li>
                    <i class="ti-user"><?php if (isset($_SESSION["user"]["ho_ten"])) {
                        echo $_SESSION["user"]["ho_ten"];
                    } ?></i>
                    <?php require 'layout/dang_nhap.php';?>     
                    </li>
                </ul>
            </div>
        </div>
       
        <!-- END HEADER -->
        <?php require 'layout/form_tim_kiem.php';?> 
        <div class="content">

            <?php require 'layout/banner_slide.php';?>   

            <script src="<?= $ROOT_URL?>/content/js/slide.js"></script>
            <!-- END SLIDE -->

            <div class="product-boxs">
                <div class="product-box">
                    <div class="product-box-img">
                        <a href="#"><img src="<?=$IMAGE_URL?>/ban.jpg" alt="" /></a>
                        <div class="product-box-title">
                            <a href="#">
                                <p>Ghế</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="product-box">
                    <div class="product-box-img">
                        <a href="#"><img src="<?=$IMAGE_URL?>/ban.jpg" alt="" /></a>
                        <div class="product-box-title">
                            <a href="#">
                                <p>Bàn</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- END PRODUCT-BOXS -->

            <div class="news-product">
                
                <?php include $VIEW_NAME; ?>
                
            </div>
            <?php require_once "layout/top10.php"; ?>

            <!-- END HOT-PRODUCTS -->

            <hr />
            <div class="news">
                <p class="news-title">TIN TỨC</p>
                <div class="box-news-total">
                    <div class="box-news">
                        <div class="box-news1">
                            <div class="box-news1-img">
                                <img src="<?=$IMAGE_URL?>/newschinh.jpg" alt="" />
                                <div class="news-infor">
                                    <a href="">
                                        <p>7 sai lầm thường gặp khi bố trí đèn trong nhà</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="boxs-news2">
                        <div class="boxs-news2-up">
                            <div class="box-up">
                                <div class="boxs-news2-up-img">
                                    <img src="<?=$IMAGE_URL?>/newsphu1.jpg " alt="" />
                                    <div class="news-infor1">
                                        <a href="">
                                            <p>Các mẫu đèn thả giúp nhà sang trọng hơn</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="box-up">
                                <div class="boxs-news2-up-img">
                                    <img src="<?=$IMAGE_URL?>/newsphu2.jpg " alt="" />
                                    <div class="news-infor1">
                                        <a href="">
                                            <p>5 bước chọn thảm cho phòng khách</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="boxs-news2-up">
                            <div class="box-up">
                                <div class="boxs-news2-up-img">
                                    <img src="<?=$IMAGE_URL?>/newsphu3.png " alt="" />
                                    <div class="news-infor1">
                                        <a href="">
                                        <p>4 bước thiết kế phòng khách nhỏ cho gia đình nhiều đồ</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="box-up">
                                <div class="boxs-news2-up-img">
                                    <img src="<?=$IMAGE_URL?>/newsphu4.jpg " alt="" />
                                    <div class="news-infor1">
                                        <a href="">
                                        <p>4 lưu ý khi chọn sofa cho phòng khách</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- END NEWS -->
        </div>

        <!-- END CONTENT -->

        <?php require 'layout/footer.php';?>

        <!-- END FOOTER -->
    </div>

    <!-- END -->
    <script src="<?= $ROOT_URL?>/content/js/app.js"></script>
</body>

</html>
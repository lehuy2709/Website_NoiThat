<?php 
   require_once "./../../global.php";
   require_once "./../../pdo.php";
   require '../../dao/slide.php';
   $ds_slide = slide_get_all();
   ?>
   <div class="slideshow-container">
    <?php foreach ($ds_slide as $slide) :?>
        <div class="mySlides fade">
    <div class="box-position">
        <div class="title_positon">
            <h3>FURNITURE</h3>
        </div>
        <div class="text-position">
            <span>Nội thất giá rẻ nhất thị trường</span>
        </div>
        <div class="btn-position">
            <button type="button" class="btn"><i class="ti-shopping-cart"></i> <a href="<?=$slide["duong_dan"] ?>" style="text-decoration:none; color:#fff;">SHOP NOW</a> </button>
              
        </div>
    </div>
    <img src="<?=$IMAGE_URL?>/<?= $slide["anh_slide"] ?>" style="width:100%">
</div>
    <?php endforeach; ?>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>


</div>
  
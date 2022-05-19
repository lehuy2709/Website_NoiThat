<?php 
   require_once "./../../global.php";
   require_once "./../../pdo.php";
   require_once '../../dao/settings.php';
   $web_settings_ft = web_get_all();

?>
<div class="footer">
    <?php foreach ($web_settings_ft as $key) { ?>
    <div class="footer-img">
        <a href="#"><img src="<?=$IMAGE_URL?>/<?= $key["logo"] ?>" alt="" /></a>
    </div>
    <div class="footer-infor">
        <p>
            <?= $key["dia_chi"] ?>    
        </p>
        <p>HOTLINE: 0<?= $key["sdt"] ?>  - 0948876345.</p>
    </div>
    <?php } ?>


</div>
<?php 
   require_once "./../../global.php";
   require_once "./../../pdo.php";
   require_once '../../dao/settings.php';
   $web_settings = web_get_all();

?>
    <?php foreach ($web_settings as $key) { ?>
        <a href="<?= $SITE_URL?>/trang_chinh"><img src="<?=$IMAGE_URL?>/<?= $key["logo"] ?>" alt="" /></a>
    <?php } ?>

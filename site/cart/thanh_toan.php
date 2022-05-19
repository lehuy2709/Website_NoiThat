<?php
require '../../pdo.php';
require '../../global.php';
require '../../dao/hang_hoa.php';
require '../../dao/loai_hang.php';
require '../../dao/don_hang.php';
$loai_hang = loai_hang_get_all();
$VIEW_NAME = "../cart/thanh_toan_ui.php";
require '../layout.php';
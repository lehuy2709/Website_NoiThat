<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .card-product {
            display: none;
        }

        .slideshow-container {
            display: none;
        }

        .product-boxs {
            display: none;
        }

        .top_10_pr {
            display: none;
        }

        .news {
            display: none;
        }

        .box-giohang {
            justify-content: center;
            display: flex;
            align-items: center;
        }

        table {
            border: 1px solid black;
            border-collapse: collapse;
        }

        table,
        th,
        td,
        tr {
            padding: 20px;
            border: 1px solid black;
        }

        .details_dh {
            padding: 20px;
        }

        .list_gr li {
            list-style: none;
        }
    </style>
</head>

<body>


    <div class="content">
        <div>
            <h3 style="text-align:center;">
                <?php if (isset($_SESSION['user'])) : ?>
                    <?php if (isset($_SESSION['cart'])) : ?>
                        <marquee behavior="" direction="">THÔNG TIN GIỎ HÀNG</marquee>
                        <?php if (isset($_SESSION['gh'])) : ?>
                            <p class="text-danger"> <?php echo $_SESSION['gh']; ?></p>
                        <?php endif;
                        unset($_SESSION['gh']) ?>
            </h3>
        </div>
        <div class="giohang">
            <div class="box-giohang mb">
                <table>

                    <thead>

                        <tr>
                            <th>Mã sản phẩm</th>
                            <th>Tên SP</th>
                            <th>Ảnh</th>
                            <th>Đơn Giá</th>
                            <th>Số Lượng</th>
                            <th>Thành Tiền</th>
                            <th>Thao Tác</th>
                        </tr>

                    </thead>

                    <tbody>
                        <?php foreach ($_SESSION["cart"] as $key => $value) : ?>



                            <tr>
                                <form action="update.php" method="post">
                                <td><?= $key ?></td>
                                <td><?= $value["name"] ?></td>
                                <td><img src="<?= $IMAGE_URL?>/<?= $value["anh_hh"] ?>" alt="" width="50px"></td>
                                <td><?= number_format($value['don_gia']) ?></td>
                                <td><input type="number" pattern="0-9" name="qty" id="qty" value="<?= $value['qty'] ?>" min="0" class="form-control" style="width: 70px; margin-top:0px "></td>
                                <td><?php $total = ($value['don_gia'] * $value['qty']) ?><?= number_format($total) ?>
                                </td>
                                <td>
                                     <button type="submit">Update</button>
                                    <a href="remove.php?key=<?= $key ?>" style="color:red; text-decoration:none;">Xóa</a>
                                </td>
                                <td><input type="hidden" name="key" value="<?= $key ?>"></td>
                            </tr>
                            </form>
                            <?php $to[] = (($value['don_gia'] * $value['qty']));
                            $tong = array_sum($to);
                            ?>
                        <?php endforeach;  ?>

                    </tbody>

                    <tfoot>


                    </tfoot>
                </table>
         
            </div>

            <div class="details_dh" style="text-align:center;">
                <ul class="list_gr">
                    <li>
                        <h3>Thông tin chi tiết đơn hàng</h3>
                    </li>
                    <li><span>Số Tiền :</span> <?php if (isset($tong)) {
                        echo number_format($tong);
                    } ?> </li>
                    <li><span>Tổng tiền thanh toán
                            :</span><?php if(isset($tong))
                            {
                                $_SESSION['tong'] = $tong;
                           } ?> <?php if(isset($tong)){
                                echo number_format($_SESSION['tong']);
                            } ?> </li>
                </ul>
                <div class="btn_ok">
                    <a class="btn btn-primary" href="thanh_toan.php" style="text-decoration:none;"> Thanh Toán</a>
                    <a class="btn btn-primary" href="../hang_hoa/liet_ke.php" style="text-decoration:none;"> Quay lại
                        mua hàng</a>
                    <a href="../cart/deleteall.php" class="btn btn-danger" style="text-decoration:none;">Xóa tất cả</a>
                </div>
            </div>
        <?php else : ?>
            <p> Giỏ hàng trống!!! </p>
            <a href="../hang_hoa/liet_ke.php" class="btn btn-danger">Mua hàng</a>
        <?php endif; ?>
    <?php else : ?>
        <p style="text-align :center;"> Đăng nhập để mua hàng!!! </p>
        <a href="../tai_khoan/dang_nhap.php" class="btn btn-danger"> Đăng nhập</a>
    <?php endif; ?>

        </div>
    </div>





</body>

</html>
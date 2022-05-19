<?php
extract($_SESSION['user']);
$db = new db();
if (empty($_SESSION["cart"])) {
    echo "<script> alert('Giỏ hàng của bạn đang trống , không thể thanh toán'); window.location.href='$SITE_URL/trang_chinh/'; </script>" ;
    die;
}
else{
    if (array_key_exists("submit", $_REQUEST)) {
        $ngay_tao = date("Y-m-d");
        if (empty($_POST['dia_chi']) ||empty($_POST["email"]) || empty($ho_ten)) {
            $_SESSION["error"] = "các trường không được để trống ";
           $VIEW_NAME = "thanh_toan_ui.php";
        }
        else{
            $data = [
                'ma_kh' => $ma_kh,
                'ho_ten' => $ho_ten,
                'ngay_tao' => $ngay_tao,
                'thanh_tien' => $_SESSION['tong'],
                'trang_thai' => 0,
                'dia_chi' => $_POST['dia_chi'],
                'email' => $_POST["email"]
            ];
            $iddb = $db->insert("hoa_don", $data);
            if ($iddb > 0) {
                foreach ($_SESSION['cart'] as $key => $value) {
                    $data2 = [
                        'ma_hd' => $iddb,
                        'ma_hh' => $key,
                        'so_luong' => $value['qty'],
                        'don_gia' => $value['don_gia'],
                        'ten_hh' => $value["name"]
                    ];
                    $idinsert=$db->insert("hoa_don_chi_tiet",$data2);
                    echo "<script> alert('Đặt hàng thành công , chúng tôi sẽ xác nhận đơn hàng của bạn'); window.location.href='$SITE_URL/trang_chinh/'; </script>" ;
                }
               
            }
            unset($_SESSION["cart"]);
        }
        
    }
}
 



?>
<!DOCTYPE html>
<html>
<head>
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

    .news-product {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 50px;
    }

    .form-dangky {
        line-height: 41px;
    }

    .form-dangky form {
        margin-left: 20px;
    }

    .form-dangky {
        border: 1px solid black;
        border-radius: 7px;
        width: 700px;
        height: auto;
    }

    .chuthich {
        text-align: center;
        margin-top: 5px;
    }

    .form-dangky input {
        width: 450px;
        height: 20px;
        float: right;
        margin-top: 10px;
        margin-right: 60px;
    }

    .form-dangky h3 {
        text-align: center;
        margin-top: 10px;
    }

    .op {
        margin-left: 98px;
    }

    .op2 {
        margin-left: 118px;
    }

    .button {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 8px;
    }

    .button button {
        width: 90px;
        height: 27px;
        color: black;
        background-color: white;
        border: 1px solid black;
        border-radius: 4px;
    }

    .button button[type="reset"] {
        margin-left: 10px;
    }

    .alert-danger {
        color: red;
    }
    .form-dangnhap h3 {
    text-align: center;
    margin-bottom: 10px;
    margin-top: 10px;
}
.form-dangnhap {
    border: 1px solid black;
    border-radius: 7px;
    width: 700px;
    height: auto;
}
.form-field {
    position: relative;
    margin-left: 27px;
    margin-top: 25px;
}
.form-input {
    border: 1px solid rgb(70, 70, 70);
    border-radius: 4px;
    width: 600px;
    height: 40px;
    padding: 0 15px;
    transition: 0.25s ease;
}
.form-label {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    left: 21px;
    user-select: none;
    color: #999;
    pointer-events: none;
    transition: 0.25s ease;
}
.form-input:not(:placeholder-shown) + .form-label,
  .form-input:focus + .form-label {
    top: 0;
    padding: 2px;
    display: inline-block;
    background-color: white;
    color: red;
  }
  button:hover{
      cursor: pointer;
      background-color: red;
  }
    </style>
</head>
<body>
    <div class="form-dangky">
    <?php if (isset($_SESSION['error'])) { ?>
    <div class="warning alert-danger" style="padding:10px; margin-bottom:10px; text-align:center;">
        <strong>Lỗi !</strong> <?= $_SESSION['error'] ?>
    </div>
    <?php unset($_SESSION['error']) ?>
    <?php } ?>
        <h3>Thanh Toán</h3>

        <form action="thanh_toan.php" method="post" enctype="multipart/form-data">
        <input class="form-control" type="hidden" name="ma_kh" value="<?= $ma_kh ?>">
            <div>
                <label for="">Tên tài khoản</label>
                <input type="text" name="ten_tk" value="<?= $ten_tk ?>" readonly>
            </div>
            <div>
                <label for="">Họ và tên</label>
                <input type="text" name="ten_tk" value="<?= $ho_ten ?>">
            </div>

            <div>
                <label for="">Địa chỉ Email</label>
                <input type="text" name="email" value="<?= $email ?>">
            </div>
            <div>
                <label for="">Địa chỉ giao hàng</label>
                <input type="text" name="dia_chi" value="">
            </div>
            <div class="button">
                <button type="submit" name="submit">Đặt hàng</button>
            </div>
        </form>

    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        height: 460px;
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
.alert-danger{
    color: red;
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
        <h3>ĐĂNG KÝ</h3>

        <form action="dang_ky.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="">Tên tài khoản</label>
                <input type="text" name="ten_tk">
            </div>
            <div>
                <label for="">Mật khẩu</label>
                <input type="password" name="mat_khau">
            </div>
            <div>
                <label for="">Họ và tên</label>
                <input type="text" name="ho_ten">
            </div>
            <div>
                <label for="">Email</label>
                <input type="text" name="email">
            </div>
          
            <div>
                <label for="">Avatar</label>
                <input type="file" name="avatar">
            </div>
            <input name="vai_tro" value="0" type="hidden">
            <input name="kich_hoat" value="0" type="hidden">
            <div class="button">
                <button type="submit" name="btn_register">Đăng ký</button>
                <button type="reset">Reset</button>
            </div>
        </form>

        <div class="chuthich">
            <h5>Bạn đã có tài khoản. Vui lòng <a href="<?= $SITE_URL?>/tai_khoan/dang_nhap.php">Đăng Nhập</a></h5>
        </div>
    </div>
</body>

</html>
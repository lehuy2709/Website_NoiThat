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
    </style>
</head>

<body>

    <div class="form-dangnhap">
    <?php if (isset($_SESSION['error'])) { ?>
    <div class="warning alert-danger" style="padding:10px; margin-bottom:10px; text-align:center;">
        <strong>Lỗi !</strong> <?= $_SESSION['error'] ?>
    </div>
    <?php unset($_SESSION['error']) ?>
    <?php } ?>
        <h3>ĐĂNG NHẬP</h3>

        <form action="dang_nhap.php" method="post">
            <div class="form-field">
                <input class="form-input i1" type="text" name="ten_tk" value="<?php echo $_COOKIE["ten_tk"] = isset($_COOKIE["ten_tk"]) ? $_COOKIE["ten_tk"] : "" ?>">
                <label class="form-label" for="">Tên tài khoản</label>
            </div>
            <div class="form-field">
                <input class="form-input i2" type="password" name="mat_khau" placeholder="" value="<?php echo $_COOKIE["mat_khau"] = isset($_COOKIE["mat_khau"]) ? $_COOKIE["mat_khau"] : "" ?>">
                <label class="form-label" for="">Mật khẩu</label>
            </div>
            <div class="form-field">
                <label class="">
                    <input name="ghi_nho" type="checkbox">
                    Ghi nhớ tài khoản?
                </label>
            </div>
            <div class="button">
                <button type="submit" name="btn_login">Đăng nhập</button>
                <button type="reset">Reset</button>
            </div>
            
        </form>

        <div class="chuthich">
            <legend>hoặc</legend>
            <h5>Bạn chưa có tài khoản. Vui lòng <a href="<?= $SITE_URL?>/tai_khoan/dang_ky.php">Đăng Ký</a></h5>
            <h5><a href="#" class="qmk">Quên mật khẩu</a> <a href="#" class="dmk">Đổi mật khẩu</a></h5>

        </div>
    </div>
</body>

</html>
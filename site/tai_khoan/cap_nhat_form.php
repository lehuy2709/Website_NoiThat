<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
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
    .content {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 50px;
}
.form-capnhat {
    border: 1px solid black;
    border-radius: 7px;
    width: 700px;
    height: 450px;
    margin-bottom: 50px;
}
.form-capnhat h3 {
    text-align: center;
    margin-bottom: 10px;
    margin-top: 10px;
}
.form-fields {
    position: relative;
    margin-left: 27px;
    margin-top: 25px;
}
.form-inputs {
    border: 1px solid rgb(70, 70, 70);
    border-radius: 4px;
    width: 600px;
    height: 40px;
    padding: 0 20px;
    transition: 0.25s ease;
}
.form-labels {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    left: 21px;
    user-select: none;
    color: #999;
    pointer-events: none;
    transition: 0.25s ease;
}
.button {
    padding-bottom: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 8px;
    /* padding: 20px; */
}
.button button {
    width: 90px;
    height: 27px;
    color: black;
    background-color: white;
    border: 1px solid black;
    border-radius: 4px;
    margin-top: 20px;
    /* padding: 20px; */
}
.f5 {
    margin-top: 20px;
    text-align: center;
    border: none;
}
.form-inputs:not(:placeholder-shown) + .form-labels, .form-inputs:focus + .form-labels {
    top: 0;
    padding: 5px;
    display: inline-block;
    background-color: white;
    color: red;
}
.alert-danger{
    color: red;
}

</style>

<body>
    <div class="form-capnhat">
    <?php if (isset($_SESSION['error'])) { ?>
    <div class="warning alert-danger" style="padding:10px; margin-bottom:10px; text-align:center;">
        <strong>Lỗi !</strong> <?= $_SESSION['error'] ?>
    </div>
    <?php unset($_SESSION['error']) ?>
    <?php } ?>
        <h3>Cập nhật tài khoản</h3>

        <form action="cap_nhat_tk.php" method="post" enctype="multipart/form-data">
        <div class="form-fields">
                <input class="form-inputs f1" type="text" name="ma_kh" placeholder="" value="<?= $ma_kh ?>" readonly />
                <label class="form-labels" for="">Mã khách hàng</label>
            </div>
            <div class="form-fields">
                <input class="form-inputs f1" type="text" name="ten_tk" placeholder="" value="<?= $ten_tk ?>" readonly />
                <label class="form-labels" for="">Tên tài khoản</label>
            </div>
            <div class="form-fields">
                <input class="form-inputs f2" type="password" name="mat_khau" placeholder="" value="<?=$mat_khau ?>" />
                <label class="form-labels" for="">Mật khẩu</label>
            </div>
            <div class="form-fields">
                <input class="form-inputs f2" type="text" name="ho_ten" placeholder="" value="<?= $ho_ten ?>" />
                <label class="form-labels" for="">Họ Tên</label>
            </div>
            <div class="form-fields">
                <input class="form-inputs f4" type="email" name="email" placeholder="" value="<?= $email ?>" />
                <label class="form-labels" for="">Email</label>
            </div>
            <div class="form-fields">
                <input class="form-inputs f5" type="file" name="avatar" placeholder=" " />
                <label class="form-labels img" for="">Avatar</label>
            </div>
            <div class="button">
                <button type="submit" name="update">Cập Nhật</button>
                <button type="submit">Hủy bỏ</button>
                <button type="reset">Reset</button>
            </div>
            <input name="vai_tro" value="<?=$vai_tro?>" type="hidden">
            <input name="kich_hoat" value="<?=$kich_hoat?>" type="hidden">
            <input name="hinh" value="<?=$hinh?>" type="hidden">
        </form>
    </div>
</body>

</html>
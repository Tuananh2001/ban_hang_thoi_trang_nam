<?php 
include ("admin/config/config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thời trang nam</title>
    <link rel="stylesheet" href="./access/css/style.css" />
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.css"
        integrity="sha512-uHuCigcmv3ByTqBQQEwngXWk7E/NaPYP+CFglpkXPnRQbSubJmEENgh+itRDYbWV0fUZmUz7fD/+JDdeQFD5+A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"
        integrity="sha512-nKZDK+ztK6Ug+2B6DZx+QtgeyAmo9YThZob8O3xgjqhw2IVQdAITFasl/jqbyDwclMkLXFOZRiytnUrXk/PM6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"
        integrity="sha512-lteuRD+aUENrZPTXWFRPTBcDDxIGWe5uu0apPEn+3ZKYDwDaEErIK9rvR0QzUGmUQ55KFE2RqGTVoZsKctGMVw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.js"
        integrity="sha512-GkPcugMfi6qlxrYTRUH4EwK4aFTB35tnKLhUXGLBc3x4jcch2bcS7NHb9IxyM0HYykF6rJpGaIJh8yifTe1Ctw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>
    <?php 
    include('./header.php') ;
    $user = (isset($_SESSION['khachhang'])) ? $_SESSION['khachhang']:[];
    
    if(isset($_POST['dh'])) 
    {
        
        
        $tenkh = $_POST['ten'];
        $dc = $_POST['diachi'];
        $sdt = $_POST['sdt'];
        $email = $_POST['email'];
        
        $sqlkh = "INSERT INTO  khachhang(tenkh, sdt, gioitinh, ngaysinh, diachi, Email) VALUES('$tenkh','$sdt','nam','2001-07-2','$dc', '$email')";
        $resultkh = $conn->query($sqlkh);
        if($resultkh == TRUE){
            // echo '<script>alert("Thêm mới thành công!");</script>';
            // echo '<script>window.location="shopingcart.php"</script>';
            session_destroy();
        }else{
            echo "Error:". $sqlkh . "</br>". $conn->error;
        }
        
        include ("./oder.php");
    }
    if(isset($_POST['payUrl'])) 
    {
            
            $tenkh1 = $_POST['ten'];
            $dc1 = $_POST['diachi'];
            $sdt1 = $_POST['sdt'];
            $email1 = $_POST['email'];
             $sqlkh1 = "INSERT INTO  khachhang(tenkh, sdt, gioitinh, ngaysinh, diachi, Email) VALUES('$tenkh1','$sdt1','nam','2001-07-2','$dc1', '$email1')";
             $resultkh1 = $conn->query($sqlkh1);
             if($resultkh1 == TRUE){
                 // echo '<script>alert("Thêm mới thành công!");</script>';
                 echo '<script>window.location="payment_vnpay.php"</script>';
                 session_destroy();
             }else{
                 echo "Error:". $sqlkh1 . "</br>". $conn->error;
             }
        include ("./oder.php");
    }
    ?>
    <section class="breadcrumb__option">
        <div class="container">
            <div class="row">
                <div class="breadcrumb__header">
                    <div class="breadcrumb__header__text">
                        <h4>Thanh toán</h4>
                        <div class="breadcrumb__header__link">
                            <a href="./index.php">Home</a>
                            <a href="./shop.php">Shop</a>
                            <span>Thanh toán</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="checkout">
        <div class="container">
            <div class="checkout__form" style = "position: relative;">
                <form action="" method="POST" id = "form-1" enctype="application/x-www-form-urlencoded">
                    <div class="row" style="align-items: start;">
                        <div class="checkout__left">
                            <h6 class="coupon__code">
                                <i class="fa-solid fa-tag"></i> Có phiếu giảm giá? <a href="#"> Nhấn vào đây</a>
                                để nhập mã của bạn
                            </h6>
                            <h6 class="checkout__title">Billing Details</h6>
                            <div class="row">
                                <div class="checkout__input__left">
                                    <div class="checkout__input">
                                        <p>Tên<span>*</span></p>
                                        <input id="name" name="ten" type="text" fdprocessedid="ytf08a">
                                        <span style="color: red;font-size: 14px;" class="form-message"></span>
                                    </div>
                                </div>
                                <div class="checkout__input__right">
                                    <div class="checkout__input">
                                        <p>Họ<span>*</span></p>
                                        <input id="first" name="ho" type="text" fdprocessedid="4xch4j">
                                        <span style="color: red;font-size: 14px;" class="form-message"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Quốc gia<span>*</span></p>
                                <input id="country" name="quocgia" type="text" fdprocessedid="4xch4j">
                                <span style="color: red;font-size: 14px;" class="form-message"></span>
                            </div>
                            <div class="checkout__input">
                                <p>Địa chỉ<span>*</span></p>
                                <input id="adress" name="diachi" type="text" fdprocessedid="4xch4j">
                                <span style="color: red;font-size: 14px;" class="form-message"></span>
                            </div>
                            <div class="checkout__input">
                                <p>Tỉnh thành phố<span>*</span></p>
                                <input id="city" name="thanhpho" type="text" fdprocessedid="4xch4j">
                                <span style="color: red;font-size: 14px;" class="form-message"></span>
                            </div>
                            <div class="row">
                                <div class="checkout__input__left">
                                    <div class="checkout__input">
                                        <p>Điện thoại<span>*</span></p>
                                        <input id="tel" name="sdt" type="tel" fdprocessedid="4xch4j">
                                        <span style="color: red;font-size: 14px;" class="form-message"></span>
                                    </div>
                                </div>
                                <div class="checkout__input__right">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input id="email" name="email" type="email" fdprocessedid="4xch4j">
                                        <span style="color: red;font-size: 14px;" class="form-message"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input__checkbox">
                                <p>Tạo một tài khoản bằng cách nhập các thông tin dưới đây. Nếu bạn là khách hàng cũ,
                                    vui lòng đăng nhập ở đầu trang</p>
                            </div>
                            <div class="checkout__input">
                                <p>Mật khẩu tài khoản<span>*</span></p>
                                <input id="password" name="mk" type="password" fdprocessedid="4xch4j">
                                <span style="color: red;font-size: 14px;" class="form-message"></span>
                            </div>
                            <div class="checkout__input">
                                <p>Ghi chú đơn hàng<span>*</span></p>
                                <input name="ghichu" type="text"
                                    placeholder="Ghi chú về đơn đặt hàng của bạn, ví dụ như ghi chú đặc biệt cho việc giao hàng."
                                    fdprocessedid="4xch4j">
                            </div>
                        </div>
                        <input type="hidden" value="<?php echo $tongtien ?>" name="tongtien_momo">
                        <div class="checkout__right">
                            <div class="checkout__order">
                                <h4 class="order__title">Đơn đặt hàng của bạn</h4>
                                <div class="checkout__order__products">Product <span>Total</span></div>
                                <?php
                                        if(isset($_SESSION['cart1'])){
                                            $tongtien = 0;
                                            foreach($_SESSION['cart1'] as $cart_item){
                                                $thanhtien = $cart_item['soluong'] * $cart_item['gia'];
                                                $tongtien+=$thanhtien;
                                                ?>
                                <ul class="checkout__total__products">
                                    <li><?php echo $cart_item['tensp'] ?> × <?php echo $cart_item['soluong'] ?> <span><?php echo number_format($thanhtien,0,',','.').' đ' ?></span></li>
                                </ul>
                                <?php
                                     } }
                                  ?>
                                <ul class="checkout__total__all">
                                    <li>Tổng phụ <span><?php echo number_format($tongtien,0,',','.').' đ' ?></span></li>
                                    <li>Tổng chính <span><?php echo number_format($tongtien,0,',','.').' đ' ?></span></li>
                                </ul>
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        Trả tiền mặt khi nhận hàng
                                        <input name="payment" value="Trả tiền mặt" type="checkbox" id="payment">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        Paypal
                                        <input name="payment" value="Paypal" type="checkbox" id="payment">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                
                                <button  name="dh" type="submit" class="site-btn" fdprocessedid="rnrtaj">Đặt hàng</button>
                                <button style="width: 304px;position: relative;background: #a50064;"  name="payUrl" type="submit" class="site-btn" fdprocessedid="rnrtaj">
                                    <img src="https://developers.momo.vn/v3/vi/img/logo.svg" alt="" style = " width: 30px;position: absolute;top: 6px;left: 25px;background: #ffff;"> 
                                    Thanh toán bằng momo</button> 
                            </div>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </section>
    <?php include('./footer.php') ?>
    <script>
        // radio buttons

        $(".product__color__select label, .header__row__between li, .shop__sidebar__size label, .shop__sidebar__color label, .checkout__input__checkbox label").on(
            "click",
            function () {
                $(".product__color__select label, .header__row__between li, .shop__sidebar__size label, .shop__sidebar__color label, .checkout__input__checkbox label").removeClass(
                    "active"
                );
                $(this).addClass("active");
            }
        );

        //product control

        $(".filter__controls li").on("click", function () {
            $(" .filter__controls li").removeClass("active");
            $(this).addClass("active");
        });
        if ($(".product__filter").length > 0) {
            var containerEl = document.querySelector(".product__filter");
            var mixer = mixitup(containerEl);
        }

        $(document).ready(function () {
            $('select').niceSelect();
        });

    </script>
    <!-- <script src="./access/js/validator.js"></script> -->
    
    </script>
</body>
</body>

</html>
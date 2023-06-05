
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
    include ("admin/config/config.php");
    include ("./header.php");

    $user = (isset($_SESSION['khachhang1'])) ? $_SESSION['khachhang1']:[];
    //xóa sản phẩm khỏi giỏi hàng
    if (isset($_GET["page"])){
        if ($_GET["page"] == "xoa"){
            foreach ($_SESSION["cart1"] as $keys => $value){
                if ($value["masp"] == $_GET["masp"]){
                    unset($_SESSION["cart1"][$keys]);
                    echo '<script>window.location="shopCart.php"</script>';
                }
            }
        }
    }
    //cộng số lượng
    if (isset($_GET['page'])){
        if ($_GET["page"] == "cong"){
            foreach($_SESSION['cart1'] as $cart_item){
                if($cart_item['masp']!=$_GET["masp"]){
                    $product[] = array('tensp'=>$cart_item['tensp'],'masp'=>$cart_item['masp'],'soluong'=>$cart_item['soluong'],
                                'gia'=>$cart_item['gia'],'anh'=>$cart_item['anh']);
                    $_SESSION['cart1'] = $product;
                }else{
                    $tangsoluong = $cart_item['soluong'] + 1;
                    if($cart_item['soluong']<=9){
                        $product[] = array('tensp'=>$cart_item['tensp'],'masp'=>$cart_item['masp'],'soluong'=>$tangsoluong,
                                'gia'=>$cart_item['gia'],'anh'=>$cart_item['anh']);
                    }else{
                        $product[] = array('tensp'=>$cart_item['tensp'],'masp'=>$cart_item['masp'],'soluong'=>$cart_item['soluong'],
                                'gia'=>$cart_item['gia'],'anh'=>$cart_item['anh']);
                    }
                    $_SESSION['cart1'] = $product;
                }
            }
        }
    }
    //trừ số lượng
    if (isset($_GET['page'])){
        if ($_GET["page"] == "tru"){
            foreach($_SESSION['cart1'] as $cart_item){
                if($cart_item['masp']!=$_GET["masp"]){
                    $product[] = array('tensp'=>$cart_item['tensp'],'masp'=>$cart_item['masp'],'soluong'=>$cart_item['soluong'],
                                'gia'=>$cart_item['gia'],'anh'=>$cart_item['anh']);
                    $_SESSION['cart1'] = $product;
                }else{
                    $tangsoluong = $cart_item['soluong'] - 1;
                    if($cart_item['soluong']>1){
                        $product[] = array('tensp'=>$cart_item['tensp'],'masp'=>$cart_item['masp'],'soluong'=>$tangsoluong,
                                'gia'=>$cart_item['gia'],'anh'=>$cart_item['anh']);
                    }else{
                        $product[] = array('tensp'=>$cart_item['tensp'],'masp'=>$cart_item['masp'],'soluong'=>$cart_item['soluong'],
                                'gia'=>$cart_item['gia'],'anh'=>$cart_item['anh']);
                    }
                    $_SESSION['cart1'] = $product;
                }
            }
        }
    }
?>
    <section class="breadcrumb__option">
        <div class="container">
            <div class="row">
                <div class="breadcrumb__header">
                    <div class="breadcrumb__header__text">
                        <h4>Shopping Cart</h4>
                        <div class="breadcrumb__header__link">
                            <a href="./index.php">Home</a>
                            <a href="./shop.php">Shop</a>
                            <span>Shopping Cart </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="shopping__cart">
        <div class="container">
            <div class="row" style="align-items: start;">
                <div class="shopping__cart__left">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Tổng</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if(isset($_SESSION['cart1'])){
                                        $tongtien = 0;
                                        foreach($_SESSION['cart1'] as $cart_item){
                                            $thanhtien = $cart_item['soluong'] * $cart_item['gia'];
                                            $tongtien+=$thanhtien;
                                ?>
                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                            <img src="./access/img/<?php echo $cart_item['anh']?>" style="width: 90px; height: 90px;" alt="">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6><?php echo $cart_item['tensp']?></h6>
                                            <h5><?php echo number_format($cart_item['gia'],0,',','.').' đ'?></h5>
                                        </div>
                                    </td>
                                    <td class="quantity__item">
                                        <div class="quantity">
                                            <div class="pro__qty-2">
                                                <input type="text" value="<?php echo $cart_item['soluong'] ?>" fdprocessedid="pti5l">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="car__price"><?php echo number_format($thanhtien,0,',','.').' đ' ?></td>
                                    <td class="cart__close">
                                        <a href="shopCart.php?page=xoa&masp=<?php echo $cart_item['masp']; ?>"><i class="fa-solid fa-xmark"></i></a>
                                        
                                    </td>
                                </tr>
                                <?php 
                                    }}
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="continue__btn">
                            <a href="">Tiếp tục mua sắm</a>
                        </div>
                    </div>
                </div>
                <div class="shopping__cart__right">
                    <div class="cart__discount">
                        <h6>Mã giảm giá</h6>
                        <form action="#">
                            <input type="text" placeholder="Mã giảm giá">
                            <button type="submit">Áp dụng</button>
                        </form>
                    </div>
                    <div class="cart__total">
                        <h6>Tổng số tiền</h6>
                        <ul>
                            <?php if(isset($_SESSION['cart1'])){?>
                                <li>Tổng phụ<span> <?php echo number_format($tongtien,0,',','.').' đ' ?></span></li>
                                <li>Tổng chính<span><?php echo number_format($tongtien,0,',','.').' đ' ?></span></li>
                            <?php }else{?>
                                <li>Tổng phụ<span> 0 đ</span></li>
                                <li>Tổng chính<span>0 đ</span></li>
                            <?php }?>
                            
                        </ul>
                        <a href="./payment.php" class="primary-btn">Thanh toán</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php 
        include ("./footer.php");
    ?>
    <script>
        // radio buttons

        $(".product__color__select label, .header__row__between li, .shop__sidebar__size label, .shop__sidebar__color label").on(
            "click",
            function () {
                $(".product__color__select label, .header__row__between li, .shop__sidebar__size label, .shop__sidebar__color label").removeClass(
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

        var proQty = $('.pro__qty-2');
        proQty.prepend('<a href="shopCart.php?page=tru&masp=<?php echo $cart_item['masp']; ?>" class="dec qtybtn"><span class="fa fa-angle-left dec qtybtn"></span></a>');
        proQty.append('<a href="shopCart.php?page=cong&masp=<?php echo $cart_item['masp']; ?>" class="inc qtybtn"><span class="fa fa-angle-right inc qtybtn"></span></a>');
        proQty.on('click', '.qtybtn', function () {
            var $button = $(this);
            var oldValue = $button.parent().find('input').val();
            if ($button.hasClass('inc')) {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                // Không cho phép giảm xuống số 0
                if (oldValue > 0) {
                    var newVal = parseFloat(oldValue) - 1;
                } else {
                    newVal = 0;
                }
            }
            $button.parent().find('input').val(newVal);
        });



    </script>
</body>

</html>
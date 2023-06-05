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
    $sql_ctsp = "SELECT * FROM sanpham, loaisp where sanpham.maloai = loaisp.maloai and sanpham.masp = '$_GET[masp]' LIMIT 1";
    $query_ctsp = mysqli_query($conn,$sql_ctsp);
 

    while ($row_ctsp = mysqli_fetch_array($query_ctsp)) {?>
    <section class="shop__details">
        <div class="product__details__pic">
            <div class="container">
                <div class="row">
                    <div class="product__details__header">
                        <div class="product__details__breadcrumb">
                            <a href="./index.php">Home</a>
                            <a href="./shop.php">Shop</a>
                            <span>Product Details</span>
                        </div>
                    </div>
                </div>
                <div class="row" style="justify-content: normal;align-items: start;">
                    <div class="product__detail__left">
                        <ul class="nav nav__tab">
                            <li class="nav__item">
                                <a href="#">
                                    <div class="product__thumb__pic">
                                        <img class="thumb" src="./access/img/<?php echo $row_ctsp['anh'] ?>" alt=""
                                            onclick="currenttab(1)">
                                    </div>
                                </a>
                            </li>
                            <li class="nav__item">
                                <a href="#">
                                    <div class="product__thumb__pic">
                                        <img class="thumb" src="./access/img/<?php echo $row_ctsp['anh'] ?>" alt=""
                                            onclick="currenttab(2)">
                                    </div>
                                </a>
                            </li>
                            <li class="nav__item">
                                <a href="#">
                                    <div class="product__thumb__pic">
                                        <img class="thumb" src="./access/img/<?php echo $row_ctsp['anh'] ?>" alt=""
                                            onclick="currenttab(3)">
                                    </div>
                                </a>
                            </li>
                            <li class="nav__item">
                                <a href="#">
                                    <div class="product__thumb__pic">
                                        <img class="thumb" src="./access/img/<?php echo $row_ctsp['anh'] ?>" alt=""
                                            onclick="currenttab(4)">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="product__detail__right">
                        <div class="tab__content">
                            <div class="tab__pane">
                                <div class="product__detail__pic__item">
                                    <img src="./access/img/<?php echo $row_ctsp['anh'] ?>" alt="">
                                </div>
                            </div>
                            <div class="tab__pane">
                                <div class="product__detail__pic__item">
                                    <img src="./access/img/<?php echo $row_ctsp['anh'] ?>" alt="">
                                </div>
                            </div>
                            <div class="tab__pane">
                                <div class="product__detail__pic__item">
                                    <img src="./access/img/<?php echo $row_ctsp['anh'] ?>" alt="">
                                </div>
                            </div>
                            <div class="tab__pane">
                                <div class="product__detail__pic__item">
                                    <img src="./access/img/<?php echo $row_ctsp['anh'] ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product__details__content">
            <div class="container">
                <div class="row" style="justify-content: center;">
                    <div class="product__details__bw">
                        <div class="product__details__text <?php echo $row_ctsp['Tag'] ?>">
                            <h4><?php echo $row_ctsp['tensp'] ?></h4>
                            <div class="rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h3><?php echo number_format($row_ctsp['gia'],0,',','.').' đ' ?> <span>1.500.000 đ</span></h3>
                            <p>
                                <?php echo $row_ctsp['mota'] ?>
                            </p>
                            <div class="product__details__option">
                                <div class="product__details__option__size">
                                    <span>Size:</span>
                                    <label for="xxl">xxl
                                        <input type="radio" id="xxl">
                                    </label>
                                    <label class="active" for="xl">xl
                                        <input type="radio" id="xl">
                                    </label>
                                    <label for="l">l
                                        <input type="radio" id="l">
                                    </label>
                                    <label for="sm">s
                                        <input type="radio" id="sm">
                                    </label>
                                </div>
                                <div class="product__details__option__color">
                                    <span>Color:</span>
                                    <label class="c-1" for="sp-1">
                                        <input type="radio" id="sp-1">
                                    </label>
                                    <label class="c-2" for="sp-2">
                                        <input type="radio" id="sp-2">
                                    </label>
                                    <label class="c-3" for="sp-3">
                                        <input type="radio" id="sp-3">
                                    </label>
                                    <label class="c-4" for="sp-4">
                                        <input type="radio" id="sp-4">
                                    </label>
                                    <label class="c-9" for="sp-9">
                                        <input type="radio" id="sp-9">
                                    </label>
                                </div>
                            </div>
                            <div class="product__details__cart__option">
                                <div class="quantity">
                                    <div class="pro__qty">
                                        <input type="text" value="1" fdprocessedid="5c0i4z">
                                    </div>
                                </div>
                                <a href="#" class="primary-btn">add to cart</a>
                            </div>
                            <div class="product__details__btns__option">
                                <a href="#"><i class="fa fa-heart"></i> add to wishlist</a>
                                <a href="#"><i class="fa fa-exchange"></i> Add To Compare</a>
                            </div>
                            <div class="product__details__last__option">
                                <h5><span>Guaranteed Safe Checkout</span></h5>
                                <img src="./access/img/details-payment.png.webp" alt="">
                                <ul>
                                    <li><span>SKU:</span>SP- <?php echo $row_ctsp['masp'] ?></li>
                                    <li><span>Categories:</span> <?php echo $row_ctsp['tenloai'] ?></li>
                                    <li><span>Tag:</span> <?php echo $row_ctsp['Tag'] ?>, <?php echo $row_ctsp['tenloai'] ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="product__detail__descripton">
                        <div class="product__detail__tab">
                            <ul class="nav nav__tab">
                                <li class="nav__item active" onclick="currenttext(1)">
                                        Mô Tả
                                </li>
                                <li class="nav__item " onclick="currenttext(2)">
                                        Reviews của khách hàng
                                </li>
                                <li class="nav__item " onclick="currenttext(3)">
                                        Thông tin thêm
                                </li>
                            </ul>
                            <div class="tab__content">
                                <div class="tab__pane2">
                                    <div class="product__details__tab__content">
                                        <p class="note">Đối với thời gian là xấu xí, nhưng sự sợ hãi của sô cô la đầu tư
                                            không có ai chăm sóc nó.
                                            Trẻ em đau đớn, một yếu tố của đạo đức của chính sách cho mềm mại như tiếng
                                            cười. Sedcus faucibus hoặc
                                            sullamcorper mattis drostique des commodores rung</p>
                                        <div class="product__details__tab__content__item">
                                            <h5>Thông tin sản phẩm</h5>
                                            <p><?php echo $row_ctsp['mota'] ?></p>
                                            
                                        </div>
                                        <div class="product__details__tab__content__item">
                                            <h5>Vật liệu đã sử dụng</h5>
                                            <p><?php echo $row_ctsp['Mota'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab__pane2">
                                    <div class="product__details__tab__content__item">
                                            <h5>Thông tin sản phẩm</h5>
                                            <p><?php echo $row_ctsp['mota'] ?></p>
                                                
                                        </div>
                                        <div class="product__details__tab__content__item">
                                            <h5>Vật liệu đã sử dụng</h5>
                                            <p><?php echo $row_ctsp['Mota'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab__pane2">
                                    <div class="product__details__tab__content">
                                        <p class="note">Đối với thời gian là xấu xí, nhưng sự sợ hãi của sô cô la đầu tư
                                            không có ai chăm sóc nó.
                                            Trẻ em đau đớn, một yếu tố của đạo đức của chính sách cho mềm mại như tiếng
                                            cười. Sedcus faucibus hoặc
                                            sullamcorper mattis drostique des commodores rung</p>
                                        <div class="product__details__tab__content__item">
                                            <h5>Thông tin sản phẩm</h5>
                                            <p><?php echo $row_ctsp['mota'] ?></p>
                                            
                                        </div>
                                        <div class="product__details__tab__content__item">
                                            <h5>Vật liệu đã sử dụng</h5>
                                            <p><?php echo $row_ctsp['Mota'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
    <section class="related">
        <div class="container">
            <div class="row">
                <div class="related__header">
                    <h3 class="related__title">Sản phẩm liên quan</h3>
                </div>
            </div>
            <div class="row product__filter" style="justify-content: normal;">
            <?php

                $sql_pro = "SELECT * FROM sanpham, loaisp where sanpham.maloai = loaisp.maloai and sanpham.maloai = '$_GET[maloai]' ORDER BY masp ASC";
                $query_pro = mysqli_query($conn,$sql_pro);

                while ($row_pro = mysqli_fetch_array($query_pro)) {
            ?>
                <div class="product__item mix <?php echo $row_pro['Tag'] ?>">
                    <div class="product__item__pic">
                        <img src="./access/img/<?php echo $row_pro['anh'] ?>" alt="" style="object-fit: cover;width: 260px; height: 260px;" />
                        <span class="label"><?php echo $row_pro['Tag'] ?></span>
                        <ul class="product__hover">
                            <li>
                                <a href=""><i class="fa-regular fa-heart"></i></a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-arrow-right-arrow-left"></i></a>
                            </li>
                            <li>
                                <a href="product_detail.php?page=&masp=<?php echo $row_pro['masp']; ?>&maloai=<?php echo $row_pro['maloai']; ?>"><i class="fa fa-magnifying-glass"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><?php echo $row_pro['tensp'] ?></h6>
                        <a href="#" class="add-cart">+ Add To Cart</a>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h5><?php echo number_format($row_pro['gia'],0,',','.').' đ' ?></h5>
                        <div class="product__color__select">
                            <label for="pc-1">
                                <input type="radio" id="pc-1" />
                            </label>
                            <label class="black" for="pc-2">
                                <input type="radio" id="pc-2" />
                            </label>
                            <label class="grey" for="pc-3">
                                <input type="radio" id="pc-3" />
                            </label>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <?php 
    
        include ("./footer.php");
    ?>
    <script>

        let tabIndex = 1;
        showTab(tabIndex);

        function currenttab(n) {
            showTab(tabIndex = n);
        }

        function showTab(n) {
            let i;
            let tab = document.querySelectorAll(".tab__pane");
            let thumb = document.querySelectorAll(".thumb");
            if (n > tab.length) { tabIndex = 1 }
            if (n < 1) { tabIndex = tab.length }
            for (i = 0; i < tab.length; i++) {
                tab[i].style.display = "none";
            }
            for (i = 0; i < thumb.length; i++) {
                thumb[i].className = thumb[i].className.replace(" active", "");
            }
            tab[tabIndex - 1].style.display = "block";
            thumb[tabIndex - 1].className += " active";
        }

        let textIndex = 1;
        showText(textIndex);

        function currenttext(n) {
            showText(textIndex = n);
        }

        function showText(n) {
            let i;
            let tab = document.querySelectorAll(".tab__pane2");
            let text = document.querySelectorAll(".nav__item");
            if (n > tab.length) { textIndex = 1 }
            if (n < 1) { textIndex = tab.length }
            for (i = 0; i < tab.length; i++) {
                tab[i].style.display = "none";
            }
            for (i = 0; i < text.length; i++) {
                text[i].className = text[i].className.replace(" active", "");
            }
            tab[textIndex - 1].style.display = "block";
            text[textIndex - 1].className += " active";
        }

        // radio buttons

        $(".product__color__select label, .header__row__between li, .shop__sidebar__size label, .shop__sidebar__color label, .product__details__option__color label, .product__details__option__size label, .nav__item").on(
            "click",
            function () {
                $(".product__color__select label, .header__row__between li, .shop__sidebar__size label, .shop__sidebar__color label, .product__details__option__color label, .product__details__option__size label, .nav__item").removeClass(
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

        var proQty = $('.pro__qty');
        proQty.prepend('<span class="fa fa-angle-up dec qtybtn"></span>');
        proQty.append('<span class="fa fa-angle-down inc qtybtn"></span>');
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
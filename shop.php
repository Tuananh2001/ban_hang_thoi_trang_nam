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
    ?>
    <section class="breadcrumb__option">
        <div class="container">
            <div class="row">
                <div class="breadcrumb__header">
                    <div class="breadcrumb__header__text">
                        <h4>Shop</h4>
                        <div class="breadcrumb__header__link">
                            <a href="./index.html">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="shop">
        <div class="container">
            <div class="row" style="align-items: start;">
                <div class="shop__left">
                    <div class="shop__slidebar">
                        <div class="shop__slidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search..." fdprocessedid="a9xnxn">
                                <button type="submit" fdprocessedid="mmqzgj">
                                    <span class="icon_search"><i class="fa-solid fa-magnifying-glass"></i></span>
                                </button>
                            </form>
                        </div>
                        <div class="shop__sidebar__accordion">
                            <div class="accordion">
                                <div class="card">
                                    <div class="card__header">
                                        <a href="">Thể loại</a>
                                    </div>
                                    <div class="collapse">
                                        <div class="card__body">
                                            <div class="shop__sidebar__categories">
                                                <ul class="nice-scroll" tabindex="1"
                                                    style="overflow-y: hidden; outline: none;">
                                                    <li><a href="#">Nam giới (20)</a></li>
                                                    <li><a href="#">Phụ nữ (20)</a></li>
                                                    <li><a href="#">Túi (20)</a></li>
                                                    <li><a href="#">Quần áo (20)</a></li>
                                                    <li><a href="#">Giày (20)</a></li>
                                                    <li><a href="#">Phụ kiện (20)</a></li>
                                                    <li><a href="#">Trẻ em (20)</a></li>
                                                    <li><a href="#">Trẻ em (20)</a></li>
                                                    <li><a href="#">Trẻ em (20)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card__header">
                                        <a href="">Thương hiệu</a>
                                    </div>
                                    <div class="collapse">
                                        <div class="card__body">
                                            <div class="shop__sidebar__brand">
                                                <ul>
                                                    <li><a href="#">Louis Vuitton</a></li>
                                                    <li><a href="#">Chanel</a></li>
                                                    <li><a href="#">Hermes</a></li>
                                                    <li><a href="#">Gucci</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card__header">
                                        <a href="">Lọc giá</a>
                                    </div>
                                    <div class="collapse">
                                        <div class="card__body">
                                            <div class="shop__sidebar__price">
                                                <ul class="nice-scroll" tabindex="1"
                                                    style="overflow-y: hidden; outline: none;">
                                                    <li><a href="#">0 đ - 100.000 đ</a></li>
                                                    <li><a href="#">100.000 đ - 200.000 đ</a></li>
                                                    <li><a href="#">200.000 đ - 500.000 đ</a></li>
                                                    <li><a href="#">500.000 đ - 1.000.000 đ</a></li>
                                                    <li><a href="#">1.000.000 đ - 5.000.000 đ</a></li>
                                                    <li><a href="#">5.000.000 đ +</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card__header">
                                        <a href="">Size</a>
                                    </div>
                                    <div class="collapse">
                                        <div class="card__body">
                                            <div class="shop__sidebar__size">
                                                <label for="xs" class="">xs
                                                    <input type="radio" id="xs">
                                                </label>
                                                <label for="sm" class="">s
                                                    <input type="radio" id="sm">
                                                </label>
                                                <label for="md" class="">m
                                                    <input type="radio" id="md">
                                                </label>
                                                <label for="xl" class="">xl
                                                    <input type="radio" id="xl">
                                                </label>
                                                <label for="2xl" class="">2xl
                                                    <input type="radio" id="2xl">
                                                </label>
                                                <label for="3xl" class="">3xl
                                                    <input type="radio" id="3xl">
                                                </label>
                                                <label for="4xl" class="">4xl
                                                    <input type="radio" id="4xl">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card__header">
                                        <a href="">Màu</a>
                                    </div>
                                    <div class="collapse">
                                        <div class="card__body">
                                            <div class="shop__sidebar__color" style="margin-left: 5px;">
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
                                                <label class="c-5" for="sp-5">
                                                    <input type="radio" id="sp-5">
                                                </label>
                                                <label class="c-6" for="sp-6">
                                                    <input type="radio" id="sp-6">
                                                </label>
                                                <label class="c-7" for="sp-7">
                                                    <input type="radio" id="sp-7">
                                                </label>
                                                <label class="c-8" for="sp-8">
                                                    <input type="radio" id="sp-8">
                                                </label>
                                                <label class="c-9" for="sp-9">
                                                    <input type="radio" id="sp-9">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card__header">
                                        <a href="">Tags</a>
                                    </div>
                                    <div class="collapse">
                                        <div class="card__body">
                                            <div class="shop__sidebar__tags">
                                                <a href="#">Sản phẩm</a>
                                                <a href="#">Túi</a>
                                                <a href="#">Giày</a>
                                                <a href="#">Fashio</a>
                                                <a href="#">Quần áo</a>
                                                <a href="#">Mũ</a>
                                                <a href="#">Phụ kiện</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shop__right">
                    <div class="shop__product__option">
                        <div class="row">
                            <div class="sort__right">
                                <div class="shop__product__option__right">
                                    <p>Sắp xếp theo giá :</p>
                                    <select name="" id="" style="display: none;">
                                        <option value="">Thấp đến Cao</option>
                                        <option value="">0 đ - 500.000 đ</option>
                                        <option value="">500.000 đ - 1 tr</option>
                                    </select>
                                    <div class="nice-select" tabindex="0">
                                        <span class="current">Thấp đến cao</span>
                                        <ul class="list">
                                            <li data-value="" class="option selected">Thấp đến cao</li>
                                            <li data-value="" class="option">0đ-500.000đ</li>
                                            <li data-value="" class="option">500.000đ-1tr</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row product__filter">
                        <?php include('./product.php') ?>
                        <div class="product__item mix hot-sales">
                            <div class="product__item__pic">
                                <img src="./access/img/product-2.jpg.webp" alt="" />
                                <span class="label">New</span>
                                <ul class="product__hover">
                                    <li>
                                        <a href=""><i class="fa-regular fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fa fa-arrow-right-arrow-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="./product_detail.php"><i class="fa fa-magnifying-glass"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6>Áo khoác Piqué Biker</h6>
                                <a href="#" class="add-cart">+ Add To Cart</a>
                                <div class="rating">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <h5>1.500.000 đ</h5>
                                <div class="product__color__select">
                                    <label for="pc-4">
                                        <input type="radio" id="pc-4" />
                                    </label>
                                    <label class="black" for="pc-5">
                                        <input type="radio" id="pc-5" />
                                    </label>
                                    <label class="grey" for="pc-6">
                                        <input type="radio" id="pc-6" />
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="product__item mix sale new-arrivals">
                            <div class="product__item__pic">
                                <img src="./access/img/product-3.jpg.webp" alt="" />
                                <span class="label">Sale</span>
                                <ul class="product__hover">
                                    <li>
                                        <a href=""><i class="fa-regular fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fa fa-arrow-right-arrow-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="./product_detail.php"><i class="fa fa-magnifying-glass"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6>Giày thể thao</h6>
                                <a href="#" class="add-cart">+ Add To Cart</a>
                                <div class="rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <h5>1.500.000 đ</h5>
                                <div class="product__color__select">
                                    <label for="pc-7">
                                        <input type="radio" id="pc-7" />
                                    </label>
                                    <label class="black" for="pc-8">
                                        <input type="radio" id="pc-8" />
                                    </label>
                                    <label class="grey" for="pc-9">
                                        <input type="radio" id="pc-9" />
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="product__item mix hot-sales">
                            <div class="product__item__pic">
                                <img src="./access/img/product-4.jpg.webp" alt="" />
                                <span class="label">New</span>
                                <ul class="product__hover">
                                    <li>
                                        <a href=""><i class="fa-regular fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fa fa-arrow-right-arrow-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="./product_detail.php"><i class="fa fa-magnifying-glass"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6>Áo khoác Piqué Biker</h6>
                                <a href="#" class="add-cart">+ Add To Cart</a>
                                <div class="rating">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <h5>1.500.000 đ</h5>
                                <div class="product__color__select">
                                    <label for="pc-10">
                                        <input type="radio" id="pc-10" />
                                    </label>
                                    <label class="black" for="pc-11">
                                        <input type="radio" id="pc-11" />
                                    </label>
                                    <label class="grey" for="pc-12">
                                        <input type="radio" id="pc-12" />
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="product__item mix new-arrivals">
                            <div class="product__item__pic">
                                <img src="./access/img/product-5.jpg.webp" alt="" />
                                <span class="label">New</span>
                                <ul class="product__hover">
                                    <li>
                                        <a href=""><i class="fa-regular fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fa fa-arrow-right-arrow-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="./product_detail.php"><i class="fa fa-magnifying-glass"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6>Áo khoác Piqué Biker</h6>
                                <a href="#" class="add-cart">+ Add To Cart</a>
                                <div class="rating">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <h5>1.500.000 đ</h5>
                                <div class="product__color__select">
                                    <label for="pc-13">
                                        <input type="radio" id="pc-13" />
                                    </label>
                                    <label class="black" for="pc-14">
                                        <input type="radio" id="pc-14" />
                                    </label>
                                    <label class="grey" for="pc-15">
                                        <input type="radio" id="pc-15" />
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="product__item mix sale hot-sales">
                            <div class="product__item__pic">
                                <img src="./access/img/product-6.jpg.webp" alt="" />
                                <span class="label">Sale</span>
                                <ul class="product__hover">
                                    <li>
                                        <a href=""><i class="fa-regular fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fa fa-arrow-right-arrow-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="./product_detail.php"><i class="fa fa-magnifying-glass"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6>Áo khoác Piqué Biker</h6>
                                <a href="#" class="add-cart">+ Add To Cart</a>
                                <div class="rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <h5>1.500.000 đ</h5>
                                <div class="product__color__select">
                                    <label for="pc-16">
                                        <input type="radio" id="pc-16" />
                                    </label>
                                    <label class="black" for="pc-17">
                                        <input type="radio" id="pc-17" />
                                    </label>
                                    <label class="grey" for="pc-18">
                                        <input type="radio" id="pc-18" />
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="product__item mix new-arrivals">
                            <div class="product__item__pic">
                                <img src="./access/img/product-7.jpg.webp" alt="" />
                                <span class="label">New</span>
                                <ul class="product__hover">
                                    <li>
                                        <a href=""><i class="fa-regular fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fa fa-arrow-right-arrow-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="./product_detail.php"><i class="fa fa-magnifying-glass"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6>Áo khoác Piqué Biker</h6>
                                <a href="#" class="add-cart">+ Add To Cart</a>
                                <div class="rating">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <h5>1.500.000 đ</h5>
                                <div class="product__color__select">
                                    <label for="pc-19">
                                        <input type="radio" id="pc-19" />
                                    </label>
                                    <label class="black" for="pc-20">
                                        <input type="radio" id="pc-20" />
                                    </label>
                                    <label class="grey" for="pc-21">
                                        <input type="radio" id="pc-21" />
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="product__item mix hot-sales">
                            <div class="product__item__pic">
                                <img src="./access/img/product-8.jpg.webp" alt="" />
                                <span class="label">New</span>
                                <ul class="product__hover">
                                    <li>
                                        <a href=""><i class="fa-regular fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fa fa-arrow-right-arrow-left"></i></a>
                                    </li>
                                    <li>
                                        <a href="./product_detail.php"><i class="fa fa-magnifying-glass"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6>Áo khoác Piqué Biker</h6>
                                <a href="#" class="add-cart">+ Add To Cart</a>
                                <div class="rating">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <h5>1.500.000 đ</h5>
                                <div class="product__color__select">
                                    <label for="pc-22">
                                        <input class="active" type="radio" id="pc-22" />
                                    </label>
                                    <label class="black" for="pc-23">
                                        <input type="radio" id="pc-23" />
                                    </label>
                                    <label class="grey" for="pc-24">
                                        <input type="radio" id="pc-24" />
                                    </label>
                                </div>
                            </div>
                        </div>
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

        $(document).ready(function() {
            $('select').niceSelect();
        });


    </script>
</body>

</html>
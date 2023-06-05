<?php 
    include ("admin/config/config.php");
    include ("./header.php");
?>
<section class="hero">
    <div class="hero__slider">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="./access/img/hero-1.jpg.webp" style="width: 1519.2px" />
                <div class="container">
                    <div class="row">
                        <div class="text__slider">
                            <h6 class="fade-text">Summer Collection</h6>
                            <h2 class="fade-text2">Fall - Winter Collections 2030</h2>
                            <p class="fade-text3">
                                A specialist label creating luxury essentials. Ethically
                                crafted with an unwavering commitment to exceptional
                                quality.
                            </p>
                            <a href="#" class="primary-btn fade-text4">Shop now <i class="fa fa-arrow-right-long"></i></a>
                            <div class="hero__social">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mySlides fade">
                <img src="./access/img/hero-2.jpg.webp" style="width: 1519.2px" />
                <div class="container">
                    <div class="row">
                        <div class="text__slider">
                            <h6 class="fade-text">Summer Collection</h6>
                            <h2 class="fade-text2">Fall - Winter Collections 2030</h2>
                            <p class="fade-text3">
                                A specialist label creating luxury essentials. Ethically
                                crafted with an unwavering commitment to exceptional
                                quality.
                            </p>
                            <a href="#" class="primary-btn fade-text4">Shop now <i class="fa fa-arrow-right-long"></i></a>
                            <div class="hero__social">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mySlides fade">
                <img src="./access/img/hero-1.jpg.webp" style="width: 1519.2px" />
                <div class="container">
                    <div class="row">
                        <div class="text__slider">
                            <h6 class="fade-text">Summer Collection</h6>
                            <h2 class="fade-text2">Fall - Winter Collections 2030</h2>
                            <p class="fade-text3">
                                A specialist label creating luxury essentials. Ethically
                                crafted with an unwavering commitment to exceptional
                                quality.
                            </p>
                            <a href="#" class="primary-btn fade-text4">Shop now <i class="fa fa-arrow-right-long"></i></a>
                            <div class="hero__social">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mySlides fade">
                <img src="./access/img/hero-2.jpg.webp" style="width: 1519.2px" />
                <div class="container">
                    <div class="row">
                        <div class="text__slider">
                            <h6 class="fade-text">Summer Collection</h6>
                            <h2 class="fade-text2">Fall - Winter Collections 2030</h2>
                            <p class="fade-text3">
                                A specialist label creating luxury essentials. Ethically
                                crafted with an unwavering commitment to exceptional
                                quality.
                            </p>
                            <a href="#" class="primary-btn fade-text4">Shop now <i class="fa fa-arrow-right-long"></i></a>
                            <div class="hero__social">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <a class="prev" onclick="plusSlides(-1)"><i class="fa fa-arrow-left-long"></i></a>
            <a class="next" onclick="plusSlides(1)"><i class="fa fa-arrow-right-long"></i></a>
        </div>
    </div>
</section>
<section class="banner">
    <div class="container">
        <div class="row">
            <div class="banner__items-right">
                <div class="banner__item">
                    <div class="banner__item-pic">
                        <img src="./access/img/banner-1.jpg.webp" alt="" />
                    </div>
                    <div class="banner__item-text">
                        <h2>Clothing Collections 2030</h2>
                        <a href="#">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="banner__items-left">
                <div class="banner__item banner__item__middle">
                    <div class="banner__item-pic">
                        <img src="./access/img/banner-2.jpg.webp" alt="" />
                    </div>
                    <div class="banner__item-text">
                        <h2>Accessories</h2>
                        <a href="#">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="banner__items">
                <div class="banner__item banner__item__last">
                    <div class="banner__item-pic">
                        <img src="./access/img/banner-3.jpg.webp" alt="" />
                    </div>
                    <div class="banner__item-text">
                        <h2>Shoes Spring 2030</h2>
                        <a href="#">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="products">
    <div class="container">
        <div class="row">
            <div class="header__filter">
                <ul class="filter__controls">
                    <li class="active" data-filter="*">Best Sellers</li>
                    <li data-filter=".new">New Arrivals</li>
                    <li data-filter=".sale">Hot Sales</li>
                </ul>
            </div>
        </div>
        <div class="row product__filter" style="justify-content: normal;">
            <?php include('./product.php') ?>
            <div class="product__item mix new-arrivals">
                <div class="product__item__pic">
                    <img src="./access/img/product-1.jpg.webp" alt="" />
                    <span class="label">New</span>
                    <ul class="product__hover">
                        <li>
                            <a href=""><i class="fa-regular fa-heart"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-arrow-right-arrow-left"></i></a>
                        </li>
                        <li>
                            <a href="./product_detail.html"><i class="fa fa-magnifying-glass"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6>Giày Piqué Biker</h6>
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
                            <a href="./product_detail.html"><i class="fa fa-magnifying-glass"></i></a>
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
                            <a href="./product_detail.html"><i class="fa fa-magnifying-glass"></i></a>
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
                            <a href="./product_detail.html"><i class="fa fa-magnifying-glass"></i></a>
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
                            <a href="./product_detail.html"><i class="fa fa-magnifying-glass"></i></a>
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
                            <a href="./product_detail.html"><i class="fa fa-magnifying-glass"></i></a>
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
                            <a href="./product_detail.html"><i class="fa fa-magnifying-glass"></i></a>
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
                            <a href="./product_detail.html"><i class="fa fa-magnifying-glass"></i></a>
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
</section>
<section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__left">
                <div class="categories__left__text">
                    <h2>
                        Clothings Hot <br />
                        <span>Shoe Collection</span> <br />
                        Accessories
                    </h2>
                </div>
            </div>
            <div class="categories__between">
                <div class="categories__hot__deal">
                    <img src="./access/img/product-sale.png.webp" alt="">
                    <div class="hot__deal__sticker">
                        <span>Sale Of</span>
                        <h5>699.999 đ</h5>
                    </div>
                </div>
            </div>
            <div class="categories__right">
                <div class="categories__deal__countdown">
                    <span>Deal Of The Week</span>
                    <h2>Multi-pocket Chest Bag Black</h2>
                    <div class="categories__deal__countdown__timer" id="countdown">
                        <div class="cd-item">
                            <span>30</span>
                            <p>Days</p>
                        </div>
                        <div class="cd-item">
                            <span>19</span>
                            <p>Hours</p>
                        </div>
                        <div class="cd-item">
                            <span>57</span>
                            <p>Minutes</p>
                        </div>
                        <div class="cd-item">
                            <span>12</span>
                            <p>Seconds</p>
                        </div>
                    </div>
                    <a href="#" class="primary-btn">Shop now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="instagram">
    <div class="container">
        <div class="row">
            <div class="instagram__left">
                <div class="instagram__left__pic">
                    <img src="./access/img/instagram-1.jpg.webp" alt="">
                    <img src="./access/img/instagram-2.jpg.webp" alt="">
                    <img src="./access/img/instagram-3.jpg.webp" alt="">
                    <img src="./access/img/instagram-4.jpg.webp" alt="">
                    <img src="./access/img/instagram-5.jpg.webp" alt="">
                    <img src="./access/img/instagram-6.jpg.webp" alt="">
                </div>
            </div>
            <div class="instagram__right">
                <div class="instagram__right__text">
                    <h2>Instagram</h2>
                    <p>Điều quan trọng là phải chăm sóc khách hàng, được khách hàng theo dõi,
                        nhưng nó sẽ xảy ra vào thời điểm đó rất nhiều công việc và đau đớn.</p>
                    <h3>#Male_Fashion</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="latest">
    <div class="container">
        <div class="row">
            <div class="latest__header">
                <div class="section__title">
                    <span>Tin mới nhất</span>
                    <h2>Thời Trang Xu Hướng Mới</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="latest__left">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="./access/img/blog-1.jpg.webp" alt="">
                    </div>
                    <div class="blog__item__text">
                        <span>
                            <img src="./access/img/calendar.png.webp" alt="">
                            16 February 2020
                        </span>
                        <h5>Máy uốn tóc nào là tốt nhất</h5>
                        <a href="#">Đọc thêm</a>
                    </div>
                </div>
            </div>
            <div class="latest__between">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="./access/img/blog-2.jpg.webp" alt="">
                    </div>
                    <div class="blog__item__text">
                        <span>
                            <img src="./access/img/calendar.png.webp" alt="">
                            21 Tháng hai 2020
                        </span>
                        <h5>MBan nhạc vĩnh cửu tồn tại mãi mãi</h5>
                        <a href="#">Đọc thêm</a>
                    </div>
                </div>
            </div>
            <div class="latest__right">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="./access/img/blog-3.jpg.webp" alt="">
                    </div>
                    <div class="blog__item__text">
                        <span>
                            <img src="./access/img/calendar.png.webp" alt="">
                            28 Tháng hai 2020
                        </span>
                        <h5>Lợi ích sức khỏe của kính râm</h5>
                        <a href="#">Đọc thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
    include ("./footer.php");
?>
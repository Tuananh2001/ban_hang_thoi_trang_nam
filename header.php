<?php 
    session_start(); 
?>
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="header__top__left">
                    <p>Free shipping, 30-day return or refund guarantee.</p>
                </div>
                <div class="header__top__right">
                    <ul>
                        <li style="margin-right: 28px"><a href="">Sign in</a></li>
                        <li><a href="">Faqs</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="header__row__left">
                <div class="header__logo">
                    <a href="#">
                        <img src="./access/img/logo.png.webp" alt="Male Fashion" />
                    </a>
                </div>
            </div>
            <div class="header__row__between">
                <ul>
                    <li class=""><a href="./index.php">Home</a></li>
                    <li><a href="./shop.php">Shop</a></li>
                    <li><a href="#">Pages</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contacts</a></li>
                </ul>
            </div>
            <div class="header__row__right">
                <a href="" class="search__switch">
                    <img src="./access/img/search.png.webp" alt="" />
                </a>
                <a href="" class="heart">
                    <img src="./access/img/heart.png.webp" alt="" />
                </a>
                <a href="./shopCart.php" class="cart">
                    <img src="./access/img/cart.png.webp" alt="" />
                    <?php 
                        $count = 0;
                        if(isset($_SESSION['cart1'])){
                            $count = count($_SESSION['cart1']);
                        }
                    ?>
                    <span><?php echo $count ?></span>
                </a>
                <div class="price">$0.00</div>
            </div>
        </div>
    </div>
</header>

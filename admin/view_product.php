<?php 
    $sql = "SELECT * FROM sanpham, loaisp where sanpham.maloai = loaisp.maloai and sanpham.masp = '$_GET[masp]' LIMIT 1";
    $query = mysqli_query($conn,$sql);
 
    while ($row = mysqli_fetch_array($query)) {?>

  <section class="view_product">
        <div class="container">
            <div class="row" style="align-items: start;">
                <div class="view_product_left">
                    <div class="view_product_pic">
                        <img src="./images/<?php echo ($row['anh']) ?>" alt="" style="width: 80%;margin-left: 50px;">
                    </div>
                </div>
                <div class="view_product_right">
                    <div class="product__details__text">
                        <h4><?php echo ($row['tensp']) ?></h4>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3><?php echo number_format($row['gia'],0,',','.').' đ' ?> <span>1.500.000 đ</span></h3>
                        <p>
                            <?php echo ($row['mota']) ?>
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
                            <div class="product__details__last__option">
                                <ul>
                                    <li><span>SKU:</span>SP-<?php echo ($row['masp']) ?> </li>
                                    <li><span>Categories:</span> <?php echo ($row['tenloai'])?></li>
                                    <li><span>Tag:</span> <?php echo ($row['tenloai'])?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php }?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
     $(".product__details__option__color label, .product__details__option__size label").on(
            "click",
            function () {
                $(".product__details__option__color label, .product__details__option__size label").removeClass(
                    "active"
                );
                $(this).addClass("active");
            }
        );

</script>
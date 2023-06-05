
<?php
    include ("admin/config/config.php"); 
    $sql_pro = "SELECT * FROM sanpham  ORDER BY masp ASC";
    
    $query_pro = mysqli_query($conn,$sql_pro);
    while ($row_pro = mysqli_fetch_array($query_pro)) {
       ?>
<form action="cart.php?action=add&masp=<?php echo $row_pro['masp']; ?>" method="POST">
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
            <button type="submit" name="add" class="add-cart">+ Add To Cart</button>
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
</form>
<?php
    }
?>
<style>
    .product__filter .product__item .product__item__text button
 {
    font-size: 15px;
    color: #e53637;
    font-weight: 700;
    position: absolute;
    left: 0;
    top: -35px;
    opacity: 0;
    visibility: hidden;
    -webkit-transition: all, 0.5s;
    -o-transition: all, 0.5s;
    transition: all, 0.5s;
    text-decoration: none;
    border: none;
    cursor: pointer;
    background: none;
    font-family: "Nunito Sans", sans-serif;
}

.product__filter .product__item:hover .product__item__text button
 {
    opacity: 1;
    visibility: visible;
    top: 0px;
}
</style>
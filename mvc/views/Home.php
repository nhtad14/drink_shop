<?php 
$cart = (isset($_SESSION['cart']))?$_SESSION['cart']:[]; 
?>
<?php 
 $tong=0;
 $total=0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
        integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="./assets/css/Home.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/base.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.2.1-web/css/all.min.css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Drink_shop</title>
    <link rel="icon" href="https://tse4.mm.bing.net/th?id=OIP.Pj8lRTFFDP-D8OKLNWuRkgHaHa&pid=Api&P=0"
        type="image/x-icon" />

</head>

<body>
    <div class="app">
        <!-- Header -->
        <?php 
        include './mvc/views/pages/header.php';
        ?>
        <div class="app__container">
            <!-- Slider -->
            <?php 
            include './mvc/views/pages/slider.php';
            ?>
            <!-- Slider -->
            <!-- Sản phẩm Mới -->
            <div class="grid">
                <div class="header_product-news">
                    <h1 class="header_product-name">Sản phẩm mới</h1>
                    <div class="header_product-underline"></div>
                    <div class="home-product">
                        <div class="grid__row">
                            <!--Products  items-->

                            <?php 
                            while($row = mysqli_fetch_array($data["SP"])) {?>
                            <div class="grid__column-2-4">
                                <a class="home-product-item" href="Detail?id=<?php echo $row['id_product']; ?>">
                                    <div class="home-product-item__img"
                                        style="background-image: url(./assets/img/products/<?php echo $row["img_product"]; ?>)">
                                    </div>
                                    <h4 class="home-product-item__name">
                                        <?php echo $row["name_product"]; ?>
                                    </h4>
                                    <div class="home-product-item__price">
                                        <!-- <span class="home-product-item__price-old"></span> -->
                                        <span style="margin-left :0" class="home-product-item__price-new">
                                            <?php echo number_format($row['price']) ?>(VND)
                                        </span>
                                    </div>
                                    <div class="home-product-item__action">
                                        <span class="home-product-item__like home-product-item__like--liked">
                                            <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                            <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                        </span>
                                        <div class="home-product-item__rateting">
                                            <i class="home-product-item__rateting-gold fa-solid fa-star"></i>
                                            <i class="home-product-item__rateting-gold fa-solid fa-star"></i>
                                            <i class="home-product-item__rateting-gold fa-solid fa-star"></i>
                                            <i class="home-product-item__rateting-gold fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="home-product-item__origin">
                                        <span class="home-product-item__brand">
                                            <?php echo $row["name_category"]; ?>
                                        </span>
                                        <span class="home-product-item__origin-name">
                                            <?php echo $row["origin"]; ?>
                                        </span>
                                    </div>
                                    <div class="home-product-item__favourite">
                                        <i class="fa-solid fa-check"></i>
                                        <span>Yêu thích</span>
                                    </div>
                                    <div class="home-product-item__sale">
                                        <span class="home-product-item__labels">NEW</span>
                                    </div>
                                </a>
                            </div>

                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- Sản phẩm giảm giá -->
                <div class="header_product-news">
                    <h1 class="header_product-name">Sản phẩm giảm giá</h1>
                    <div class="header_product-underline"></div>
                    <div class="home-product">
                        <div class="grid__row">
                            <!--Products  items-->
                            <?php 
                            $tong = 0.1;
                            while($row = mysqli_fetch_array($data["ListSP"])) {?>
                            <div class="grid__column-2-4">
                                <a class="home-product-item" href="Detail?id=<?php echo $row['id_product']; ?>">
                                    <div class="home-product-item__img"
                                        style="background-image: url(./assets/img/products/<?php echo $row['img_product']; ?>)">
                                    </div>
                                    <h4 class="home-product-item__name">
                                        <?php echo $row["name_product"]; ?>
                                    </h4>
                                    <div class="home-product-item__price">
                                        <span class="home-product-item__price-old">
                                            <?php echo number_format($row['price']) ?>
                                        </span>
                                        <span class="home-product-item__price-new">
                                            <?php echo number_format ($row['price'] -($row['price'] *$tong))?>VND
                                        </span>
                                    </div>
                                    <div class="home-product-item__action">
                                        <span class="home-product-item__like home-product-item__like--liked">
                                            <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                            <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                        </span>
                                        <div class="home-product-item__rateting">
                                            <i class="home-product-item__rateting-gold fa-solid fa-star"></i>
                                            <i class="home-product-item__rateting-gold fa-solid fa-star"></i>
                                            <i class="home-product-item__rateting-gold fa-solid fa-star"></i>
                                            <i class="home-product-item__rateting-gold fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="home-product-item__origin">
                                        <span class="home-product-item__brand">
                                            <?php echo $row["name_category"]; ?>
                                        </span>
                                        <span class="home-product-item__origin-name">
                                            <?php echo $row["origin"]; ?>
                                        </span>
                                    </div>
                                    <div class="home-product-item__favourite">
                                        <i class="fa-solid fa-check"></i>
                                        <span>Yêu thích</span>
                                    </div>
                                    <div class="home-product-item__sale">
                                        <span class="home-product-item__percent">10%</span>
                                        <span class="home-product-item__label">SALE</span>
                                    </div>
                                </a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <!-- Chính sách -->
                <?php 
                include './mvc/views/pages/policy.php';
                ?>
                <div class="" style="height: 10px;"></div>
            </div>
        </div>
        <!-- Footer -->
        <?php 
        include './mvc/views/pages/footer.php';
        ?>
        <!-- Footer -->

        <?php 
        // include './mvc/views/login.php';
        ?>
        <!-- Modal layout -->
        <!-- </div> -->

</body>

</html>
<style>
.home-product-item__img {
    background-size: auto 100%;
    background-position: center;
}

.header_product-name {
    width: 16ch;
    overflow: hidden;
    white-space: nowrap;
    border-right: 2px solid var(--primary-color);
    animation: typing 3s steps(52), blink step-end 0.5s infinite alternate;
}

@keyframes typing {
    from {
        width: 0;
    }
}

@keyframes blink {
    50% {
        border-color: transparent;
    }
}

.form_find {
    width: 100%;
}

.header__cart-items-remote {
    margin-left: 12px;
}

.header__cart-items-remote a {
    text-decoration: none;
    color: #535252;
}

.header__cart-items-remote a:hover {
    color: var(--primary-color);
}

.header__cart-no-img {
    width: 54%;
    display: inline-block;
}

.header__navbar-link {
    text-decoration: none;
    color: var(--white-color);
}

.header__cart-list-no-cart-msg {
    display: block;
}
</style>
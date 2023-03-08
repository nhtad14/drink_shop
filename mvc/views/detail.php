<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
        integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/detail.css" />
    <link rel="stylesheet" href="./assets/css/base.css" />
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
        <?php 
        include './mvc/views/pages/header.php';
        ?>
        <div class="app__container">
            <div class="grid">
                <div class="grid__row app__content">
                    <div class="grid__column-2">
                        <nav class="category">
                            <h3 class="category__heading">Danh Mục</h3>
                            <ul class="category-list">
                                <li class="category-item ">
                                    <a href="Product" class="category-item__link">TẤT CẢ
                                        SẢN PHẨM</a>
                                </li>
                                <li class="category-item ">
                                    <a href="Product?id_category=1" class="category-item__link">FANTA</a>
                                </li>
                                <li class="category-item">
                                    <a href="Product?id_category=2" class="category-item__link">COCACOLA</a>
                                </li>
                                <li class="category-item">
                                    <a href="Product?id_category=3" class="category-item__link">SPRITE</a>
                                </li>
                                <li class="category-item">
                                    <a href="Product?id_category=4" class="category-item__link">PEPSI</a>
                                </li>
                            </ul>
                        </nav>

                    </div>
                    <div class="grid__column-10">
                        <!--Products  -->
                        <?php 
                        $row = mysqli_fetch_array($data["product_detail"])
                         ?>
                        <div class="home__product">
                            <!--Products  detail-->

                            <div class="home__product-img-detail">
                                <img src="./assets/img/products/<?php echo $row["img_product"]; ?>" alt=""
                                    class="home__product-img">
                                <img src="./assets/img/products/<?php echo $row["img_product"]; ?>" alt=""
                                    class="home__product-img-items">
                            </div>
                            <div class="home__product-info">
                                <h1 class="home__product-name"><?php echo $row["name_product"]; ?></h1>
                                <p class="home__product-describe">Mô tả ngắn:</p>
                                <p class="home__product-describe-items"><?php echo $row["describe"]; ?></p>
                                <p class="home__product-describe">Chi tiết:</p>
                                <p class="home__product-describe-items">Sản phẩm : <?php echo $row["name_category"]; ?>
                                </p>
                                <p class="home__product-describe-items">Xuất Xứ : Việt Nam </p>
                                <div class="home-product-item__prices">
                                    <span class="home-product-item__old"></span>
                                    <span
                                        class="home-product-item__new"><?php echo number_format ($row["price"] )?>(VND)</span>
                                </div>
                                <a href="Cart?id=<?php echo $row["id_product"]; ?>">
                                    <button class="home__product-add btn btn--primary"> Thêm giỏ hàng
                                    </button></a>
                                <!-- Bao gồm thư viện SweetAlert2 -->

                            </div>
                        </div>
                    </div>
                    <h1 class="header_product-name">Gợi ý cho bạn ! </h1>
                    <div class="header_product-underline"></div>
                    <div class="grid">
                        <div class="grid__row">
                            <!--Products  -->
                            <?php 
                            while($row = mysqli_fetch_array($data["detail"])) {?>
                            <div class="grid__column-2-4">
                                <a class="home-product-item" href="Detail?id=<?php echo $row["id_product"]; ?>">
                                    <div class="home-product-item__img"
                                        style="background-image: url(./assets/img/products/<?php echo $row["img_product"]; ?>)">
                                    </div>
                                    <h4 class="home-product-item__name"><?php echo $row["name_product"]; ?></h4>
                                    <div class="home-product-item__price">
                                        <span class="home-product-item__price-old"></span>
                                        <span
                                            class="home-product-item__price-new"><?php echo number_format($row['price']) ?>(VND)</span>
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
                                        <span
                                            class="home-product-item__brand"><?php echo $row["name_category"]; ?></span>
                                        <span
                                            class="home-product-item__origin-name"><?php echo $row["origin"]; ?></span>
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
                <div class="" style="height: 10px;"></div>

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

        <!-- Modal layout -->
    </div>
</body>

</html>
<style>
.home-product-item__img {
    background-size: auto 100%;
    background-position: center;
}

.home__product-info a {
    text-decoration: none;
}

.home-product-item__new,
.home-product-item__price-new {
    margin-left: 0;
}

.category-item {
    margin-right: 20px;
}

.category-item__link {
    text-decoration: none;
    padding: 10px;
    display: block;
    position: relative;
}

.category-item__link:after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 2px;
    background-color: var(--primary-color);
    transform: scaleX(0);
    transition: transform 0.3s ease-in-out;
}

.category-item__link:hover:after {
    transform: scaleX(1);
}

.header__cart-list-no-cart-msg {
    display: block;
}
</style>
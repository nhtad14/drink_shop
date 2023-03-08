<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
        integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/product.css" />
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
                                <!-- category-item--active -->
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
                        <div class="home-flilter">
                            <span class="home-flilter_label">Sắp xếp theo</span>
                            <button class="btn home-flilter__btn">Phổ biến</button>
                            <button class="btn home-flilter__btn btn--primary">Mới nhất</button>
                            <button class="btn home-flilter__btn">Bán chạy</button>
                            <div class="select-input">
                                <span class="select-input__label">Giá</span>
                                <i class="fa-solid fa-angle-down"></i>
                                <ul class="select-input__list">
                                    <li class="select-input__item">
                                        <a href="Search_price?id=ASC" class="select-input__link">Giá thấp đến
                                            cao</a>
                                    </li>
                                    <li class="select-input__item">
                                        <a href="Search_price?id=DESC" class="select-input__link">Giá cao đến
                                            thấp</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="home-flilter__pages">
                                <span class="home-flilter__pages-num">
                                    <span class="home-flilter__pages-curent">1</span>/2
                                </span>
                                <div class="home-flilter__page-control">
                                    <a href="" class="home-flilter__page-btn home-flilter__page-btn--disnable">
                                        <i class=" fa-solid fa-angle-left"></i>
                                    </a>
                                    <a href="" class="home-flilter__page-btn">
                                        <i class=" fa-solid fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="home-product">
                            <div class="grid__row">
                                <?php 
                        while ($row = mysqli_fetch_array($data['Allproducts'])) { ?>
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="Detail?id=<?php echo $row['id_product']; ?>">
                                        <div class="home-product-item__img"
                                            style="background-image: url(./assets/img/products/<?php echo $row["img_product"];?>);">
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
                                            <span class="home-product-item__percent">10%</span>
                                            <span class="home-product-item__label">SALE</span>
                                        </div>
                                    </a>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>

                </div>
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
.grid__column-2-4 {
    padding: 0px 5px;
}

.home-product-item__price-new {
    margin-left: 0px;
}

.header__card-list--no-cart .header__cart-no-img,
.header__card-list--no-cart .header__cart-list-no-cart-msg {
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.home-product-item__img {
    background-size: auto 100%;
    background-position: center;
}

.header__cart-no-img {
    width: 54%;
    display: inline-block;
}

.category-item {
    margin-right: 20px;
}

.category-item__link:hover .category-item__link::before {
    right: -4px;
    color: var(--primary-color);
}

.category-item__link {
    text-decoration: none;
    padding: 8px;
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

.header__cart-items-remote {
    font-size: 0.8rem;
    margin-left: 12px;

}
</style>
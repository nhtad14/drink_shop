<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
        integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/contact.css" />
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
                                    <a href="#" class="category-item__link">Thông tin
                                        cá nhân</a>
                                </li>
                                <li class="category-item ">
                                    <a href="change_password" class="category-item__link">Đổi mật khẩu</a>
                                </li>
                                <li class="category-item">
                                    <a href="order_list" class="category-item__link">Thông
                                        tin đơn hàng</a>
                                </li>
                                <li class="category-item">
                                    <a href="Login" class="category-item__link">Đăng
                                        xuất</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="grid__column-10">
                        <div class="contact">
                            <h1 class="contact__name">Thông tin của bạn </h1>
                            <?php 
                            $username=  $_COOKIE["username"];
                            $email=  $_COOKIE["email"];
                            $phone=  $_COOKIE["phone"];
                            $address=  $_COOKIE["address"];
                            ?>
                            <form method="POST" action="User_update">
                                <div class="contact__form">
                                    <p>Dưới đây là thông tin của bạn , nếu sai hãy sửa lại nhé !</p>
                                    <hr>
                                    <label for="email"><b>Tài khoản</b></label>
                                    <input class="contact__input ative none" type="text" name="account"
                                        value="<?php echo $username ?> " required>

                                    <label for="email"><b>Email</b></label>
                                    <input class="contact__input ative" type="text" name="email"
                                        value="<?php echo $email ?> " pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                                        required>

                                    <label for="phone"><b>SDT</b></label>
                                    <input class="contact__input ative" type="text" name="phone"
                                        value="<?php echo $phone ?> " pattern="[0-9]{10,11}" required>

                                    <label for="psw"><b>Địa chỉ</b></label>
                                    <input class="contact__input ative" type="text" name="address"
                                        value="<?php echo $address ?> " required>
                                    <div class="clearfix">
                                        <button type="submit_info" name="submit_info"
                                            class="contact__name-btn btn btn--primary">Cập nhật thông tin</button>
                                    </div>
                                </div>
                            </form>
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

.category-item {
    margin-right: 20px;
}

.home-product-item__img {
    background-size: auto 100%;
    background-position: center;
}

.header__cart-no-img {
    width: 54%;
    display: inline-block;
}

.contact {
    background-color: var(--white-color);
    padding: 16px 32px;
    margin: 0 0 10px 0;
    border-radius: 3px;
    box-shadow: 0 2px 2px #e0e0e0;
    height: 640px;
}

.contact__name {
    color: var(--primary-color);
    font-size: 1.4rem;
}

.contact__lists {
    list-style: none;
    padding-left: 0;
}


.contact__lists-items-descretion {
    text-decoration: none;
    color: var(--text-color);
    cursor: pointer;
}

.none {
    cursor: none;
}

.ative {
    background-color: #f2f2f2;
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
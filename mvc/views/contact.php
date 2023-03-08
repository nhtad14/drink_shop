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
            <!-- Sản phẩm Mới -->
            <div class="grid">
                <div class="grid__row">
                    <div class="grid__column-2-1">
                        <div class="contact">
                            <h1 class="contact__name">Thông tin liên hệ </h1>
                            <ul class="contact__lists">
                                <li class="contact__lists-items">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <a href="#" class="contact__lists-items-descretion"><b>Đia chỉ :</b> Ngõ 91 Cầu diễn
                                        , Nam
                                        Từ Liêm , Hà Nội</a>
                                </li>
                                <li class="contact__lists-items">
                                    <i class="fa-solid fa-phone"></i>
                                    <a href="tel:0971928645" class="contact__lists-items-descretion"><b>Hotline
                                            :</b>097.192.8645</a>
                                </li>
                                <li class="contact__lists-items">
                                    <i class="fa-solid fa-envelope"></i>
                                    <a href="mailto:lnhat3333@gmail.com"
                                        class="contact__lists-items-descretion"><b>Email
                                            :</b>lnhat3333@gmail.com</a>
                                </li>
                            </ul>
                            <div class="contact-map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.7103430657407!2d105.74660802868667!3d21.044272847827454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454ec40f7208f%3A0x196126c462692572!2zTmfDtSA5MSBD4bqndSBEaeG7hW4sIEtp4buBdSBNYWksIFBow7pjIERp4buFbiwgQuG6r2MgVOG7qyBMacOqbSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1676565496158!5m2!1svi!2s"
                                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="grid__column-2-1">
                        <div class="contact">
                            <h1 class="contact__name">Đăng kí liên hệ </h1>

                            <form method="POST" action="Add_contact">
                                <div class="contact__form">
                                    <p>Xin hãy nhập biểu mẫu bên dưới để liên hệ.</p>
                                    <hr>
                                    <label for="email"><b>Email</b></label>
                                    <input class="contact__input" type="text" placeholder="Nhập Email" name="email"
                                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>

                                    <label for="phone"><b>SDT</b></label>
                                    <input class="contact__input" type="text" placeholder="Nhập số điện thoại"
                                        name="phone" pattern="[0-9]{10,11}" required>

                                    <label for="psw"><b>Địa chỉ</b></label>
                                    <input class="contact__input" type="text" placeholder="Nhập địa chỉ" name="address"
                                        required>

                                    <label for="note"><b>Nhập nội dung </b></label>
                                    <input class="contact__input" type="text" placeholder="Nhập nội dung" name="note"
                                        required>
                                    <div class="clearfix">
                                        <button type="submit" name="submit"
                                            class="contact__name-btn btn btn--primary">Liên Hệ</button>
                                    </div>
                                </div>
                            </form>
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
    </div>
</body>

</html>
<style>
.header__cart-list-no-cart-msg {
    display: block;
}
</style>
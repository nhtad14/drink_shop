<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
        integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="./assets/css/news.css" />
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
        <?php 
        include './mvc/views/pages/header.php';
        ?>
        <div class="app__container">
            <!-- Sản phẩm Mới -->
            <div class="grid">
                <div class="header__content">
                    <h1 class="header__content-label">Tin tức</h1>
                </div>
                <?php 
                 while($row = mysqli_fetch_array($data["New"])) {?>

                <div class="header__content-baner">
                    <img src="<?php echo $row["img_news"]; ?>" alt="" class="header__content-img">
                    <div class="header__content-list">
                        <span class="header__content-items"><?php echo $row["name_news"]; ?></span>
                        <span class="header__content-detail"> <?php echo $row["content_news"]; ?></span>
                        <button class="header__content-btn btn btn--primary">Đọc thêm</button>
                    </div>
                </div>
                <?php } ?>
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
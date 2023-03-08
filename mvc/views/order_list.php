<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
        integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/contact.css" />
    <link rel="stylesheet" href="./assets/css/Home.css" />
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
                                    <a href="user" class="category-item__link">Thông tin
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
                            <h1 class="contact__name">Danh sách đơn hàng của bạn </h1>
                            <div class="contact__form">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Khách hàng</th>
                                            <th>SDT</th>
                                            <th>Địa chỉ</th>
                                            <th>Thanh toán</th>
                                            <th>Ngày đặt hàng</th>
                                            <th>Tổng tiền (+30k ship)</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;
                                    $ship = 30000; ?>
                                        <?php  while($row = mysqli_fetch_array($data["order"])) {?> <tr>
                                            <td><?php echo $i++ ?> </td>
                                            <td> <?php echo $row["account"]; ?></td>
                                            <td> <?php echo $row["phone"]; ?></td>
                                            <td> <?php echo $row["address"]; ?> </td>
                                            <td> <?php echo $row["payment"]; ?></td>
                                            <td> <?php echo $row["order_date"]; ?></td>
                                            <td><?php echo number_format($row["total_price"] + $ship); ?>(VND)</td>
                                            <td><a href="order_view&id_order=<?php echo $row["id_order"]; ?>"><i
                                                        class="view_cart fa-solid fa-eye"></a></i>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        <!-- Thêm các dòng khác tương tự -->
                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>

                </div>
                <?php 
                include './mvc/views/pages/policy.php';
                ?>
                <div class="" style=" height: 10px;">
                </div>
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
.contact__form {
    height: 55vh;
    /* cuộn  */
    overflow-y: auto;
}

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

.ative {
    background-color: #f2f2f2;
}

.contact {
    background-color: var(--white-color);
    padding: 16px 32px;
    margin: 0 0 10px 0;
    border-radius: 3px;
    box-shadow: 0 2px 2px #e0e0e0;
    height: 640px;
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

table {
    border-collapse: collapse;
    border: 1px solid #ddd;
    width: 100%;
}

th {
    background-color: #f2f2f2;
    color: #333;
    font-weight: bold;
    padding: 8px;
    text-align: left;
    border: 1px solid #ddd;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

tr:nth-child(odd) {
    background-color: #fff;
}

td,
th {
    border: 1px solid #ddd;
    padding: 8px;
}

th:first-child,
td:first-child {
    width: 3%;
}

th:nth-child(2),
td:nth-child(2) {
    width: 15%;
}

th:nth-child(3),
td:nth-child(3) {
    width: 10%;
}

th:nth-child(4),
td:nth-child(4) {
    width: 30%;
}

th:nth-child(5),
td:nth-child(5) {
    width: 8%;
}

th:nth-child(6),
td:nth-child(6) {
    width: 15%;
}

th:nth-child(7),
td:nth-child(7) {
    width: 15%;
}

th:last-child,
td:last-child {
    width: 10%;
}

.view_cart {
    padding-left: 10px;
    position: relative;
    display: inline-block;
    cursor: pointer;
}

.view_cart:hover {
    color: var(--primary-color);
}

.header__cart-list-no-cart-msg {
    display: block;
}
</style>
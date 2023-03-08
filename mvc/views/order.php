<?php 
// // session_start();
$cart = (isset($_SESSION['cart']))?$_SESSION['cart']:[]; 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $account=$_POST['account'];
                    $phone=$_POST['phone'];
                    $address=$_POST['address'];
                    $payment=$_POST['payment'];
    $conn = new mysqli('localhost','root','','drink_shop');
    $sql = "INSERT INTO `oders`(`id_order`, `account`, `phone`, `address`, `payment`,`order_date`) 
                                VALUES (NULL,'$account','$phone','$address','$payment',NOW())";
    $result = mysqli_query($conn,$sql) ;
    if($result){
        $id = mysqli_insert_id($conn);
        foreach($cart as  $cart){
        $tong =0;
        $tong += $cart['price'] * $cart['quantity'];
        $sql_query = "INSERT INTO `order_detail`(`id`, `name_product`, `img_product`, `quantity`, `price`) 
                VALUES ('$id','$cart[name]','$cart[img]','$cart[quantity]','$tong')";
         $result = mysqli_query($conn,$sql_query) ;
        }
        unset($_SESSION['cart']);        
        echo '<script>alert("Đặt hàng thành công!");</script>';
        echo '<script>window.location = "Home";</script>';
    }
}                             
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
        integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/order.css" />
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
        <div class="app__container">

            <div class="grid">
                <a class="link_options" href="Home">
                    <h1 class="logo_name">Drink Shop</h1>
                </a>
                <a class="link_options" href="Home"><span class="directional_home">Tiếp tục
                        mua sắm</span> /</a>
                <a class="link_options" href=""><span class="directional_cart">Thanh Toán</span></a>
                <div class="grid__row">
                    <div class="grid__column-2-1">
                        <div class="contact">
                            <h1 class="contact__name">Sản phẩm trong giỏ </h1>
                            <ul class="contact__lists">
                                <?php $tong =0; ?>
                                <?php foreach ($cart as $cart):{
                                $tong += $cart['price'] * $cart['quantity'];
                                }   
                                 ?>
                                <li class="header__cart-items">
                                    <img src="./assets/img/products/<?php echo $cart["img"]; ?>" alt=""
                                        class="header__cart-items-img">
                                    <div class="header__cart-items-info">
                                        <div class="header__cart-items-head">
                                            <h5 class="header__cart-items-name">
                                                <?php echo $cart['name']?>
                                            </h5>
                                            <div class="header__cart-items-price-wrap">
                                                <span class="header__cart-items-price">
                                                    <?php echo number_format($cart['price'])?>
                                                </span>
                                                <span class="header__cart-items-multiply">x</span>
                                                <span class="header__cart-items-quantiti">
                                                    <?php echo $cart['quantity']?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php endforeach;?>
                            </ul>
                            <div class="money__information">
                                <ul class="money__information-list">
                                    <li class="money__information-items">
                                        <h3 class="money__information-name">Tạm tính</h3>
                                        <span class="money__information-label"><?php echo number_format($tong)  ;?>
                                            (VND)</span>
                                    </li>
                                    <li class="money__information-items">
                                        <h3 class="money__information-name">Phí vận chuyển</h3>
                                        <?php 
                                        $ship = 30000;
                                        ?>
                                        <span
                                            class="money__information-label"><?php echo number_format($ship)  ;?>(VND)</span>
                                    </li>
                                </ul>
                                <ul class="money__information-list">
                                    <li class="money__information-items">
                                        <h3 class="money__information-name">Tổng tiền</h3>
                                        <h3 class="money__information-name"><?php echo number_format($tong + $ship)  ;?>
                                            (VND)</h3>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="grid__column-2-1">
                        <div class="contact">
                            <h1 class="contact__name">Thông tin giao hàng </h1>
                            <?php 
                            $username=  $_COOKIE["username"];
                            $phone=  $_COOKIE["phone"];
                            $address=  $_COOKIE["address"];
                            ?>
                            <form method="POST" action="Order">
                                <div class="contact__form">
                                    <p>Vui lòng kiểm tra thông tin chính xác trước khi đặt hàng !</p>
                                    <hr>
                                    <label for="email"><b>Tên</b></label>
                                    <input class="contact__input ative" type="text" placeholder="" name="account"
                                        value="<?php echo $username ?>" required>

                                    <label for="phone"><b>SDT</b></label>
                                    <input class="contact__input ative" type="text" placeholder="" name="phone"
                                        value="<?php echo $phone ?>" required>

                                    <label for="psw"><b>Địa chỉ</b></label>
                                    <input class="contact__input ative" type="text" placeholder="" name="address"
                                        value="<?php echo $address ?>" required>

                                    <label for="note"><b>Phương thức thanh toán </b></label>
                                    <div class="moment__option">
                                        <div class="moment__option-list">
                                            <input class="moment__option-input" type="radio" id="option1" name="payment"
                                                value="COD" checked>
                                            <i class="moment__option-icon fa-solid fa-money-check-dollar"></i>
                                            <label class="moment__option-name" for="option1"><b>Thanh toán khi giao hàng
                                                    (COD) </b></label>
                                        </div>
                                        <div class="moment__option-list">
                                            <input class="moment__option-input" type="radio" id="option2" name="payment"
                                                value="online">
                                            <i class="moment__option-icon fa-sharp fa-solid fa-building-columns"></i>
                                            <label class="moment__option-name" for="option2"><b>Thanh toán online
                                                    (momo/zalopay)
                                                </b></label>
                                        </div>
                                    </div>
                                    <div class="contact__note">
                                        <span class="contact__note-desc">
                                            Lưu ý :Nhập địa chỉ đúng để shop giao hàng đến quý khách sớm nhất!<br>
                                        </span>
                                    </div>
                                    <div class="clearfix">
                                        <button type="submit" name="submit"
                                            class="contact__name-btn btn btn--primary">Đặt
                                            hàng</button>
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
/* Container */
.app__container {
    background-color: #F5F5F5;
    margin-top: 2px;
}

.app__content {
    padding-top: 40px;
}

/* Contact */
.contact {
    background-color: var(--white-color);
    padding: 16px 32px;
    margin: 10px 0;
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
    height: 35vh;
    overflow-y: auto;
}




h1,
label {
    color: var(--primary-color);
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}


/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 16px;
    background-color: #f44336;
}

.contact__form {
    display: block;
}

.contact__input {
    width: 100%;
    padding: 15px;
    box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2);
    border-radius: 15px;
    border: none;
    border: 0;
    margin: 5px 0 22px 0;

}

.contact__name-btn {
    margin-top: 16px;
    float: inline-end;
}

.money__information-list {
    list-style: none;
    padding-left: 0;
}

.money__information-items {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.money__information-name {
    font-size: 1.2rem;
    color: #756F6E;
    font-weight: 500;
    margin: 8px 0;
}

.money__information-label {
    color: var(--primary-color);
    font-size: 1.1rem;
}

.money__information {
    margin-top: 44px;
    border-top: 2px solid #f1f1f1;
}

.moment__option {
    display: flex;
}

.moment__option-list {
    margin-top: 8px;
    border: 1px solid #f1f1f1;
    align-items: center;
    flex: 1;
    margin: 8px;
    box-shadow: 4px 4px 10px rgb(0 0 0 / 20%);
    border-radius: 15px;
}

.moment__option-name {
    line-height: 3.3rem;
    font-size: 1.1rem;
    font-weight: 400;
    cursor: pointer;
}

.moment__option-input {
    margin: 0 16px;
}

.moment__option-icon {
    color: var(--primary-color);
    font-size: 1.3rem;
}

.contact__note-desc {
    color: var(--primary-color);
    font-size: .8rem;
}

.link_options {
    text-decoration: none;

}

.directional_cart {
    color: var(--primary-color);
}

.directional_home {
    color: var(--text-color);

}

.logo_name {
    margin: 0 0 12px 0;
    padding-top: 24px;
}

.ative {
    background-color: #f2f2f2;
}
</style>
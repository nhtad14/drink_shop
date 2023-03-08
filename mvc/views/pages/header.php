<?php 
$cart = (isset($_SESSION['cart']))?$_SESSION['cart']:[]; 
?>
<?php 
 $tong=0;
 $total=0;
?>
<header class="header">
    <div class="grid">
        <nav class="header__navbar">
            <ul class="header__navbar-list">
                <li class="header__navbar-item header__nav-hover header__navbar-item--separate">
                    Vào cửa hàng Nhật Long
                    <div class="header_qr">
                        <img src="./assets/img/qr_code.png" alt="Qr code" class="header__qr-img" />
                        <div class="header__qr-apps">
                            <a href="" class="header__qr-link"><img src="./assets/img/google_play.png" alt=""
                                    class="header__qr_dowload" /></a>
                            <a href="" class="header__qr-link">
                                <img src="./assets/img/app_store.png" alt="" class="header__qr_dowload" /></a>
                        </div>
                    </div>
                </li>
                <li class="header__navbar-item">
                    <span class="no-poiter">Kết Nối</span>
                    <a href="" class="header__navbar-icon--link"><i
                            class="header__navbar-icon fa-brands fa-facebook"></i></a>
                    <a href="" class="header__navbar-icon--link"><i
                            class="header__navbar-icon fa-brands fa-instagram"></i></a>
                </li>
            </ul>
            <ul class="header__navbar-list">
                <li class="header__navbar-item">
                    <a href="#" class="header__navbar-item-link">
                        <a href="Home" class="header__navbar-icon--link"><i
                                class="header__navbar-icon fa-solid fa-house"></i></a>
                        Trang Chủ</a>
                </li>
                <li class="header__navbar-item header__navbar-products">
                    <a href="" class="header__navbar-item-link">
                        <a href="Product" class="header__navbar-icon--link"><i
                                class="header__navbar-icon fa-solid fa-wine-bottle"></i></a>
                        Sản Phẩm
                    </a>
                    <ul class="header__navbar-products-menu">
                        <li class="header__nav-products-item">
                            <a href="Product?id_category=1">FANTA</a>
                        </li>
                        <li class="header__nav-products-item ">
                            <a href="Product?id_category=2">COCACOLA</a>
                        </li>
                        <li class="header__nav-products-item ">
                            <a href="Product?id_category=3">SPRITE</a>
                        </li>
                        <li class="header__nav-products-item ">
                            <a href="Product?id_category=4">PEPSI</a>
                        </li>
                    </ul>
                </li>
                <li class="header__navbar-item">
                    <a href="" class="header__navbar-item-link">
                        <a href="News" class="header__navbar-icon--link"><i
                                class="header__navbar-icon fa-solid fa-address-book"></i>
                            Tin Tức</a></a>
                </li>
                <li class="header__navbar-item">
                    <a href="" class="header__navbar-item-link">
                        <a href="Contact" class="header__navbar-icon--link"><i
                                class="header__navbar-icon fa-solid fa-address-card"></i>
                            Liên Hệ</a></a>
                </li>
                <li class="header__navbar-item header__navbar-item-link-hover">
                    <a href="" class="header__navbar-item-link">
                        <a href="" class="header__navbar-icon--link"><i
                                class="header__navbar-icon fa-solid fa-bell"></i></a>
                        Thông Báo</a>
                    <div class="header__notify">
                        <header class="header__notify-header">
                            <h3>Thông Báo Mới Nhận</h3>
                        </header>
                        <ul class="header__notify-list">

                            <?php 
                                    while($row = mysqli_fetch_array($data["Notifi"])) {?>
                            <li class="header__notify-items header__notify-items--viewd">
                                <a href="" class="header__notify-link">
                                    <img src="./assets/img/logo/<?php echo $row["img"]; ?>" alt=""
                                        class="header__header-img" />
                                    <div class="header__notify-info">
                                        <span class="header__notify-name"><?php echo $row["name_notifi"]; ?></span>
                                        <span class="header__notify-descrition"><?php echo $row["content"]; ?></span>
                                    </div>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                        <footer class="header__notify-footer">
                            <a href="" class="header__notify-footer-btn">Xem Tất Cả</a>
                        </footer>
                    </div>
                </li>
                <!-- Đăng kí , Đăng Nhập -->
                <?php 
                    if(isset($_COOKIE["username"])) {
                        // Hiển thị tên đăng nhập
                        $username=  $_COOKIE["username"];
                        echo "<li class='header__navbar-item header__navbar-user'>
                        <img src='https://tse2.mm.bing.net/th?id=OIP._BXCcqxwmsduYNCJj2XDtgHaHa&pid=Api&P=0' alt=''
                        class='header__navbar-user-img'>
                        <span class='header__navbar-user-name'>$username</span>
                        <ul class='header__navbar-user-menu'>
                        <li class='header__nav-user-item'>
                        <a href='User'>Tài khoản của tôi</a>
                        </li>
                        <li class='header__nav-user-item '>
                        <a href='Login'>Đăng xuất</a>
                        </li>
                        
                        </ul>
                        </li>";
                    } else {
                        // Hiển thị form đăng nhập
                        echo "
                            <li class='header__navbar-item header__nav-item--strong'>
                            <a class='header__navbar-link' href='Login'>Đăng nhập</a>
                            </li>";
                    } 
                ?>
            </ul>
        </nav>
        <!-- Header search -->
        <div class="header-with-search">
            <div class="header__logo">
                <a href="Home" class="header__logo-link">
                    <!-- <img src="./assets/img/logo-full-white.png" alt="" class="header__logo-img"> -->
                    <H1 class="logo">Drink Shop</H1>
                </a>
            </div>
            <form class="form_find" method="GET" action="Search">
                <div class="header__search">
                    <div class="header__search-input-wrap">
                        <input type="text" name="search" class="header__search-input"
                            placeholder="Nhập sản phẩm của bạn.....?">
                        <!-- History search -->
                        <div class="header__search-history">
                            <h3 class="header__search-history-heading">Lịch sử tìm kiếm</h3>
                            <ul class="header__search-history-list">
                                <li class="header__search-history-item">
                                    <a href="#" class="header__search-link">Coca-Cola® Zero Suga</a>
                                </li>
                                <li class="header__search-history-item">
                                    <a href="#" class="header__search-link"> Fanta
                                        Orange</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header__search-select">
                        <span class="header__search-select-laybel">
                            Trong shop
                        </span>
                        <i class="header__search-select-icon fa-solid fa-angle-down"></i>
                        <ul class="header__search-option">
                            <li class="header__search-option-item header__search-option-item--active">
                                <span>Trong shop</span>
                                <i class="fa-solid fa-check"></i>
                            </li>
                            <li class="header__search-option-item">
                                <span>Ngoài shop</span>
                                <i class="fa-solid fa-check"></i>
                            </li>
                        </ul>
                    </div>
                    <button class="header__search-btn" type="find">
                        <i class="header__search-btn-icon fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </form>

            <!-- Cart -->
            <div class="header__card">
                <div class="header__cart-wrap">
                    <i class="header__card-icon fa-solid fa-cart-shopping"></i>
                    <?php foreach ($cart as $row):{
                                 $total += $row['quantity'];
                                }
                    ?>
                    <?php endforeach ?>
                    <span class="header__cart-notice"><?php echo $total?></span>

                    <?php 
                    if(isset($_SESSION['cart'])) {
                        // Hiển thị cart
                        echo '<div class="header__card-list ">
                            <h4 class="header__card-heading">Sản phẩm đã thêm</h4>
                            <ul class="header__cart-list-items">';
                            
                            foreach ($_SESSION['cart'] as $cart) {
                                $tong += $cart["price"] * $cart["quantity"];
                            
                            echo '<li class="header__cart-items">
                                <img src="./assets/img/products/'.$cart["img"].'" alt="" class="header__cart-items-img">
                                <div class="header__cart-items-info">
                                    <div class="header__cart-items-head">
                                        <h5 class="header__cart-items-name">'.$cart["name"].'</h5>
                                        <div class="header__cart-items-price-wrap">
                                            <span class="header__cart-items-price">'.number_format($cart["price"]).'</span>
                                            <span class="header__cart-items-multiply">x</span>
                                            <span class="header__cart-items-quantiti">'.$cart["quantity"].'</span>
                                        </div>
                                    </div>
                                    <div class="header__cart-items-body">
                                        <span class="header__cart-items-description">
                                            Phân loại: '.$cart["name_category"].'
                                        </span>
                                        <div>
                                            <span class="header__cart-items-remote">  
                                                <a href="Cart?id='.$cart["id"].'&action=reduce"><i class="fa-solid fa-minus"></i></a>
                                            </span>
                                            <span class="header__cart-items-remote">  
                                                <a href="Cart?id='.$cart["id"].'&action=plus"><i class="fa-solid fa-plus"></i></a>
                                            </span>
                                            <span class="header__cart-items-remote">  
                                                <a href="Cart?id='.$cart["id"].'&action=delete"><i class="fa-solid fa-trash"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            ';
                        }
                        echo '</ul>
                        <h4 class="header__card-heading" style="float:left">TỔNG:
                            <span style="color:var(--primary-color)">'.number_format($tong).' (VND)</span>
                            </h4>
                            <a href="Order"><button class="header__cart-view btn btn--primary">Thanh toán</button></a>
                        </div>';
                    } else {
                        // Hiển thị cart rỗng
                        echo "<div class='header__card-list '>
                                    <img src='./assets/img/no-cart.png' alt='' class='header__cart-no-img'>
                        <span class='header__cart-list-no-cart-msg'>Chưa có sản phẩm</span>
                    </div>";   
                    } 
                ?>
                </div>
            </div>
        </div>
        <!-- Header search -->
    </div>
</header>
<style>
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

.logo {
    color: var(--white-color);
    font-size: 2.1rem;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

}

.logo:hover {
    color: var(--border-color);
}

.header__logo-link {
    text-decoration: none;

}
</style>
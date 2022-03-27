<?php 
    session_start();
    
    include_once '../Controller/UserController.php';
    include_once '../Controller/CartController.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Importances -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0&appId=1303126910149001&autoLogAppEvents=1" nonce="geF2GnV4"></script>
    <article class="modal">
        <div class="modal-content">
            <section class="modal-content-head">
                <div class="tabs"> 
                    <button class="login-tab">Đăng nhập</button>
                    <button class="reg-tab">Đăng ký</button>
                </div>
                <div class="modal-close">
                    &times;
                </div>
            </section>
            <section class="modal-content-body">
                <article id="reg-tab">
                    <div class="col-50">
                        <div class="tab-body-left">
                            Đăng ký để nhận được nhiều ưu đãi
                        </div>
                    </div>
                    <div class="col-50">
                        <div class="tab-body-right">
                            <form method="post" action="../Controller/RegisterController.php">
                                <div class="input-container">
                                    <label for="fullname">Họ và tên:</label>
                                    <div class="input-box">
                                        <i class="fas fa-user"></i>
                                        <input type="text" name="fullname" id="fullname" placeholder="Họ và tên">
                                    </div>
                                    <div class="input-error" id="fullname-error">
                                        <p>Xin vui lòng nhập lại họ tên</p>
                                    </div>
                                </div>
                                <div class="input-container">
                                    <label for="username">Tên tài khoản:</label>
                                    <div class="input-box">
                                        <i class="fas fa-user"></i>
                                        <input type="text" name="username" id="username" placeholder="Tên tài khoản...">
                                    </div>
                                    <div class="input-error" id="username-error">
                                        <p>Tên tài khoản không được chứa kí tự đặc biệt!</p>
                                    </div>
                                </div>
                                <div class="input-container">
                                    <label for="password">Mật khẩu:</label>
                                    <div class="input-box">
                                        <i class="fas fa-lock"></i>
                                        <input type="password" name="password" id="password" placeholder="Mật khẩu ...">
                                    </div>
                                    <div class="input-error" id="password-error">
                                        <p>Mật khẩu nhiều hơn 4 kí tự</p>
                                    </div>
                                </div>
                                <div class="input-container">
                                    <label for="re-password">Nhập lại mật khẩu:</label>
                                    <div class="input-box">
                                        <i class="fas fa-lock"></i>
                                        <input type="password" name="re-password" id="re-password" placeholder="Mật khẩu ...">
                                    </div>
                                    <div class="input-error" id="repassword-error">
                                        <p>Mật khẩu không trùng nhau</p>
                                    </div>
                                </div>
                                <div class="input-container">
                                    <label for="email">Địa chỉ email:</label>
                                    <div class="input-box">
                                        <i class="fas fa-envelop"></i>
                                        <input type="text" name="email" id="email" placeholder="Địa chỉ email">
                                    </div>
                                    <div class="input-error" id="email-error">
                                        <p>Xin vui lòng nhập lại email</p>
                                    </div>
                                </div>
                                <input type="submit" value="Đăng ký" name="register" id="registerSubmit">
                            </form>
                        </div>
                    </div>
                </article>
                <article id="login-tab">
                    <div class="col-50">
                        <div class="tab-body-left">
                            Đăng nhập để nhận được nhiều ưu đãi
                        </div>
                    </div>
                    <div class="col-50">
                        <div class="tab-body-right">
                            <form method="POST" id="login" action="../Controller/LoginController.php">
                                <div class="input-container">
                                    <label for="login-username">Tên tài khoản:</label>
                                    <div class="input-box">
                                        <i class="fas fa-user"></i>
                                        <input type="text" name="login-username" id="login-username" placeholder="Tên tài khoản...">
                                    </div>
                                    <div class="input-error" id="login-username-error">
                                        <p>Xin nhập tên tài khoản!</p>
                                    </div>
                                </div>
                                <div class="input-container">
                                    <label for="login-password">Mật khẩu:</label>
                                    <div class="input-box">
                                        <i class="fas fa-lock"></i>
                                        <input type="password" name="login-password" id="login-password" placeholder="Mật khẩu ...">
                                    </div>
                                    <div class="input-error" id="login-password-error">
                                        <p>Xin nhập mật khẩu!</p>
                                    </div>
                                </div>
                                <a href="#" id="forgot-password">Bạn quên mật khẩu ?</a>
                                <input type="submit" value="Đăng nhập" id="loginSubmit" name="login">
                            </form>
                        </div>
                    </div>
                </article>
            </section>
        </div>
        <section class="modal-background">
        </section>

    </article>
    <header>
        <article class="header wrapper">
            <!-- <button class="controls">
                <i class="fas fa-list"></i>
            </button> -->
            <section class="logo">
                <a href="./">
                    <!-- <img src="src/img/logo.png" alt="" class="logo-img"> -->
                    <span class="logo-name">Pakage Store</span>
                </a>
            </section>
            <section class="search-form">
                <form action="../Controller/SearchController.php" method="get">
                    <input type="text" name="search">
                    <button>Search</button>
                </form>
            </section>
            <section class="user">
                <article class="user-account" id="head-user">
                    <?php 
                            if(isset($_SESSION['username']) && $_SESSION['success-login'] === 'success') {   
                                $user = getUserByUsername($_SESSION['username']);
                                echo "
                                    <a class='account-method'>
                                    <i class='fas fa-user'></i><span class='cart-inner-txt'>Xin chào {$_SESSION['username']}</span>
                                    </a>
                                    <ul class='user-methods'>
                                        <li class='login-method method'>
                                        <a class='btn'>Đơn hàng của tôi</a>
                                        </li>
                                        <li class='method'>
                                        <a href='user.php?id={$user->getID()}' class='btn'>Tài khoản của tôi</a>
                                        </li>
                                        <li class='method'>
                                        <a class='btn'>Thông báo của tôi</a>
                                        </li>";
                                if($user->getRoleID() == 0) 
                                    echo "<li class='method'>
                                            <a href='admin.php' class='btn'>Thông tin website</a>
                                          </li>";
                                echo "<li class='method'>
                                            <form method='POST'action='../Controller/LoginController.php'>
                                                <button class='btn' name='logout'>Đăng xuất</button>
                                            </form>
                                        </li>
                                    </ul>
                                ";
                            } else {
                            if($_SESSION['success-login'] === 'invalid') {
                                $message = "Tài khoản không tồn tại!";
                                echo "<script type='text/javascript'>alert('$message');</script>";
                                unset($_SESSION['success-login']);
                            } else if($_SESSION['success-login'] === 'wrong-password') {
                                $message = "Sai mật khẩu, vui lòng nhập lại!";
                                echo "<script type='text/javascript'>alert('$message');</script>";
                                unset($_SESSION['success-login']);
                            }
                            echo "
                                <a href='#' class='account-method'>
                                    <i class='fas fa-user'></i><span class='cart-inner-txt'>Tài khoản</span>
                                </a>
                                <ul class='user-methods'>
                                <li class='login-method method'><button id='login-btn' class='btn'>Đăng nhập</button></li>
                                <li class='reg-method method'><button id='reg-btn' class='btn'>Đăng ký</button></li>
                                </ul>
                            ";
                        } 
                    ?>
                </article>
                <article class="user-cart" id="head-cart">
                    <a>
                        <i class="fas fa-shopping-cart"></i>
                        <span class="cart-inner-txt">Giỏ hàng</span>
                        <span class="cart-quantity">
                            <?php 
                                $length = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
                                echo $length;
                            ?>
                        </span>
                    </a>
                    <article class="cart-tab">
                        <div id="on-stock">
                            <ul class="cart-items">
                                <?php
                                    $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
                                    if (count($_SESSION['cart']) > 0) {
                                        for($i = 0; $i < count($_SESSION['cart']); $i++) {
                                                echo 
                                                "<li class='cart-item'>
                                                    <span class='cart-item-name'>{$_SESSION['cart'][$i]['name']}</span>
                                                    <span class='cart-item-quantity'>Số lượng: {$_SESSION['cart'][$i]['quantity']}</span>
                                                    <span class='cart-total-price'>{$_SESSION['cart'][$i]['price']}VNĐ</span>
                                                    <a href='../Controller/CartController.php?index={$i}&method=delete' class='btn cart-item-remove'>X</a>
                                                </li>";
                                        }
                                    } else echo "Đơn hàng trống";
                                ?>
                            </ul>   
                            <div class="cart-details">
                                <a href="#">Xem thêm</a>
                            </div>
                            <table class="cart-table">
                                <tr>
                                    <td class="table-left"><strong>Thành tiền</strong></td>
                                    <td class="table-right"><?php 
                                        $totalPrice = 0;
                                        for($i = 0; $i < count($_SESSION['cart']); $i++) {
                                            $totalPrice += $_SESSION['cart'][$i]['price'];
                                        }

                                        echo $totalPrice." VNĐ";
                                    ?></td>
                                </tr>
                                <tr>
                                    <td class="table-left"><strong>Tổng đơn hàng</strong></td>
                                    <td class="text-right table-right">99999999 VNĐ</td>
                                </tr>
                                <tr>
                                    <td class="table-left"><strong>Tổng tiền phải nạp thêm</strong></td>
                                    <td class="text-right table-right">99999999 VNĐ</td>
                                </tr>
                            </table>
                            <div class="cart-props">
                                <div class="col-50">
                                    <div id="cart-details"><a href="#">Xem chi tiết giỏ hàng</a></div>
                                </div>
                                <div class="col-50">
                                    <div id="cart-add-money" href="#"><a href="#">Nạp tiền</a></div>
                                </div>
                            </div>
                        </div>
                        <div id="no-product">
                            Không có sản phẩm trong giỏ hàng!
                        </div>
                    </article>
                </article>
            </section>
        </article>
    </header>
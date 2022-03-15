<?php 
    include_once('./header.php');
    $id = isset($_GET['id']) ? $_GET['id'] : 'err';
    $user = getUserByID($id);
?>
<div class="container">
        <div class="content">
            <section class="user-wrapper">
                <div class="user-function">
                    <ul class="functions">
                        <li class="function function-active" id="user">
                            <div class="function-icon">
                                <i class="fas fa-info fa-2x"></i>
                            </div>
                            <div class="function-title">
                                <h3>Thông tin cá nhân</h3>
                                <p>Quản lí thông tin cá nhân</p>
                            </div>
                        </li>
                        <li class="function" id="cart">
                            <div class="function-icon"><i class="fas fa-shopping-cart fa-2x" style="color: #F4B845;"></i></div>
                            <div class="function-title">
                                <h3>Quản lí đơn hàng</h3>
                                <p>Quản lí thông tin sản phẩm đã mua</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="user-container">
                    <div id="user-info" class="user-content">
                        <h3 class="content-heading">Thông tin cá nhân</h3>
                        <hr>
                        <div class="content-body">
                            <form class="user-info">
                                <div class="user-input-box">
                                    <label for="name">Họ tên</label>
                                    <?php 
                                        echo "<input type='text' name='name' value='{$user->getFullName()}' disabled>";
                                    ?>
                                </div>
                                <div class="user-input-box">
                                    <label for="username">Tên tài khoản</label>
                                    <?php 
                                        echo "<input type='text' name='username' value='{$user->getUsername()}' disabled>";
                                    ?>
                                </div>
                                <div class="user-input-box">
                                    <label for="email">Email</label>
                                    <?php 
                                        echo "<input type='text' name='email' value='{$user->getEmail()}' disabled>";
                                    ?>
                                </div>
                                <div class="user-input-box">
                                    <label for="phone">Số điện thoại</label>
                                    <?php 
                                        echo "<input type='text' name='phone' value='{$user->getPhone()}' disabled>";
                                    ?>
                                </div>
                                <div class="user-input-box" style="margin-top: 15px;">
                                    <button id="submit-btn" type="submit">Cập nhật</button>
                                    <button id="edit-btn" type="button">Chỉnh sửa</button>
                                    <button id="change-pw-btn" type="button">Đổi password</button>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div id="cart-info" class="user-content">
                        <h3 class="content-heading">Thông tin đơn hàng</h3>
                        <hr>
                        <div class="content-body">
                            <div class="info-msg">
                                <p>
                                    Bạn chưa mua hàng!
                                </p>
                            </div>
                            <div class="cart-info">
                                <div class="cart-info-table">
                                    <div class="cart-table_head">
                                        <div class="cart-table_row">
                                            <div class="cart-table_col-1">
                                                Ngày tạo
                                            </div>
                                            <div class="cart-table_col-2">
                                                Mã đơn hàng
                                            </div>
                                            <div class="cart-table_col-3">
                                                Tên hàng
                                            </div>
                                            <div class="cart-table_col-4">
                                                Tổng cộng
                                            </div>
                                            <div class="cart-table_col-5">
                                                Hành động
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-table_body">
                                        <div class="cart-table_row">
                                            <div class="cart-table_col-1">
                                                99:99:99 - 99/99/9999
                                            </div>
                                            <div class="cart-table_col-2">
                                                9999999
                                            </div>
                                            <div class="cart-table_col-3">
                                                Tên sản phẩm này rất là dài, xin vui lòng bấm xem chi tiết
                                            </div>
                                            <div class="cart-table_col-4">
                                                99999999
                                            </div>
                                            <div class="cart-table_col-5">
                                                <button class="detail-btn">Xem chi tiết</button>
                                            </div>
                                        </div>
                                        <div class="cart-table_row">
                                            <div class="cart-table_col-1">
                                                99:99:99 - 99/99/9999
                                            </div>
                                            <div class="cart-table_col-2">
                                                9999999
                                            </div>
                                            <div class="cart-table_col-3">
                                                Tên sản phẩm này rất là dài, xin vui lòng bấm xem chi tiết
                                            </div>
                                            <div class="cart-table_col-4">
                                                99999999
                                            </div>
                                            <div class="cart-table_col-5">
                                                <button class="detail-btn">Xem chi tiết</button>
                                            </div>
                                        </div>
                                        <div class="cart-table_row">
                                            <div class="cart-table_col-1">
                                                99:99:99 - 99/99/9999
                                            </div>
                                            <div class="cart-table_col-2">
                                                9999999
                                            </div>
                                            <div class="cart-table_col-3">
                                                Tên sản phẩm này rất là dài, xin vui lòng bấm xem chi tiết
                                            </div>
                                            <div class="cart-table_col-4">
                                                99999999
                                            </div>
                                            <div class="cart-table_col-5">
                                                <button class="detail-btn">Xem chi tiết</button>
                                            </div>
                                        </div>
                                        <div class="cart-table_row">
                                            <div class="cart-table_col-1">
                                                99:99:99 - 99/99/9999
                                            </div>
                                            <div class="cart-table_col-2">
                                                9999999
                                            </div>
                                            <div class="cart-table_col-3">
                                                Tên sản phẩm này rất là dài, xin vui lòng bấm xem chi tiết
                                            </div>
                                            <div class="cart-table_col-4">
                                                99999999
                                            </div>
                                            <div class="cart-table_col-5">
                                                <button class="detail-btn">Xem chi tiết</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
</div>
<script src="./js/user.js"></script>
<?php 
    include_once ('./footer.php');
?>
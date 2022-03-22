<?php
include './header.php';
include '../Model/Product.php';

$product = getProductByID($_GET['id']);
?>
<div class="container">
    <div class="content">
        <div class="item">
            <section class="item-details">
                <div class="col-50">
                    <div class="item-imgs">
                        <div class="banner-advertise">
                            <button class="banner-btn banner-btn-left" onclick="pushSlides(-1)">
                                <i class="fas fa-chevron-left fa-3x"></i>
                            </button>
                            <!-- <div class="slider"> -->
                            <img src="./src/img/the-witcher-3.jpeg" alt="advertise image" class="adver-img fade">
                            <img src="./src/img/cyperpunk.jpeg" alt="advertise image" class="adver-img fade">
                            <img src="./src/img/gta-v.jpeg" alt="advertise image" class="adver-img fade">
                            <!-- </div> -->
                            <button class="banner-btn banner-btn-right" onclick="pushSlides(1)">
                                <i class="fas fa-chevron-right fa-3x"></i>
                            </button>
                        </div>
                        <div class="slider-lib">
                            <div class="col-25" onclick="currentSlide(1)">
                                <img src="./src/img/gta-v.jpeg" alt="" class="lib-img">
                            </div>
                            <div class="col-25" onclick="currentSlide(2)">
                                <img src="./src/img/gta-v.jpeg" alt="" class="lib-img">
                            </div>
                            <div class="col-25" onclick="currentSlide(3)">
                                <img src="./src/img/gta-v.jpeg" alt="" class="lib-img">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-50">
                    <div class="item-detail">

                        <h1 class="item-name">
                            <?php
                            echo $product->getName();
                            ?>
                        </h1>
                        <div class="item-evaluate">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div class="item-status">
                            <h4>Tình trạng: <?php
                                                echo $product->getQuantity() > 0 ? 'Còn hàng' : 'Hết hàng';
                                            ?></h4>
                        </div>
                        <div class="item-prices">
                            <p class="item-price">
                                <?php
                                    echo ($product->getSale() == 0 ? $product->getPrice() : $product->getTotalPrice()) . 'VNĐ';
                                ?>
                                <span class="presale-price">
                                    <?php
                                    echo ($product->getSale() == 0 ? '' : $product->getPrice()."VNĐ");
                                    ?>
                                </span>
                                <span class="tag tag-sale">-
                                <?php
                                    echo ($product->getSale() * 100);
                                ?>%
                                </span>
                            </p>
                        </div>
                        <hr style="margin-top: 30px;">
                        <div class="item-quantity">
                            <form action="../Controller/CartController.php" method="post">
                                <div class="quantity-box">
                                    <span>Số lượng:</span>
                                    <button type="button" class="btn minus-quantity" onclick="onQuantityChange('rev');">-</button>
                                    <input type="hidden" name="id" value=<?php echo $product->getID(); ?>>
                                    <input type="number" name="quantity" id="item-quantity" min="1" value="1">
                                    <button type="button" class="btn add-quantity" onclick="onQuantityChange('add');">+</button>
                                </div>
                                <div class="buy-methods">
                                    <?php if($product->getQuantity() > 0):?>
                                    <button class="btn add-to-cart" name="method" value="add">Thêm vào giỏ hàng</button>
                                    <button class="btn buy-now" name="method" value="buy">Mua ngay</button>
                                    <?php else: ?>
                                    <button class="btn remind" name="method" value="remind">Nhắc tôi khi có hàng</button>
                                </div>
                            </form>
                        </div>
                        <div class="fb-like" data-href="http://127.0.0.1:5500/index.html" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true" style="margin-top: 25px;"></div>
                        <?php endif;?>
                    </div>
                </div>
            </section>
        </div>
        <hr>
        <div class="comment">
            <div class="fb-comments" data-href="http://127.0.0.1:5500/product.html" data-width="100%" data-numposts="5"></div>
        </div>
    </div>
</div>
<script>
        const productStatusTxt = document.querySelector('.product-status');
        const remindBtn = document.querySelector('.remind');
        const buyBtn = document.querySelector('.buy-methods');
        const productStatus = [1, 0];
        function remindMethod(status) {
            if (status === productStatus[0]) {
                remindBtn.style.display = 'none';
                buyBtn.style.display = 'block';
                productStatusTxt.innerText = 'Tình trạng: Còn hàng';
            } else if (status === productStatus[1]) {
                remindBtn.style.display = 'block';
                buyBtn.style.display = 'none';
                productStatusTxt.innerText = 'Tình trạng: Hết hàng';
            }
        }
        // remindMethod(1);

        let productQuantity = document.querySelector('#item-quantity');
        function onQuantityChange(btn) {
            if (btn === 'add') productQuantity.value++;
            else if (btn === 'rev' && productQuantity.value >= 2) {
                productQuantity.value--;
            }
            productQuantity.innerText = productQuantity;
        }
    </script>
<?php
include_once('./footer.php');
?>
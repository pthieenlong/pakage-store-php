<?php 
    include_once('./header.php');
    include_once('../Model/Product.php');

?>
<section class="container">
    <section class="content">
        <article class="banner">
            <nav class="banner-nav">
                <ul class="banner-nav_list">
                    <li class="banner-nav_list-item"><a href="#"><i class="fas fa-list"></i>
                            CATE</a>
                        <ul class="cate-items">
                            <li class="cate-item">
                                <a href="#">Action</a>
                            </li>
                            <li class="cate-item">
                                <a href="#">FPS</a>
                            </li>
                            <li class="cate-item">
                                <a href="#">RPG</a>
                            </li>
                            <li class="cate-item">
                                <a href="#">Adventure</a>
                            </li>
                            <li class="cate-item">
                                <a href="#">Sport</a>
                            </li>
                            <li class="cate-item">
                                <a href="#">Simulate</a>
                            </li>
                            <li class="cate-item">
                                <a href="#">Horror</a>
                            </li>
                            <li class="cate-item">
                                <a href="#">History</a>
                            </li>
                            <li class="cate-item">
                                <a href="#">Puzzle</a>
                            </li>
                            <li class="cate-item">
                                <a href="#">Casual</a>
                            </li>
                            <li class="cate-item">
                                <a href="#">Music</a>
                            </li>
                            <li class="cate-item">
                                <a href="#">Indie</a>
                            </li>
                        </ul>
                    </li>
                    <li class="banner-nav_list-item"><a href="#"><i class="fab fa-hotjar"></i>
                            HOT</a></li>
                    <li class="banner-nav_list-item"><a href="#">
                            <i class="fas fa-tags"></i>NEW</a></li>
                    <li class="banner-nav_list-item"><a href="#"><i class="fas fa-dollar-sign"></i>SALE</a>
                    </li>
                    <li class="banner-nav_list-item"><a href="#"><i class="fas fa-thumbs-up"></i>BEST</a>
                    </li>
                </ul>
            </nav>
            <section class="banner-advertise">
                <button class="banner-btn banner-btn-left" onclick="pushSlides(-1)">
                    <i class="fas fa-chevron-left fa-3x"></i>
                </button>
                <article class="nav-slider">
                    <img src="./img/the-witcher-3.jpeg" alt="advertise image" class="adver-img fade">
                    <img src="./img/cyperpunk.jpeg" alt="advertise image" class="adver-img fade">
                    <img src="./img/gta-v.jpeg" alt="advertise image" class="adver-img fade">
                </article>
                <button class="banner-btn banner-btn-right" onclick="pushSlides(1)">
                    <i class="fas fa-chevron-right fa-3x"></i>
                </button>
            </section>
            <section class="banner-event">
                <article class="event-item">
                    <img src="./img/lunar-new-year-sale.jpeg" alt="event">
                </article>
                <article class="event-item">
                    <img src="./img/summer-sale.jpeg" alt="event">
                </article>
                <article class="event-item">
                    <img src="./img/winter-sale.jpeg" alt="event">
                </article>
            </section>
        </article>
        <hr>
        <section class="product-list">
            <section class="product-heading">
                <span class="tag-name tag">Khuyến mãi</span>
                <span class="tag-more tag">MORE</span>
            </section>
            <section class="product-wrapper">
                <?php 
                    $products = getAllProduct();
                    foreach ($products as $product) {
                        echo "
                            <div class='col-25'>
                                <article class='product'>
                                    <a href='product.html'>
                                        <img src='./img/product-img/banner-img.jpeg' alt='Product image' class='product-img'>
                                        <div class='product-body'>
                                            <p class='product-name'>{$product->getName()}</p>
                                            <p class='product-sale-price'>$ {$product->getPrice()} </p>
                                            <p class='product-price'>$ {$product->getPrice()} <span class='tag tag-sale'>-{$product->getSale()}%</span></p>
                                        </div>
                                    </a>
                                    <div class='product-buy-opt'>
                                        <button class='btn buy'>buy now
                                            <i class='fas fa-cart-arrow-down'></i>
                                        </button>
                                        <button class='btn add-to-card'>add to cart <i class='fas fa-cart-plus'></i></button>
                                    </div>
                                </article>
                            </div>
                        ";
                    }
                ?>
            </section>
        </section>
        <hr>
        <section class="product-list">
            <section class="product-heading">
                <span class="tag-name tag">Mới ra mắt</span>
                <span class="tag-more tag">MORE</span>
            </section>
            <section class="product-wrapper">
                <div class="col-25">
                    <article class="product">
                        <a href="product.html">
                            <img src="./img/product-img/banner-img.jpeg" alt="Product image" class="product-img">
                            <div class="product-body">
                                <p class="product-name">Product name</p>
                                <p class="product-sale-price">$ 50 </p>
                                <p class="product-price">$ 100 <span class="tag tag-sale">-50%</span></p>
                            </div>
                        </a>
                        <div class="product-buy-opt">
                            <button class="btn buy">buy now
                                <i class="fas fa-cart-arrow-down"></i>
                            </button>
                            <button class="btn add-to-card">add to cart <i class="fas fa-cart-plus"></i></button>
                        </div>
                    </article>
                </div>
                <div class="col-25">
                    <article class="product">
                        <a href="product.html">
                            <img src="./img/product-img/banner-img.jpeg" alt="Product image" class="product-img">
                            <div class="product-body">
                                <p class="product-name">Product name</p>
                                <p class="product-sale-price">$ 50 </p>
                                <p class="product-price">$ 100 <span class="tag tag-sale">-50%</span></p>
                            </div>
                        </a>
                        <div class="product-buy-opt">
                            <button class="btn buy">buy now
                                <i class="fas fa-cart-arrow-down"></i>
                            </button>
                            <button class="btn add-to-card">add to cart <i class="fas fa-cart-plus"></i></button>
                        </div>
                    </article>
                </div>
                <div class="col-25">
                    <article class="product">
                        <a href="product.html">
                            <img src="./img/product-img/banner-img.jpeg" alt="Product image" class="product-img">
                            <div class="product-body">
                                <p class="product-name">Product name</p>
                                <p class="product-sale-price">$ 50 </p>
                                <p class="product-price">$ 100 <span class="tag tag-sale">-50%</span></p>
                            </div>
                        </a>
                        <div class="product-buy-opt">
                            <button class="btn buy">buy now
                                <i class="fas fa-cart-arrow-down"></i>
                            </button>
                            <button class="btn add-to-card">add to cart <i class="fas fa-cart-plus"></i></button>
                        </div>
                    </article>
                </div>
                <div class="col-25">
                    <article class="product">
                        <a href="product.html">
                            <img src="./img/product-img/banner-img.jpeg" alt="Product image" class="product-img">
                            <div class="product-body">
                                <p class="product-name">Product name</p>
                                <p class="product-sale-price">$ 50 </p>
                                <p class="product-price">$ 100 <span class="tag tag-sale">-50%</span></p>
                            </div>
                        </a>
                        <div class="product-buy-opt">
                            <button class="btn buy">buy now
                                <i class="fas fa-cart-arrow-down"></i>
                            </button>
                            <button class="btn add-to-card">add to cart <i class="fas fa-cart-plus"></i></button>
                        </div>
                    </article>
                </div>
                <div class="col-25">
                    <article class="product">
                        <a href="product.html">
                            <img src="./img/product-img/banner-img.jpeg" alt="Product image" class="product-img">
                            <div class="product-body">
                                <p class="product-name">Product name</p>
                                <p class="product-sale-price">$ 50 </p>
                                <p class="product-price">$ 100 <span class="tag tag-sale">-50%</span></p>
                            </div>
                        </a>
                        <div class="product-buy-opt">
                            <button class="btn buy">buy now
                                <i class="fas fa-cart-arrow-down"></i>
                            </button>
                            <button class="btn add-to-card">add to cart <i class="fas fa-cart-plus"></i></button>
                        </div>
                    </article>
                </div>
                <div class="col-25">
                    <article class="product">
                        <a href="product.html">
                            <img src="./img/product-img/banner-img.jpeg" alt="Product image" class="product-img">
                            <div class="product-body">
                                <p class="product-name">Product name</p>
                                <p class="product-sale-price">$ 50 </p>
                                <p class="product-price">$ 100 <span class="tag tag-sale">-50%</span></p>
                            </div>
                        </a>
                        <div class="product-buy-opt">
                            <button class="btn buy">buy now
                                <i class="fas fa-cart-arrow-down"></i>
                            </button>
                            <button class="btn add-to-card">add to cart <i class="fas fa-cart-plus"></i></button>
                        </div>
                    </article>
                </div>
                <div class="col-25">
                    <article class="product">
                        <a href="product.html">
                            <img src="./img/product-img/banner-img.jpeg" alt="Product image" class="product-img">
                            <div class="product-body">
                                <p class="product-name">Product name</p>
                                <p class="product-sale-price">$ 50 </p>
                                <p class="product-price">$ 100 <span class="tag tag-sale">-50%</span></p>
                            </div>
                        </a>
                        <div class="product-buy-opt">
                            <button class="btn buy">buy now
                                <i class="fas fa-cart-arrow-down"></i>
                            </button>
                            <button class="btn add-to-card">add to cart <i class="fas fa-cart-plus"></i></button>
                        </div>
                    </article>
                </div>
                <div class="col-25">
                    <article class="product">
                        <a href="product.html">
                            <img src="./img/product-img/banner-img.jpeg" alt="Product image" class="product-img">
                            <div class="product-body">
                                <p class="product-name">Product name</p>
                                <p class="product-sale-price">$ 50 </p>
                                <p class="product-price">$ 100 <span class="tag tag-sale">-50%</span></p>
                            </div>
                        </a>
                        <div class="product-buy-opt">
                            <button class="btn buy">buy now
                                <i class="fas fa-cart-arrow-down"></i>
                            </button>
                            <button class="btn add-to-card">add to cart <i class="fas fa-cart-plus"></i></button>
                        </div>
                    </article>
                </div>
            </section>
        </section>
    </section>
</section>
<?php 
    include_once ('./footer.php');
?>
<?php
/**
 * Register CSS
 */
\frontend\assets\AppAsset::register($this);
/**
 * Register JS
 */
$this->registerJsFile('https://code.jquery.com/jquery.min.js', ['position' => \yii\web\View::POS_HEAD]);
$this->registerJsFile('/src/js/ResizeSensor.js', ['position' => \yii\web\View::POS_HEAD]);
$this->registerJsFile('/src/js/theia-sticky-sidebar.js', ['position' => \yii\web\View::POS_HEAD]);

\thienhungho\Theme1001\assets\CoreAsset::register($this);

?><?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= substr(Yii::$app->language, 0, 2) ?>">
    <head>
        <?php head() ?>
        <style>
            body,
            .category-product span,
            .product .info-product .title,
            .banner-color .inside h5,
            p,
            .posts .content .title,
            .posts .content,
            .post .post-heading a,
            .post .category,
            .widget-title,
            .widget-category a,
            .widget-post a,
            .widget-search input,
            .breadcrumb a, .breadcrumb li,
            .single-blog .breadcrumb-top h2,
            .single-blog .bottom-post .tags span,
            .single-blog .bottom-post .tags a{
                font-family : "Helvetica Neue", Helvetica, Arial, sans-serif;
                font-weight: bold;
            }

            .single-blog .entry-content p{
                font-weight: 400;
            }

            .single-blog .entry-content img{
                margin: auto;
                text-align: center;
                display: block;
                margin-bottom: 10px;
                width: 100%;
            }

            .category-product li a:before {
                background-color: yellowgreen;
            }

            .top-bar a,
            .select-styled,
            .select-styled:after{
                color: #2A2A2E;
            }

            .select-styled.active {
                color: black;
            }

            .select-options li {
                text-align: right;
            }

            @media only screen and (max-width : 1300px) {
                .header .mega-menu {
                    width       : 850px;
                    top         : 100px;
                    left        : 0;
                    padding     : 20px 30px 30px 30px;
                }
            }
        </style>
    </head>
    <body class="wrapper">
    <?php begin_body() ?>
    <!--===================== Header ========================-->
    <header>
        <div class="top-bar" style="background-color: yellow">
            <div class="container-large">
                <div class="row">
                    <?= get_block_content('top-head-nav') ?>
                    <div class="col-md-6 col-sm-6 col-xs-12 text-right">
                        <ul>
                            <?php
                            if (!is_login()) { ?>
                                <li><a href="/site/login"><?= t('app', 'Login') ?></a></li>
                            <?php } else { ?>
                                <li>
                                    <select class="custom-select">
                                        <option value=""><?= get_current_user_name() ?></option>
                                        <option value=""><?= t('app', 'Log out') ?></option>
                                    </select>
                                </li>
                            <?php }
                            ?>
                            <li>
                                <select class="custom-select">
                                    <option value="#">Tiếng Việt</option>
                                    <option value="#">English</option>
                                    <option value="#">中文</option>
                                    <option value="#">한국어</option>
                                </select>
                            </li>
                        </ul><!--right-top-bar-->
                    </div>
                </div>
            </div>
        </div><!--top-bar-->
        <div class="container-large header">
            <div class="row">
                <?= get_block_content('main-nav-menu') ?>
                <div class="col-md-2 col-sm-3 col-xs-3 text-center">
                    <div class="logo">
                        <a href="/"><img src="/themes/cinagro/assets/images/logo.png" alt="logo" style="max-width: 56px"></a>
                    </div>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-5 text-right">
                    <ul class="info-header">
                        <li><a href="index.html#"><i class="fa fa-volume-control-phone"></i>+84 905-22-14-16</a></li>
                        <li class="search-icon"><a href="#"><i class="fa fa-search"></i><?= t('app', 'Search') ?></a>
                        </li>
                        <li class="cart">
                            <a href="cart/index.html"><i class="fa fa-shopping-bag"></i><?= t('app', 'Cart') ?> (0)</a>
                            <div class="cart-modal">
                                <ul>
                                    <li>
                                        <a href="single-product/index.html">
                                            <img src="/themes/cinagro/assets/images/cart-product.jpg" alt="cart-produc">
                                            <span class="title">ORS - Olive Oil</span> <span class="price">$ 9.99</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="total">
                                    Cart Subotal: <span class="price">$ 9.99</span>
                                </div>
                                <div class="button">
                                    <a href="cart/index.html" class="custom-btn">view cart</a>
                                    <a href="cart/index.html" class="custom-btn pink">checkout</a>
                                </div>
                            </div><!--cart-modal-->
                        </li>
                    </ul><!--info-header-->
                    <?= get_block_content('right-social-network-menu') ?>
                </div>
            </div>
            <form class="search">
                <input type="text" placeholder="Search...">
                <span class="close"><img src="/themes/cinagro/assets/images/close2.png" alt="close"></span>
            </form>
        </div>
    </header><!--============== End of Header ========================-->
    <!--===================== Base-Slider ========================-->
    <?= $content ?>
    <footer class="bg-yellow">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="subscribe text-center">
                        <?= get_block_content('subscribe-form-title') ?>
                        <form action="<?= \yii\helpers\Url::to(['subscribe-frontend/subscribe/create']) ?>" method="post" id="subscribe-form">
                            <?= get_csrf_input() ?>
                            <div class="form-group">
                                <input type="email" placeholder="<?= t('app', 'Enter your email...') ?>" name="Subscribe[email]">
                                <div class="custom-btn bg-black text-yellow" onclick="document.forms['subscribe-form'].submit()"><?= t('app', 'enter') ?></div>
                            </div>
                        </form>
                    </div><!--subscribe-->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget-page">
                        <h4 class="widget-title">Customer Care</h4>
                        <a href="404page/index.html">Register</a> <a href="404page/index.html">My Account</a>
                        <a href="404page/index.html">Track Order</a>
                    </div><!--widget-page-->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget-page">
                        <h4 class="widget-title">FAQ</h4>
                        <a href="404page/index.html">Ordering Info</a> <a href="404page/index.html">Shipping &amp;
                            Delivery</a> <a href="404page/index.html">Our Guarantee</a>
                    </div><!--widget-page-->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget-page">
                        <h4 class="widget-title">Our company</h4>
                        <a href="about/index.html">About</a> <a href="blog/index.html">Press</a>
                        <a href="shop/index.html">Products</a>
                    </div><!--widget-page-->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget-contact">
                        <h4 class="widget-title">contact us</h4>
                        <address>123 6th St. Melbourne, FL 32904<br>Phone: (125) 546-4478<br>Email: yesorganic.com
                        </address>
                    </div><!--widget-contact-->
                </div>
            </div>
        </div>
        <div id="back-to-top"><i class="fa fa-angle-up"></i></div>
    </footer>
    <?php end_body() ?>
    </body>
    </html>
<?php end_page() ?>
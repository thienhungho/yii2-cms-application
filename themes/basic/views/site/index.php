<?php

/* @var $this yii\web\View */
?>

<?= get_block_content('home-hero-area') ?>
<?= get_block_content('home-features-area') ?>

<!--================================
    START FEATURED PRODUCT AREA
=================================-->
<section class="featured-products bgcolor  section--padding">
    <!-- start /.container -->
    <div class="container">
        <!-- start row -->
        <div class="row">
            <!-- start col-md-12 -->
            <div class="col-md-12">
                <div class="product-title-area ">
                    <div class="product__title">
                        <h2><?= Yii::t('app', 'Weekly Featured Products') ?></h2>
                    </div>
                    <div class="product__slider-nav rounded">
                        <span class="lnr lnr-chevron-left nav_left"></span>
                        <span class="lnr lnr-chevron-right nav_right"></span>
                    </div>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- start .featured-product-slider -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 no0-padding">
                <div class="featured-product-slider prod-slider1">
                    <div class="featured__single-slider">
                        <div class="featured__preview-img">
                            <img src="/themes/basic/src/images/featprod.jpg" alt="Featured products">
                            <div class="prod_btn">
                                <a href="single-product.html" class="transparent btn--sm btn--round">More Info</a>
                                <a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>
                            </div>
                        </div>
                        <!-- end /.featured__preview-img -->
                        <div class="featured__product-description">
                            <div class="product-desc desc--featured">
                                <a href="single-product.html" class="product_title">
                                    <h4>Rida - vCard, Portfolio / Resume Template</h4>
                                </a>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="/themes/basic/src/images/auth.jpg" alt="author image">
                                        <p>
                                            <a href="index.html#">AazzTech</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        <a href="index.html#">
                                            <span class="lnr lnr-book"></span> WordPress</a>
                                    </li>
                                </ul>
                                <!-- end /.titlebtm -->
                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the
                                    mattis, leo quam aliquet congue placerat mi id nisi interdum mollis. Praesent pharetra,
                                    justo ut scelerisque the mattis, leo quam aliquet congue justo ut scelerisque.</p>
                            </div>
                            <!-- end /.product-desc -->
                            <div class="product_data">
                                <div class="tags tags--round">
                                    <ul>
                                        <li>
                                            <a href="index.html#">website</a>
                                        </li>
                                        <li>
                                            <a href="index.html#">plugin</a>
                                        </li>
                                        <li>
                                            <a href="index.html#">landing page</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end /.tags -->
                                <div class="product-purchase featured--product-purchase">
                                    <div class="price_love">
                                        <span>$10 - $50</span>
                                        <p>
                                            <span class="lnr lnr-heart"></span> 90</p>
                                    </div>
                                    <div class="sell">
                                        <p>
                                            <span class="lnr lnr-cart"></span>
                                            <span>16</span>
                                        </p>
                                    </div>

                                    <div class="rating product--rating">
                                        <ul>
                                            <li>
                                                <span class="fa fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fa fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fa fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fa fa-star"></span>
                                            </li>
                                            <li>
                                                <span class="fa fa-star"></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end /.product-purchase -->
                            </div>
                        </div>
                        <!-- end /.featured__product-description -->
                    </div>
                    <!--end /.featured__single-slider-->
                </div>
            </div>
        </div>
        <!-- end /.featured__preview-img -->
    </div>
    <!-- end /.featured-product-slider -->
</section>
<!--================================
END FEATURED PRODUCT AREA
=================================-->

<!--================================
START PRODUCTS AREA
=================================-->
<section class="products section--padding">
    <!-- start container -->
    <div class="container">
        <!-- start row -->
        <div class="row">
            <!-- start col-md-12 -->
            <div class="col-md-12">
                <div class="product-title-area">
                    <div class="product__title">
                        <h2><?= Yii::t('app', 'Newest Release Products') ?></h2>
                    </div>
                    <div class="filter__menu">
                        <p><?= Yii::t('app', 'Filter by:') ?></p>
                        <div class="filter__menu_icon">
                            <a href="#" id="drop1" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="svg" src="/themes/basic/src/images/svg/menu.svg" alt="menu icon">
                            </a>
                            <ul class="filter_dropdown dropdown-menu" aria-labelledby="drop1">
                                <li>
                                    <a href="<?= get_product_term_url(
                                            'template',
                                            'product-category',
                                            'trending'
                                    ) ?>"><?= Yii::t('app', 'Trending items') ?></a>
                                </li>
                                <li>
                                    <a href="<?= get_product_term_url(
                                        'template',
                                        'best-seller',
                                        'trending'
                                    ) ?>"><?= Yii::t('app', 'Best seller') ?></a>
                                </li>
                                <li>
                                    <a href="index.html#">Best rating</a>
                                </li>
                                <li>
                                    <a href="<?= url([
                                            'product/product/index',
                                            'type' => 'template',
                                            'sort' => 'promotional_price'])
                                    ?>"><?= Yii::t('app', 'Low price') ?></a>
                                </li>
                                <li>
                                    <a href="<?= url([
                                            'product/product/index',
                                            'type' => 'template',
                                            'sort' => '-promotional_price'])
                                    ?>"><?= Yii::t('app', 'High price') ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->

        <!-- start row -->
        <div class="row">
            <!-- start .col-md-12 -->
            <div class="col-md-12">
                <div class="sorting">
                    <ul>
                        <?php
                        $product_categories = get_all_product_category();
                        foreach ($product_categories as $product_category) { ?>
                            <li>
                                <a href="<?= get_product_term_url(
                                        'template',
                                        'product-category',
                                    $product_category['slug'])
                                ?>"><?= $product_category['name'] ?></a>
                            </li>
                        <?php }
                        ?>
                    </ul>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->

        <!-- start .row -->
        <div class="row">
            <!-- start .col-md-4 -->
            <?php
                $templates = get_all_product('template', 9, 'obj');
                foreach ($templates as $template) { ?>
                    <div class="col-lg-4 col-md-6">
                        <!-- start .single-product -->
                        <div class="product product--card">

                            <div class="product__thumbnail">
                                <img src="<?= get_other_img_size_path('large', $template->feature_img) ?>">
                                <div class="prod_btn">
                                    <a href="<?= get_product_url(
                                        $template->product_type,
                                        $template->slug)
                                    ?>" class="transparent btn--sm btn--round">
                                        <?= Yii::t('app', 'More Info') ?>
                                    </a>
                                    <a href="<?= get_meta_value('live-preview', $template->product_type, $template->id) ?>" target="_blank" class="transparent btn--sm btn--round">
                                        <?= Yii::t('app', 'Live Demo') ?>
                                    </a>
                                </div>
                                <!-- end /.prod_btn -->
                            </div>
                            <!-- end /.product__thumbnail -->

                            <div class="product-desc">
                                <a href="<?= get_product_url(
                                    $template->product_type,
                                    $template->slug)
                                ?>" class="product_title">
                                    <h4><?= $template->title ?></h4>
                                </a>
                                <ul class="titlebtm">
                                    <li>
                                        <img style="border-radius: 100px;" class="auth-img" src="<?= get_other_img_size_path('thumbnail', $template->author0->avatar) ?>" alt="author image">
                                        <p><a href="#"><?= $template->author0->username ?></a></p>
                                    </li>
                                    <li class="product_cat">
                                        <a href="<?= get_product_type_url($template->product_type) ?>">
                                            <span class="lnr lnr-book"></span><?= Yii::t('app', slug_to_text($template->product_type)) ?></a>
                                    </li>
                                    <li style="margin-left: 10px"><p><span style="color: red" class="lnr lnr-heart"></span> 24</p></li>
                                </ul>

                                <p><?= get_description($template->content, 7) ?></p>
                            </div>
                            <!-- end /.product-desc -->

                            <div class="product-purchase">
                                <div class="price_love">
                                    <span><?= format_product_price($template->promotional_price) ?> <?= get_currency_symbol($template->currency_unit)?></span>
                                </div>
                                <div class="rating product--rating">
                                    <ul>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li>
                                            <span class="fa fa-star"></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sell">
                                    <p>
                                        <span class="lnr lnr-cart"></span>
                                        <span>27</span>
                                    </p>
                                </div>
                            </div>
                            <!-- end /.product-purchase -->
                        </div>
                        <!-- end /.single-product -->
                    </div>
                <?php }
            ?>
            <!-- end /.col-md-4 -->
        </div>
        <!-- end /.row -->

        <!-- start .row -->
        <div class="row">
            <div class="col-md-12">
                <div class="more-product">
                    <a href="<?= get_product_type_url('template') ?>" class="btn btn--lg btn--round"><?= Yii::t('app', 'All New Products') ?></a>
                </div>
            </div>
            <!-- end ./col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
<!--================================
END PRODUCTS AREA
=================================-->

<!--================================
START FOLLOWERS FEED AREA
=================================-->
<section class="followers-feed section--padding">
    <!-- start .container -->
    <div class="container">
        <!-- start row -->
        <div class="row">
            <!-- start col-md-12 -->
            <div class="col-md-12">
                <div class="product-title-area">
                    <div class="product__title">
                        <h2>Your Followers Feed</h2>
                    </div>

                    <div class="product__slider-nav follow_feed_nav rounded">
                        <span class="lnr lnr-chevron-left nav_left"></span>
                        <span class="lnr lnr-chevron-right nav_right"></span>
                    </div>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->

        <!-- start /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="product_slider">
                    <!-- start .single-product -->
                    <div class="product product--card">

                        <div class="product__thumbnail">
                            <img src="/themes/basic/src/images/p4.jpg" alt="Product Image">
                            <div class="prod_btn">
                                <a href="single-product.html" class="transparent btn--sm btn--round">More Info</a>
                                <a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product-desc">
                            <a href="index.html#" class="product_title">
                                <h4>Ajax Live Search</h4>
                            </a>
                            <ul class="titlebtm">
                                <li>
                                    <img class="auth-img" src="/themes/basic/src/images/auth.jpg" alt="author image">
                                    <p>
                                        <a href="index.html#">AazzTech</a>
                                    </p>
                                </li>
                                <li class="product_cat">
                                    <a href="index.html#">
                                        <span class="lnr lnr-book"></span>Plugin</a>
                                </li>
                            </ul>

                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet congue.</p>
                        </div>
                        <!-- end /.product-desc -->

                        <div class="product-purchase">
                            <div class="price_love">
                                <span>$10 - $50</span>
                                <p>
                                    <span class="lnr lnr-heart"></span> 90</p>
                            </div>
                            <div class="sell">
                                <p>
                                    <span class="lnr lnr-cart"></span>
                                    <span>16</span>
                                </p>
                            </div>
                        </div>
                        <!-- end /.product-purchase -->
                    </div>
                    <!-- end /.single-product -->

                    <!-- start .single-product -->
                    <div class="product product--card">

                        <div class="product__thumbnail">
                            <img src="/themes/basic/src/images/p2.jpg" alt="Product Image">
                            <div class="prod_btn">
                                <a href="single-product.html" class="transparent btn--sm btn--round">More Info</a>
                                <a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product-desc">
                            <a href="index.html#" class="product_title">
                                <h4>Mccarther Coffee Shop</h4>
                            </a>
                            <ul class="titlebtm">
                                <li>
                                    <img class="auth-img" src="/themes/basic/src/images/auth2.jpg.png" alt="author image">
                                    <p>
                                        <a href="index.html#">AazzTech</a>
                                    </p>
                                </li>
                                <li class="product_cat">
                                    <a href="index.html#">
                                        <span class="lnr lnr-book"></span>Plugin</a>
                                </li>
                            </ul>

                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet congue.</p>
                        </div>
                        <!-- end /.product-desc -->

                        <div class="product-purchase">
                            <div class="price_love">
                                <span>$10</span>
                                <p>
                                    <span class="lnr lnr-heart"></span> 48</p>
                            </div>
                            <div class="sell">
                                <p>
                                    <span class="lnr lnr-cart"></span>
                                    <span>50</span>
                                </p>
                            </div>
                        </div>
                        <!-- end /.product-purchase -->
                    </div>
                    <!-- end /.single-product -->

                    <!-- start .single-product -->
                    <div class="product product--card">

                        <div class="product__thumbnail">
                            <img src="/themes/basic/src/images/p6.jpg" alt="Product Image">
                            <div class="prod_btn">
                                <a href="single-product.html" class="transparent btn--sm btn--round">More Info</a>
                                <a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product-desc">
                            <a href="index.html#" class="product_title">
                                <h4>Visibility Manager Subscriptions</h4>
                            </a>
                            <ul class="titlebtm">
                                <li>
                                    <img class="auth-img" src="/themes/basic/src/images/auth3.jpg.png" alt="author image">
                                    <p>
                                        <a href="index.html#">AazzTech</a>
                                    </p>
                                </li>
                                <li class="product_cat">
                                    <a href="index.html#">
                                        <span class="lnr lnr-book"></span>WordPress</a>
                                </li>
                            </ul>

                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet congue.</p>
                        </div>
                        <!-- end /.product-desc -->

                        <div class="product-purchase">
                            <div class="price_love">
                                <span>Free</span>
                                <p>
                                    <span class="lnr lnr-heart"></span> 24</p>
                            </div>
                            <div class="sell">
                                <p>
                                    <span class="lnr lnr-cart"></span>
                                    <span>27</span>
                                </p>
                            </div>
                        </div>
                        <!-- end /.product-purchase -->
                    </div>
                    <!-- end /.single-product -->

                    <!-- start .single-product -->
                    <div class="product product--card">

                        <div class="product__thumbnail">
                            <img src="/themes/basic/src/images/p4.jpg" alt="Product Image">
                            <div class="prod_btn">
                                <a href="single-product.html" class="transparent btn--sm btn--round">More Info</a>
                                <a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product-desc">
                            <a href="index.html#" class="product_title">
                                <h4>Ajax Live Search</h4>
                            </a>
                            <ul class="titlebtm">
                                <li>
                                    <img class="auth-img" src="/themes/basic/src/images/auth.jpg" alt="author image">
                                    <p>
                                        <a href="index.html#">AazzTech</a>
                                    </p>
                                </li>
                                <li class="product_cat">
                                    <a href="index.html#">
                                        <span class="lnr lnr-book"></span>Plugin</a>
                                </li>
                            </ul>

                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet congue.</p>
                        </div>
                        <!-- end /.product-desc -->

                        <div class="product-purchase">
                            <div class="price_love">
                                <span>$10 - $50</span>
                                <p>
                                    <span class="lnr lnr-heart"></span> 90</p>
                            </div>
                            <div class="sell">
                                <p>
                                    <span class="lnr lnr-cart"></span>
                                    <span>16</span>
                                </p>
                            </div>
                        </div>
                        <!-- end /.product-purchase -->
                    </div>
                    <!-- end /.single-product -->

                    <!-- start .single-product -->
                    <div class="product product--card">

                        <div class="product__thumbnail">
                            <img src="/themes/basic/src/images/p2.jpg" alt="Product Image">
                            <div class="prod_btn">
                                <a href="single-product.html" class="transparent btn--sm btn--round">More Info</a>
                                <a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product-desc">
                            <a href="index.html#" class="product_title">
                                <h4>Mccarther Coffee Shop</h4>
                            </a>
                            <ul class="titlebtm">
                                <li>
                                    <img class="auth-img" src="/themes/basic/src/images/auth2.jpg.png" alt="author image">
                                    <p>
                                        <a href="index.html#">AazzTech</a>
                                    </p>
                                </li>
                                <li class="product_cat">
                                    <a href="index.html#">
                                        <span class="lnr lnr-book"></span>Plugin</a>
                                </li>
                            </ul>

                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet congue.</p>
                        </div>
                        <!-- end /.product-desc -->

                        <div class="product-purchase">
                            <div class="price_love">
                                <span>$10</span>
                                <p>
                                    <span class="lnr lnr-heart"></span> 48</p>
                            </div>
                            <div class="sell">
                                <p>
                                    <span class="lnr lnr-cart"></span>
                                    <span>50</span>
                                </p>
                            </div>
                        </div>
                        <!-- end /.product-purchase -->
                    </div>
                    <!-- end /.single-product -->

                    <!-- start .single-product -->
                    <div class="product product--card">

                        <div class="product__thumbnail">
                            <img src="/themes/basic/src/images/p6.jpg" alt="Product Image">
                            <div class="prod_btn">
                                <a href="single-product.html" class="transparent btn--sm btn--round">More Info</a>
                                <a href="single-product.html" class="transparent btn--sm btn--round">Live Demo</a>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product-desc">
                            <a href="index.html#" class="product_title">
                                <h4>Visibility Manager Subscriptions</h4>
                            </a>
                            <ul class="titlebtm">
                                <li>
                                    <img class="auth-img" src="/themes/basic/src/images/auth3.jpg.png" alt="author image">
                                    <p>
                                        <a href="index.html#">AazzTech</a>
                                    </p>
                                </li>
                                <li class="product_cat">
                                    <a href="index.html#">
                                        <span class="lnr lnr-book"></span>WordPress</a>
                                </li>
                            </ul>

                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet congue.</p>
                        </div>
                        <!-- end /.product-desc -->

                        <div class="product-purchase">
                            <div class="price_love">
                                <span>Free</span>
                                <p>
                                    <span class="lnr lnr-heart"></span> 24</p>
                            </div>
                            <div class="sell">
                                <p>
                                    <span class="lnr lnr-cart"></span>
                                    <span>27</span>
                                </p>
                            </div>
                        </div>
                        <!-- end /.product-purchase -->
                    </div>
                    <!-- end /.single-product -->
                </div>
            </div>
        </div>
        <!-- end /.row -->
    </div>
    <!-- start /.container -->
</section>
<!--================================
END FOLLOWERS FEED AREA
=================================-->

<?= get_block_content('home-counter-up-area') ?>

<?= get_block_content('home-why-choose-area') ?>

<?= get_block_content('home-sell-buy-area') ?>

<?//= get_block_content('home-testimonial-area') ?>

<?= $this->render('_lastest_news') ?>

<?= get_block_content('home-special-feature-area') ?>
<?= get_block_content('slide-1') ?>

<!--================== End of Base-Slider ====================-->

<?= get_block_content('category-product-1') ?>

<!--=================== Product Slider =======================-->
<div class="container-large">
    <div class="product-slider">
        <?= get_block_content('title-1') ?>
        <div class="slider-product owl-carousel owl-theme">
        <?php
            $products = get_all_product('Fruit', 6);
            foreach ($products as $product) { ?>
                <div class="item">
                    <div class="product">
                        <div class="images text-center">
                            <a href="<?= get_product_url('Fruit', $product['slug']) ?>"><img src="<?= get_other_img_size_path('large', $product['feature_img']) ?>" alt="<?=$product['title'] ?>"></a>
                            <div class="button-group">
                                <a href="cart/index.html" class="custom-btn pink"><i class="fa fa-shopping-bag"></i></a>
                                <a href="index.html#" class="custom-btn pink"><i class="fa fa-search"></i></a>
                            </div><!--button-group-->
                        </div><!--images-->
                        <div class="info-product">
                            <a href="<?= get_product_url('Fruit', $product['slug']) ?>" class="title"><?=$product['title'] ?></a>
                            <span class="price"><?= format_product_price($product['promotional_price']) ?> <?= $product['currency_unit'] ?> / <?= $product['unit'] ?></span>
                        </div><!--info-product-->
                    </div><!--product-->
                </div>
            <?php }
        ?>
        </div><!--slider-product-->
        <div class="text-center">
            <a href="shop/index.html" class="custom-btn text-center green"><span><?= t('app', 'View the store') ?></span></a>
        </div>
    </div><!--product-slider-->
</div><!--=============== End of Product Slider ===================-->
<div class="container-large">
    <div class="big-banner">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="text">
                    <h2>Unlock your potential<br>with good nutrion</h2>
                    <p>Be Healty Organic Food</p>
                    <a href="journal-blog/index.html" class="custom-btn text-center white">view recipes</a>
                </div><!--text-->
            </div>
        </div>
    </div><!--big-banner-->
</div><!--=================== Grid Product =======================-->
<div class="container-large">
    <div class="grid-product">
        <?= get_block_content('title-2') ?>
        <div class="row">
            <?php
            $products = get_all_product('Fruit', 8);
            foreach ($products as $product) { ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="product">
                        <div class="images">
                            <a href="<?= get_product_url('Fruit', $product['slug']) ?>"><img src="<?= get_other_img_size_path('large', $product['feature_img']) ?>" alt="<?=$product['title'] ?>"></a>
                            <div class="button-group">
                                <a href="cart/index.html" class="custom-btn pink"><i class="fa fa-shopping-bag"></i></a>
                                <a href="index.html#" class="custom-btn pink"><i class="fa fa-search"></i></a>
                            </div><!--button-group-->
                        </div><!--images-->
                        <div class="info-product">
                            <a href="<?= get_product_url('Fruit', $product['slug']) ?>" class="title"><?=$product['title'] ?></a> <span class="price">
                                <del><?= format_product_price($product['price']) ?> <?= $product['currency_unit'] ?></del>
                                <ins><?= format_product_price($product['promotional_price']) ?> <?= $product['currency_unit'] ?></ins>
                            </span>
                        </div><!--info-product-->
                    </div><!--product-->
                </div>
            <?php }
            ?>
        </div>
        <div class="text-center"><a href="shop/index.html" class="custom-btn text-center green">VIEW THE STORE</a></div>
    </div><!--grid-product-->
    <div class="banner-img">
        <div class="row">
            <div class="col-md-6">
                <div class="banner-inside">
                    <img src="/themes/cinagro/assets/images/banner.jpg" alt="banner">
                    <div class="inside text-right">
                        <h2 class="text-black">gift Certificate</h2>
                        <p>Give the perfect gift every time</p>
                        <a href="blog/index.html" class="custom-btn text-center white">Read More</a>
                    </div><!--inside-->
                </div>
            </div>
            <div class="col-md-6">
                <div class="banner-inside">
                    <img src="/themes/cinagro/assets/images/banner2.jpg" alt="banner">
                    <div class="inside text-right">
                        <h2 class="text-black">Fresh Fruits</h2>
                        <p>100% freshness guarantee </p>
                        <a href="blog/index.html" class="custom-btn text-center white">Read More</a>
                    </div><!--inside-->
                </div>
            </div>
        </div>
    </div><!--banner-->
    <?= get_block_content('banner-1') ?>
</div><!--=============== End of Grid Product ===================--><!--===================== Schedule ========================-->
<?= get_block_content('healthy-daily') ?>
<div class="container-large">
    <div class="posts">
        <?= get_block_content('home-blog-section-title') ?>
        <div class="row">
            <?php
            $posts = get_all_post('post', 4);
            foreach ($posts as $post) { ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <a href="<?= get_post_url($post['post_type'], $post['slug']) ?>"><img src="<?= get_other_img_size_path('large', $post['feature_img']) ?>" alt="mini-post3"></a>
                    <div class="content">
                        <span><?= t('app', 'by') ?> <a href="<?= get_post_url($post['post_type'], $post['slug']) ?>"><?= $post['author'] ?></a>/<a href="<?= get_post_url($post['post_type'], $post['slug']) ?>"><?= date('l, d F Y' , strtotime($post['created_at'])) ?></a></span>
                        <a href="<?= get_post_url($post['post_type'], $post['slug']) ?>" class="title"><?= $post['title'] ?></a>
                    </div><!--content-->
                </div>
            <?php }
            ?>
        </div>
        <div class="text-center">
            <a href="blog/index.html" class="custom-btn text-center green">view the journal</a>
        </div>
    </div>
    <?= get_block_content('testimonials') ?>
</div>
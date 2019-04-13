<div class="col-lg-6 col-md-6">
    <!-- start .single-product -->
    <div class="product product--card product--card-small">

        <div class="product__thumbnail">
            <img src="/<?= get_other_img_size_path('large', $model->feature_img) ?>" alt="Product Image">
            <div class="prod_btn">
                <a href="<?= get_product_url($model->product_type, $model->slug) ?>" class="transparent btn--sm btn--round"><?= Yii::t('app', 'More Info') ?></a>
                <a target="_blank" rel="nofollow" href="<?= get_meta_value('live-preview', $model->product_type ,$model->primaryKey) ?>" class="transparent btn--sm btn--round"><?= Yii::t('app', 'Live Demo') ?></a>
            </div>
            <!-- end /.prod_btn -->
        </div>
        <!-- end /.product__thumbnail -->

        <div class="product-desc">
            <a href="<?= get_product_url($model->product_type, $model->slug) ?>" class="product_title">
                <h4><?= $model->title ?></h4>
            </a>
            <ul class="titlebtm">
                <li>
                    <img class="auth-img" src="/<?= get_other_img_size_path('thumbnail', $model->author0->avatar) ?>" alt="author image">
                    <p>
                        <a href="#"><?= $model->author0->username ?></a>
                    </p>
                </li>
                <li class="out_of_class_name">
                    <div class="sell">
                        <p>
                            <span class="lnr lnr-cart"></span> <span>27</span>
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
                                <span class="fa fa-star-half-o"></span>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>

        </div>
        <!-- end /.product-desc -->

        <div class="product-purchase">
            <div class="price_love">
                <span><?= format_product_price($model->promotional_price) ?> <?= get_currency_symbol($model->currency_unit) ?></span>
            </div>
            <a href="single-product.html" class="btn--sm btn--round" style="border: 1px solid #7347c1; background-color: #7347c1; color: white; text-transform: uppercase"><span class="lnr lnr-heart"></span>&nbsp;<?= Yii::t('app', 'Use It') ?></a>
        </div>
        <!-- end /.product-purchase -->
    </div>
    <!-- end /.single-product -->
</div>
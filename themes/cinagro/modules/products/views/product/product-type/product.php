<?php
$limitComment = Yii::$app->request->get('number-comment', 1);
?>

<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb">
                    <ul>
                        <li>
                            <a href="/"><?= Yii::t('app', 'Home') ?></a>
                        </li>
                        <li>
                            <a href="<?= get_product_type_url($model->product_type) ?>"><?= Yii::t('app', slug_to_text($model->product_type)) ?></a>
                        </li>
                        <li class="active">
                            <a href="<?= get_current_url() ?>"><?= $model->title ?></a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title"><?= $model->title ?></h1>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>

<section class="single-product-desc">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="item-preview">
                    <div class="item__preview-slider slick-initialized slick-slider">
                        <div class="slick-list draggable">
                            <div class="slick-track" style="opacity: 1; width: 7300px;">
                                <div class="prev-slide slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 730px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
                                    <img style="width: 100%" src="/<?= get_other_img_size_path('raw', $model->feature_img) ?>">
                                </div>
                                <div class="prev-slide slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" style="width: 730px; position: relative; left: -730px; top: 0px; z-index: 998; opacity: 0;">
                                    <img style="width: 100%" src="/<?= get_other_img_size_path('raw', $model->feature_img) ?>">
                                </div>
                                <div class="prev-slide slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" style="width: 730px; position: relative; left: -1460px; top: 0px; z-index: 998; opacity: 0;">
                                    <img style="width: 100%" src="/<?= get_other_img_size_path('raw', $model->feature_img) ?>">
                                </div>
                                <div class="prev-slide slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1" style="width: 730px; position: relative; left: -2190px; top: 0px; z-index: 998; opacity: 0;">
                                    <img style="width: 100%" src="/<?= get_other_img_size_path('raw', $model->feature_img) ?>">
                                </div>
                                <div class="prev-slide slick-slide" data-slick-index="4" aria-hidden="true" tabindex="-1" style="width: 730px; position: relative; left: -2920px; top: 0px; z-index: 998; opacity: 0;">
                                    <img style="width: 100%" src="/<?= get_other_img_size_path('raw', $model->feature_img) ?>">
                                </div>
                                <div class="prev-slide slick-slide" data-slick-index="5" aria-hidden="true" tabindex="-1" style="width: 730px; position: relative; left: -3650px; top: 0px; z-index: 998; opacity: 0;">
                                    <img style="width: 100%" src="/<?= get_other_img_size_path('raw', $model->feature_img) ?>">
                                </div>
                                <div class="prev-slide slick-slide" data-slick-index="6" aria-hidden="true" tabindex="-1" style="width: 730px; position: relative; left: -4380px; top: 0px; z-index: 998; opacity: 0;">
                                    <img style="width: 100%" src="/<?= get_other_img_size_path('raw', $model->feature_img) ?>">
                                </div>
                                <div class="prev-slide slick-slide" data-slick-index="7" aria-hidden="true" tabindex="-1" style="width: 730px; position: relative; left: -5110px; top: 0px; z-index: 998; opacity: 0;">
                                    <img style="width: 100%" src="/<?= get_other_img_size_path('raw', $model->feature_img) ?>">
                                </div>
                                <div class="prev-slide slick-slide" data-slick-index="8" aria-hidden="true" tabindex="-1" style="width: 730px; position: relative; left: -5840px; top: 0px; z-index: 998; opacity: 0;">
                                    <img style="width: 100%" src="/<?= get_other_img_size_path('raw', $model->feature_img) ?>">
                                </div>
                                <div class="prev-slide slick-slide" data-slick-index="9" aria-hidden="true" tabindex="-1" style="width: 730px; position: relative; left: -6570px; top: 0px; z-index: 998; opacity: 0;">
                                    <img style="width: 100%" src="/<?= get_other_img_size_path('raw', $model->feature_img) ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end /.item--preview-slider -->
                    <div class="item__preview-thumb">
<!--                        <div class="prev-thumb">-->
<!--                            <div class="thumb-slider slick-initialized slick-slider">-->
<!--                                <div class="slick-list draggable">-->
<!--                                    <div class="slick-track" style="opacity: 1; width: 2550px; transform: translate3d(-510px, 0px, 0px);">-->
<!--                                        <div class="item-thumb slick-slide slick-cloned" data-slick-index="-5" aria-hidden="true" tabindex="-1" style="width: 99px;">-->
<!--                                            <img src="/--><?//= get_other_size_path('thumbnail', $model->feature_img) ?><!--">-->
<!--                                        </div>-->
<!--                                        <div class="item-thumb slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" tabindex="-1" style="width: 99px;">-->
<!--                                            <img src="/--><?//= get_other_size_path('thumbnail', $model->feature_img) ?><!--">-->
<!--                                        </div>-->
<!--                                        <div class="item-thumb slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" tabindex="-1" style="width: 99px;">-->
<!--                                            <img src="/--><?//= get_other_size_path('thumbnail', $model->feature_img) ?><!--">-->
<!--                                        </div>-->
<!--                                        <div class="item-thumb slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" tabindex="-1" style="width: 99px;">-->
<!--                                            <img src="/--><?//= get_other_size_path('thumbnail', $model->feature_img) ?><!--">-->
<!--                                        </div>-->
<!--                                        <div class="item-thumb slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 99px;">-->
<!--                                            <img src="/--><?//= get_other_size_path('thumbnail', $model->feature_img) ?><!--">-->
<!--                                        </div>-->
<!--                                        <div class="item-thumb slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 99px;">-->
<!--                                            <img src="/--><?//= get_other_size_path('thumbnail', $model->feature_img) ?><!--">-->
<!--                                        </div>-->
<!--                                        <div class="item-thumb slick-slide slick-active" data-slick-index="1" aria-hidden="false" tabindex="0" style="width: 99px;">-->
<!--                                            <img src="/--><?//= get_other_size_path('thumbnail', $model->feature_img) ?><!--">-->
<!--                                        </div>-->
<!--                                        <div class="item-thumb slick-slide slick-active" data-slick-index="2" aria-hidden="false" tabindex="0" style="width: 99px;">-->
<!--                                            <img src="/--><?//= get_other_size_path('thumbnail', $model->feature_img) ?><!--">-->
<!--                                        </div>-->
<!--                                        <div class="item-thumb slick-slide slick-active" data-slick-index="3" aria-hidden="false" tabindex="0" style="width: 99px;">-->
<!--                                            <img src="/--><?//= get_other_size_path('thumbnail', $model->feature_img) ?><!--">-->
<!--                                        </div>-->
<!--                                        <div class="item-thumb slick-slide slick-active" data-slick-index="4" aria-hidden="false" tabindex="0" style="width: 99px;">-->
<!--                                            <img src="/--><?//= get_other_size_path('thumbnail', $model->feature_img) ?><!--">-->
<!--                                        </div>-->
<!--                                        <div class="item-thumb slick-slide" data-slick-index="5" aria-hidden="true" tabindex="-1" style="width: 99px;">-->
<!--                                            <img src="/--><?//= get_other_size_path('thumbnail', $model->feature_img) ?><!--">-->
<!--                                        </div>-->
<!--                                        <div class="item-thumb slick-slide" data-slick-index="6" aria-hidden="true" tabindex="-1" style="width: 99px;">-->
<!--                                            <img src="/--><?//= get_other_size_path('thumbnail', $model->feature_img) ?><!--">-->
<!--                                        </div>-->
<!--                                        <div class="item-thumb slick-slide" data-slick-index="7" aria-hidden="true" tabindex="-1" style="width: 99px;">-->
<!--                                            <img src="/--><?//= get_other_size_path('thumbnail', $model->feature_img) ?><!--">-->
<!--                                        </div>-->
<!--                                        <div class="item-thumb slick-slide" data-slick-index="8" aria-hidden="true" tabindex="-1" style="width: 99px;">-->
<!--                                            <img src="/--><?//= get_other_size_path('thumbnail', $model->feature_img) ?><!--">-->
<!--                                        </div>-->
<!--                                        <div class="item-thumb slick-slide" data-slick-index="9" aria-hidden="true" tabindex="-1" style="width: 99px;">-->
<!--                                            <img src="/--><?//= get_other_size_path('thumbnail', $model->feature_img) ?><!--">-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="prev-nav thumb-nav">-->
<!--                                <span class="lnr nav-left lnr-arrow-left"></span>-->
<!--                                <span class="lnr nav-right lnr-arrow-right"></span>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
                        <div class="item-action">
                            <div class="action-btns">
                                <a href="<?= get_meta_value('live-preview', $model->product_type ,$model->primaryKey) ?>" target="_blank" rel="nofollow" class="btn btn--round btn--lg"><?= Yii::t('app', 'Live Preview') ?></a>
                                <?php
                                    if (is_user_created_favorite($model->product_type, $model->id)) {
                                        echo \yii\helpers\Html::a('<span class="lnr lnr-heart"></span>' . Yii::t('app', 'Remove Favorite') . '</a>', url(['/favorite/favorite/delete', 'obj_type' => $model->product_type, 'obj_id' => $model->primaryKey]), ['data-method' => 'POST', 'class' => 'btn btn--round btn--lg btn--icon', 'style' => 'background-color: darkgray']);
                                    } else {
                                        echo \yii\helpers\Html::a('<span class="lnr lnr-heart"></span>' . Yii::t('app', 'Add To Favorites') . '</a>', url(['/favorite/favorite/create', 'obj_type' => $model->product_type, 'obj_id' => $model->primaryKey]), ['data-method' => 'POST', 'class' => 'btn btn--round btn--lg btn--icon', 'style' => 'background-color: crimson']);
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- end /.item__preview-thumb-->
                </div>
                <!-- end /.item-preview-->
                <div class="item-info">
                    <div class="item-navigation">
                        <ul class="nav nav-tabs">
                            <li>
                                <a href="#product-details" class="active" aria-controls="product-details" role="tab" data-toggle="tab"><?= Yii::t('app', 'Item Details') ?></a>
                            </li>
                            <li>
                                <a href="#product-comment" aria-controls="product-comment" role="tab" data-toggle="tab"><?= Yii::t('app', 'Comments') ?><span> (<?= count_all_comment_of_product($model->product_type, $model->primaryKey) ?>)</span></a>
                            </li>
<!--                            <li>-->
<!--                                <a href="#product-review" aria-controls="product-review" role="tab" data-toggle="tab">--><?//= Yii::t('app', 'Reviews') ?><!--<span> (0)</span> </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#product-support" aria-controls="product-support" role="tab" data-toggle="tab">--><?//= Yii::t('app', 'Support') ?><!--</a>-->
<!--                            </li>-->
                            <li>
                                <a href="#product-faq" aria-controls="product-faq" role="tab" data-toggle="tab"><?= Yii::t('app', 'Item FAQ') ?></a>
                            </li>
                        </ul>
                    </div>
                    <!-- end /.item-navigation -->

                    <div style="margin-top: 0" class="tab-content">
                        <?= $this->render('_product-details', [
                                'model' => $model,
                        ]) ?>

                        <?= $this->render('_product-comment', [
                            'model' => $model,
                        ]) ?>

<!--                        --><?//= $this->render('_product-review', [
//                            'model' => $model,
//                        ]) ?>

<!--                        --><?//= $this->render('_product-support', [
//                            'model' => $model,
//                        ]) ?>

                        <?= get_block_content('template_faq') ?>
                    </div>
                    <!-- end /.tab-content -->
                </div>
                <!-- end /.item-info -->
            </div>
            <!-- end /.col-md-8 -->

            <div class="col-lg-4">
                <aside class="sidebar sidebar--single-product">
                    <div class="sidebar-card card-pricing">
                        <div class="price">
                            <p style="font-weight: 500;font-size: 36px;line-height: 30px;color: #0674ec;"><?= format_product_price($model->promotional_price) ?> <?= get_currency_symbol($model->currency_unit) ?></p>
                        </div>
<!--                        <ul class="pricing-options">-->
<!--                            <li>-->
<!--                                <div class="custom-radio">-->
<!--                                    <input type="radio" id="opt1" class="" name="filter_opt" checked="">-->
<!--                                    <label for="opt1"> <span class="circle"></span>Single Site License –-->
<!--                                        <span class="pricing__opt">$20.00</span> </label>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <div class="custom-radio">-->
<!--                                    <input type="radio" id="opt2" class="" name="filter_opt"> <label for="opt2">-->
<!--                                        <span class="circle"></span>2 Sites License –-->
<!--                                        <span class="pricing__opt">$40.00</span> </label>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <div class="custom-radio">-->
<!--                                    <input type="radio" id="opt3" class="" name="filter_opt"> <label for="opt3">-->
<!--                                        <span class="circle"></span>Multi Site License – <span class="pricing__opt">$60.00</span>-->
<!--                                    </label>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                        </ul>-->
                        <!-- end /.pricing-options -->

                        <div class="purchase-button">
                            <a href="single-product.html#" class="btn btn--lg btn--round"><?= Yii::t('app', 'Purchase Now') ?></a>
                            <a href="single-product.html#" class="btn btn--lg btn--round cart-btn">
                                <span class="lnr lnr-cart"></span> <?= Yii::t('app', 'Add To Cart') ?></a>
                        </div>
                        <!-- end /.purchase-button -->
                    </div>
                    <!-- end /.sidebar--card -->

                    <div class="sidebar-card card--metadata">
                        <ul class="data">
<!--                            <li>-->
<!--                                <p>-->
<!--                                    <span class="lnr lnr-cart pcolor"></span>Total Sales</p>-->
<!--                                <span>426</span>-->
<!--                            </li>-->
                            <li>
                                <p>
                                    <span class="lnr lnr-heart scolor"></span><?= Yii::t('app', 'Favorites') ?></p>
                                <span><?= count_all_favorites($model->product_type, $model->primaryKey) ?></span>
                            </li>
                            <li>
                                <p>
                                    <span class="lnr lnr-bubble mcolor3"></span><?= Yii::t('app', 'Comments') ?></p>
                                <span><?= count_all_comment_of_product($model->product_type, $model->primaryKey) ?></span>
                            </li>
                        </ul>


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
                            <span class="rating__count">( 26 Ratings )</span>
                        </div>
                        <!-- end /.rating -->
                    </div>
                    <!-- end /.sidebar-card -->

                    <div class="sidebar-card card--product-infos">
                        <div class="card-title">
                            <h4><?= Yii::t('app', 'Product Information') ?></h4>
                        </div>

                        <ul class="infos">
                            <li>
                                <p class="data-label"><?= Yii::t('app', 'Released') ?></p>
                                <p class="info"><?= date('l, d F Y', strtotime($model->created_at));  ?></p>
                            </li>
                            <li>
                                <p class="data-label"><?= Yii::t('app', 'Updated') ?></p>
                                <p class="info"><?= date('l, d F Y', strtotime($model->created_at)); ?></p>
                            </li>
                            <li>
                                <p class="data-label"><?= Yii::t('app', 'Version') ?></p>
                                <p class="info"><?= get_meta_value('version', $model->product_type ,$model->primaryKey) ?></p>
                            </li>
                            <?php
                                $term_types = get_all_term_type_of_product_type($model->product_type);
                                foreach ($term_types as $termType) {
                                    $terms = get_all_term_of_obj($model->product_type, $model->primaryKey, $termType['name']);
                                    ?>
                                    <li>
                                        <p class="data-label"><?= Yii::t('app', slug_to_text($termType['name'])) ?></p>
                                        <p class="info">
                                            <?php
                                            foreach ($terms as $term) {
                                                ?>
                                                <a href="<?= get_product_term_url($model->product_type, $term['term']['term_type'], $term['term']['slug']) ?>"><?= $term['term']['name'] ?></a>,
                                            <?php }
                                            ?>
                                        </p>
                                    </li>
                                <?php }
                            ?>
                        </ul>
                    </div>
                    <!-- end /.aside -->

                    <div class="author-card sidebar-card ">
                        <div class="card-title">
                            <h4><?= Yii::t('app', 'Product Author') ?></h4>
                        </div>

                        <div class="author-infos">
                            <div class="author_avatar">
                                <img src="/<?= get_other_img_size_path('thumbnail', $model->author0->avatar) ?>" alt="Presenting the broken author avatar :D">
                            </div>

                            <div class="author">
                                <h4><?= $model->author0->username ?></h4>
                                <p><?= $model->author0->bio ?></p>
                            </div>
                            <!-- end /.author -->

<!--                            <div class="social social--color--filled">-->
<!--                                <ul>-->
<!--                                    <li>-->
<!--                                        <a href="single-product.html#"> <span class="fa fa-facebook"></span> </a>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <a href="single-product.html#"> <span class="fa fa-twitter"></span> </a>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <a href="single-product.html#"> <span class="fa fa-dribbble"></span> </a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </div>-->
                            <!-- end /.social -->

<!--                            <div class="author-btn">-->
<!--                                <a href="single-product.html#" class="btn btn--sm btn--round">View Profile</a>-->
<!--                                <a href="single-product.html#" class="btn btn--sm btn--round">Send Message</a>-->
<!--                            </div>-->
                            <!-- end /.author-btn -->
                        </div>
                        <!-- end /.author-infos -->


                    </div>
                    <!-- end /.author-card -->
                </aside>
                <!-- end /.aside -->
            </div>
            <!-- end /.col-md-4 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
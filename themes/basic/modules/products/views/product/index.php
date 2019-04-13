<?php
$this->title = Yii::t('app', slug_to_text($type));
?>

<?php
if (request()->get('type') == 'template') { ?>
    <section class="search-wrapper">
        <div class="search-area2 bgimage">
            <div class="bg_image_holder" style="background-image: url(&quot;/themes/basic/src/images/search.jpg&quot;); opacity: 1;">
                <img src="/themes/basic/src/images/search.jpg" alt="images/search.jpg">
            </div>
            <div class="container content_above">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="search">
                            <div class="search__title">
                                <h3>
                                    <span>35,270</span> <?= Yii::t('app', 'website templates from our creative community') ?>
                                </h3>
                            </div>
                            <div class="search__field">
                                <form action="" method="get">
                                    <div class="field-wrapper">
                                        <input class="relative-field rounded" type="text" name="ProductSearch[title]" placeholder="<?= request()->get('ProductSearch')['title'] == null ? Yii::t('app', 'Search your templates') : request()->get('ProductSearch')['title'] ?>">
                                        <button class="btn btn--round" type="submit"><?= Yii::t('app', 'Search') ?></button>
                                    </div>
                                </form>
                            </div>
                            <div class="breadcrumb">
                                <ul>
                                    <li>
                                        <a href="/"><?= Yii::t('app', 'Home') ?></a>
                                    </li>
                                    <li class="active">
                                        <a href="<?= get_product_type_url($type) ?>"><?= Yii::t('app', 'All') ?> <?= Yii::t('app', 'Templates') ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.search-area2 -->
    </section>
<?php }
?>

    <div class="filter-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filter-bar filter--bar2">
                        <div class="filter__option filter--text pull-left">

                        </div>
                        <form id="filter" action="<?= get_current_url() ?>" method="get">
                            <div class="pull-right">
                                <div class="filter__option filter--select">
                                    <div class="select-wrap">
                                        <select name="sort" id="#price-order" onchange='this.form.submit()'>
                                            <option value="promotional_price" <?= Yii::$app->request->get('sort') == 'promotional_price' ? 'selected' : '' ?>><?= Yii::t('app', 'Price') ?>
                                                : <?= Yii::t('app', 'Low to High') ?></option>
                                            <option value="-promotional_price" <?= Yii::$app->request->get('sort') == '-promotional_price' ? 'selected' : '' ?>><?= Yii::t('app', 'Price') ?>
                                                : <?= Yii::t('app', 'High to Low') ?></option>
                                        </select> <span class="lnr lnr-chevron-down"></span>
                                    </div>
                                </div>
                                <div class="filter__option filter--select">
                                    <div class="select-wrap">
                                        <select name="per-page" id="per-page" onchange='this.form.submit()'>
                                            <option value="12" <?= Yii::$app->request->get('per-page') == 12 ? 'selected' : '' ?>>12 <?= Yii::t('app', 'Items per page') ?></option>
                                            <option value="15" <?= Yii::$app->request->get('per-page') == 15 ? 'selected' : '' ?>>15 <?= Yii::t('app', 'Items per page') ?></option>
                                            <option value="25" <?= Yii::$app->request->get('per-page') == 25 ? 'selected' : '' ?>>25 <?= Yii::t('app', 'Items per page') ?></option>
                                            <option value="30" <?= Yii::$app->request->get('per-page') == 25 ? 'selected' : '' ?>>30 <?= Yii::t('app', 'Items per page') ?></option>
                                        </select> <span class="lnr lnr-chevron-down"></span>
                                    </div>
                                </div>
                                <style>
                                    .select-wrap select {
                                        padding: 0 20px 0 20px;
                                    }
                                </style>
                                <div class="filter__option filter--layout">
                                    <a href="/">
                                        <div class="svg-icon">
                                            <img class="svg" src="/themes/basic/src/images/svg/grid.svg" alt="it's just a layout control folks!">
                                        </div>
                                    </a> <a href="/">
                                        <div class="svg-icon">
                                            <img class="svg" src="/themes/basic/src/images/svg/list.svg" alt="it's just a layout control folks!">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- end filter-bar -->
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end filter-bar -->
        </div>
    </div>

    <section class="products section--padding2">
        <!-- start container -->
        <div class="container">
            <!-- start .row -->
            <div class="row">
                <!-- start .col-md-3 -->
                <?= $this->render('../../../../views/sidebar/sidebar_2'); ?>
                <!-- end /.col-md-3 -->

                <!-- start col-md-9 -->
                <div class="col-lg-9">
                        <?= \yii\widgets\ListView::widget([
                            'dataProvider' => $dataProvider,
                            'itemView'     => '_product',
                            'summary'      => '',
                            'layout' => '{summary}{items}{pager}',
                            'itemOptions' => [
                                'tag' => false
                            ],
                            'pager' => [
                                'prevPageLabel' => '<span class="lnr lnr-arrow-left"></span>',
                                'nextPageLabel' => '<span class="lnr lnr-arrow-right"></span>',
                                'maxButtonCount' => 4,
                            ]
                        ]); ?>
                </div>
                <!-- end /.col-md-9 -->
            </div>
            <!-- end /.row -->

        </div>
        <!-- end /.container -->

    </section>
<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">
            <li style="background-image: url(/<?= $model->feature_img ?>); width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;" class="flex-active-slide">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text animated fadeInUp">
                            <div class="slider-text-inner text-center">
                                <h1><?= $model->title ?></h1>
                                <h2><span><a href="/"><?= Yii::t('app', 'Home') ?></a> | <a href=""><?= Yii::t('app', $model->post_type) ?></a> | <?= $model->title ?></span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <ol class="flex-control-nav flex-control-paging"></ol><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1">Previous</a></li><li class="flex-nav-next"><a class="flex-next flex-disabled" href="#" tabindex="-1">Next</a></li></ul></div>
</aside>

<?= $model->content ?>
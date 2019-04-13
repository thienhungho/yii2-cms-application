<?php

$this->title = Yii::t('app', slug_to_text($type));

?>

<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">
            <li style="background-image: url(/images/img_bg_2.jpg); width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; transition: opacity 0.6s ease; z-index: 2;" class="flex-active-slide">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text animated fadeInUp">
                            <div class="slider-text-inner text-center">
                                <h1><?= Yii::t('app', $type) ?></h1>
                                <h2>
                                    <span><a href="/"><?= Yii::t('app', 'Home') ?></a> | <?= Yii::t('app', $type) ?></span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <ol class="flex-control-nav flex-control-paging"></ol>
        <ul class="flex-direction-nav">
            <li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1">Previous</a></li>
            <li class="flex-nav-next"><a class="flex-next flex-disabled" href="#" tabindex="-1">Next</a></li>
        </ul>
    </div>
</aside>

<div class="colorlib-blog colorlib-light-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box fadeInUp animated-fast">
                <h2>Read Our News</h2>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic
                    life One day however a small line of blind text by the name</p>
            </div>
        </div>
        <div class="row">
            <?= \yii\widgets\ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView'     => '_post',
                'summary' => '',
            ]); ?>
        </div>
    </div>
</div>
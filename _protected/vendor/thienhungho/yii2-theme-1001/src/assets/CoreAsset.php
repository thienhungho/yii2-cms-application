<?php

namespace thienhungho\Theme1001\assets;

use yii\web\AssetBundle;

class CoreAsset extends AssetBundle
{
    public $sourcePath = '@vendor/thienhungho/yii2-theme-1001/dist';

    public $css = [
        'css/lib/bootstrap.min.css',
        'css/lib/font-awesome.min.css',
        'css/lib/lazyYT.min.css',
        'css/lib/slick.css',
        'css/style.css',
        'css/responsive.css',
        ['css/lib/owl.carousel.min.css', ['position' => \yii\web\View::POS_END]],
    ];

    public $js = [
        ['js/lib/jquery.js', ['position' => \yii\web\View::POS_HEAD]],
        ['js/lib/owl.carousel.min.js', ['position' => \yii\web\View::POS_HEAD]],
        'js/lib/bootstrap.min.js',
        'js/lib/jquery-ui.min.js',
        'js/lib/TweenMax.min.js',
        'js/lib/lazyYT.js',
        'js/lib/masonry.pkgd.min.js',
        'js/lib/jquery.filterizr.min.js',
        'js/lib/slick.min.js',
        'js/lib/jquery.counterup.min.js',
        'js/lib/waypoints.min.js',
        'js/main.js',
    ];

    public $depends = [

    ];
}
<?php

namespace comingsoon\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css?family=Montserrat:400,700',
        'coming-soon/assets/bootstrap/css/bootstrap.css',
        'coming-soon/assets/css/magnific-popup.css',
        'coming-soon/assets/css/style.css'
    ];
    public $js = [
        'https://maps.google.com/maps/api/js',
        'coming-soon/assets/bootstrap/js/bootstrap.min.js',
        'coming-soon/assets/js/jquery.validate.min.js',
        'coming-soon/assets/js/jquery.magnific-popup.min.js',
        'coming-soon/assets/js/jquery.plugin.min.js',
        'coming-soon/assets/js/jquery.countdown.min.js',
        'coming-soon/assets/js/jquery.parallax.min.js',
        'coming-soon/assets/js/custom.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
<?php

namespace thienhungho\theme1002\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class CoreAsset extends AssetBundle
{
    public $sourcePath = '@vendor/thienhungho/yii2-theme-1002/dist';

    public $css = [
        'https://cdn5.thecatdev.com/mtn/global/plugins/pace/themes/pace-theme-flash.css',
        'https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all',
        'assets/global/plugins/font-awesome/css/font-awesome.min.css',
        'assets/global/plugins/simple-line-icons/simple-line-icons.min.css',
        'assets/global/plugins/bootstrap/css/bootstrap.min.css',
        'https://cdn.thecatdev.com/mtn/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',
        //        'https://cdn.thecatdev.com/mtn/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css',
        //        'https://cdn.thecatdev.com/mtn/global/plugins/morris/morris.css',
        //        'https://cdn.thecatdev.com/mtn/global/plugins/fullcalendar/fullcalendar.min.css',
        //        'https://cdn.thecatdev.com/mtn/global/plugins/jqvmap/jqvmap/jqvmap.css',
        'https://cdn.thecatdev.com/mtn/global/css/components-md.min.css',
        'https://cdn.thecatdev.com/mtn/global/css/plugins-md.min.css',
        'https://cdn.thecatdev.com/mtn/pages/css/profile.min.css',
        'https://cdn.thecatdev.com/mtn/global/css/plugins-md.min.css',
        'https://cdn.thecatdev.com/mtn/layouts/layout4/css/layout.min.css',
        'https://cdn2.thecatdev.com/mtn/layouts/layout4/css/themes/default.min.css',
        'https://cdn2.thecatdev.com/mtn/layouts/layout4/css/custom.min.css',
        'global/custom.css',
    ];
    public $js = [
        ['https://cdn5.thecatdev.com/mtn/global/plugins/pace/pace.min.js', ['position' => \yii\web\View::POS_HEAD]],
        'https://cdn2.thecatdev.com/mtn/global/plugins/respond.min.js',
        ['https://cdn2.thecatdev.com/mtn/global/plugins/respond.min.js', ['condition' => 'lte IE9']],
        ['https://cdn2.thecatdev.com/mtn/global/plugins/excanvas.min.js', ['condition' => 'lte IE9']],
        ['https://cdn2.thecatdev.com/mtn/global/plugins/ie8.fix.min.js', ['condition' => 'lte IE9']],
        //        'https://cdn.thecatdev.com/mtn/global/plugins/jquery.min.js',
        'https://cdn3.thecatdev.com/mtn/global/plugins/bootstrap/js/bootstrap.min.js',
        'https://cdn3.thecatdev.com/mtn/global/plugins/js.cookie.min.js',
        'https://cdn3.thecatdev.com/mtn/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
        'https://cdn3.thecatdev.com/mtn/global/plugins/jquery.blockui.min.js',
        'https://cdn3.thecatdev.com/mtn/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
        'https://cdn3.thecatdev.com/mtn/global/plugins/moment.min.js',
        'https://cdn4.thecatdev.com/mtn/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js',
        'https://cdn4.thecatdev.com/mtn/global/plugins/morris/morris.min.js',
        'https://cdn4.thecatdev.com/mtn/global/plugins/morris/raphael-min.js',
        'https://cdn4.thecatdev.com/mtn/global/plugins/counterup/jquery.waypoints.min.js',
        'https://cdn4.thecatdev.com/mtn/global/plugins/counterup/jquery.counterup.min.js',
        //        'https://cdn.thecatdev.com/mtn/global/plugins/amcharts/amcharts/amcharts.js',
        //        'https://cdn.thecatdev.com/mtn/global/plugins/amcharts/amcharts/serial.js',
        //        'https://cdn.thecatdev.com/mtn/global/plugins/amcharts/amcharts/pie.js',
        //        'https://cdn.thecatdev.com/mtn/global/plugins/amcharts/amcharts/radar.js',
        //        'https://cdn.thecatdev.com/mtn/global/plugins/amcharts/amcharts/themes/light.js',
        //        'https://cdn.thecatdev.com/mtn/global/plugins/amcharts/amcharts/themes/patterns.js',
        //        'https://cdn.thecatdev.com/mtn/global/plugins/amcharts/amcharts/themes/chalk.js',
        //        'https://cdn.thecatdev.com/mtn/global/plugins/amcharts/ammap/ammap.js',
        //        'https://cdn.thecatdev.com/mtn/global/plugins/amcharts/ammap/maps/js/worldLow.js',
        //        'https://cdn.thecatdev.com/mtn/global/plugins/amcharts/amstockcharts/amstock.js',
        //        'https://cdn.thecatdev.com/mtn/global/plugins/fullcalendar/fullcalendar.min.js',
        //        'https://cdn.thecatdev.com/mtn/global/plugins/horizontal-timeline/horizontal-timeline.js',
        //        'https://cdn.thecatdev.com/mtn/global/plugins/flot/jquery.flot.min.js',
        //        'https://cdn.thecatdev.com/mtn/global/plugins/flot/jquery.flot.resize.min.js',
        //        'https://cdn.thecatdev.com/mtn/global/plugins/flot/jquery.flot.categories.min.js',
        //        'https://cdn.thecatdev.com/mtn/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js',
        //        'https://cdn.thecatdev.com/mtn/global/plugins/jquery.sparkline.min.js',
        //        'https://cdn.thecatdev.com/mtn/global/plugins/jqvmap/jqvmap/jquery.vmap.js',
        //        'https://cdn.thecatdev.com/mtn/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js',
        //        'https://cdn.thecatdev.com/mtn/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js',
        //        'https://cdn.thecatdev.com/mtn/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js',
        //        'https://cdn.thecatdev.com/mtn/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js',
        //        'https://cdn.thecatdev.com/mtn/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js',
        //        'https://cdn.thecatdev.com/mtn/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js',
        'https://cdn4.thecatdev.com/mtn/global/scripts/app.min.js',
        'https://cdn5.thecatdev.com/mtn/pages/scripts/dashboard.min.js',
        'https://cdn5.thecatdev.com/mtn/layouts/layout4/scripts/layout.min.js',
        'https://cdn5.thecatdev.com/mtn/layouts/layout4/scripts/demo.min.js',
        'https://cdn5.thecatdev.com/mtn/layouts/global/scripts/quick-sidebar.min.js',
        'https://cdn5.thecatdev.com/mtn/layouts/global/scripts/quick-nav.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
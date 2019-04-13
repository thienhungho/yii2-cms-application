<?php
/**
 * Register CSS
 */
\frontend\assets\AppAsset::register($this);
$this->registerCssFile('/themes/basic/src/css/plugins.min.css');
$this->registerCssFile('/themes/basic/src/style.css');
//$this->registerCssFile('/themes/basic/src/animate.css');
//$this->registerCssFile('/themes/basic/src/preview.css');
/**
 * Register JS
 */
$this->registerJsFile('https://code.jquery.com/jquery.min.js', ['position' => \yii\web\View::POS_HEAD]);
$this->registerJsFile('/src/js/ResizeSensor.js', ['position' => \yii\web\View::POS_HEAD]);
$this->registerJsFile('/src/js/theia-sticky-sidebar.js', ['position' => \yii\web\View::POS_HEAD]);
$this->registerJsFile('/themes/basic/src/js/plugins.min.js');
$this->registerJsFile('https://maps.googleapis.com/maps/api/js?key=AIzaSyBeySPFGz7DIUTrReCRQT6HYaMM0ia0knA');
$this->registerJsFile('/themes/basic/src/js/script.min.js');
?><?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= substr(Yii::$app->language,0, 2) ?>">
    <head>
        <?php head() ?>
        <style>
            .list-view {
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                margin-right: -15px;
                margin-left: -15px;
            }
            ul > li.prev.disabled > span,
            ul > li.next.disabled > span{
                line-height: 36px;
                display: inline-block;
                min-width: 48px;
                -webkit-transition: .3s;
                -o-transition: .3s;
                transition: .3s;
                -webkit-border-radius: 25px;
                border-radius: 25px;
                font-weight: 500;
                margin-right: 2px;
                text-align: center;
                background-color: white;
                margin: 0 4px;
            }
            ul.pagination > li > a{
                line-height: 36px;
                display: inline-block;
                min-width: 48px;
                -webkit-transition: .3s;
                -o-transition: .3s;
                transition: .3s;
                -webkit-border-radius: 25px;
                border-radius: 25px;
                font-weight: 500;
                margin-right: 2px;
                text-align: center;
                background-color: white;
                margin: 0 4px;
            }
            ul.pagination > li.active > a {
                background: #0674ec;
                color: #fff;
            }
            .single_blog_content .share_tags{
                padding: 28px 20px 20px 20px;
            }
            .info-contact li .info-icon{
                color: #555;
            }
            .footer-big .footer-menu ul li a, .footer-big p, .footer-big ul li{
                color: #555;
            }
            .footer-area.footer--light .footer-menu ul li a{
                color: #555;
            }
            .footer-area.footer--light .footer-menu ul li a:hover,
            .footer-area.footer--light .footer-menu ul li a:focus{
                color: #0674ec;
            }
            .form-group p.help-block-error{
                color: red;
            }
        </style>
    </head>
    <body class="home1 mutlti-vendor">
    <?php begin_body() ?>
    <?= $this->render('component/menu-area') ?>
    <?= $content ?>
    <?= get_block_content('call-to-action-area', Yii::$app->language) ?>
    <?= get_block_content('footer-area') ?>
    <?php end_body() ?>
    </body>
    </html>
<?php end_page() ?>
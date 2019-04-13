<?php
/* @var $this \yii\web\View */

/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;

/**
 * Register CSS File
 */
/**
 * Register JS File
 */
AppAsset::register($this);
unset($this->assetBundles['\yii\web\JqueryAsset']);

$this->registerMetaTag(['name' => 'robots', 'content' => 'noindex,nofollow']);
$this->registerMetaTag(['http-equiv' => 'X-UA-Compatible', 'content' => 'IE=edge']);
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1']);


?><?php $this->beginPage() ?>
    <!DOCTYPE html><!--[if IE 8]>
    <html lang="<?= substr(get_current_client_language(), 0, 2) ?>" class="ie8 no-js"> <![endif]--><!--[if IE 9]>
    <html lang="<?= substr(get_current_client_language(), 0, 2) ?>" class="ie9 no-js"> <![endif]--><!--[if !IE]><!-->
    <html lang="<?= substr(get_current_client_language(), 0, 2) ?>">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <?= Html::csrfMetaTags() ?>
        <?= favicon() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md">
    <?php $this->beginBody() ?>
    <!-- BEGIN HEADER -->
    <div class="page-header navbar navbar-fixed-top">
        <!-- BEGIN HEADER INNER -->
        <div class="page-header-inner ">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                <a href="<?= url(['/site/index']) ?>" style="font-size: 1.6em; color: white; text-decoration: none; line-height: 3.2em;">
                    <img style="max-width: 140px;margin: 0;opacity: 1; padding-left: 10px;" src="/uploads/thecatdev-logo-light.png" alt="logo" class="logo-default" />
                </a>
                <div class="menu-toggler sidebar-toggler">
                    <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                </div>
            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <?= $this->render('component/nav-action') ?>
            <!-- BEGIN PAGE TOP -->
            <div class="page-top">
                <!-- BEGIN HEADER SEARCH BOX -->
                <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
                <?= $this->render('component/nav-search') ?>
                <!-- END HEADER SEARCH BOX -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <?= $this->render('component/top-nav-menu') ?>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END PAGE TOP -->
        </div>
        <!-- END HEADER INNER -->
    </div>
    <!-- END HEADER -->
    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"></div>
    <!-- END HEADER & CONTENT DIVIDER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <?= $this->render('component/page-sidebar') ?>
        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">
                <!-- BEGIN PAGE HEAD-->
                <div class="page-head">
                    <!-- BEGIN PAGE TITLE -->
                    <div class="page-title">
                        <h1><?= t('app', $this->title) ?>
                        </h1>
                    </div>
                    <!-- END PAGE TITLE -->
                    <!-- BEGIN PAGE TOOLBAR -->
                    <?= $this->render('component/page-toolbar') ?>
                    <!-- END PAGE TOOLBAR -->
                </div>
                <!-- END PAGE HEAD-->
                <!-- BEGIN PAGE BREADCRUMB -->
                <?= \yii\widgets\Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <!-- END PAGE BREADCRUMB -->
                <!-- BEGIN PAGE BASE CONTENT -->
                <div class="row">
                    <div class="col-lg-12 col-xs-12 col-sm-12">
                        <div class="portlet light bordered">
                            <?= $content ?>
                            <?php foreach (Yii::$app->session->getAllFlashes() as $message):; ?>
                                <?= \kartik\widgets\Growl::widget([
                                    'type' => (!empty($message['type'])) ? $message['type'] : \kartik\widgets\Growl::TYPE_DANGER,
                                    'title' => (!empty($message['title'])) ? Html::encode($message['title']) : t('app', 'Title Not Set!'),
                                    'icon' => (!empty($message['icon'])) ? $message['icon'] : 'glyphicon glyphicon-remove-sign',
                                    'body' => (!empty($message['message'])) ? Html::encode($message['message']) : t('app', 'Message Not Set!'),
                                    'showSeparator' => true,
                                    'delay' => 1,//This delay is how long before the message shows
                                    'pluginOptions' => [
                                        'delay' => (!empty($message['duration'])) ? $message['duration'] : 3000,
                                        'showProgressbar' => true,
                                        'placement' => [
                                            'from' => (!empty($message['positonY'])) ? $message['positonY'] : 'bottom',
                                            'align' => (!empty($message['positonX'])) ? $message['positonX'] : 'right',
                                        ]
                                    ]
                                ]);
                                ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- END PAGE BASE CONTENT -->
            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
        <!-- BEGIN QUICK SIDEBAR -->
<!--        <a href="javascript:;" class="page-quick-sidebar-toggler"> <i class="icon-login"></i> </a>-->
<!--        <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">-->
<!--            <div class="page-quick-sidebar">-->
<!--                <ul class="nav nav-tabs">-->
<!--                    <li class="active">-->
<!--                        <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users-->
<!--                            <span class="badge badge-danger">2</span> </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts-->
<!--                            <span class="badge badge-success">7</span> </a>-->
<!--                    </li>-->
<!--                    <li class="dropdown">-->
<!--                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More-->
<!--                            <i class="fa fa-angle-down"></i> </a>-->
<!--                        <ul class="dropdown-menu pull-right">-->
<!--                            <li>-->
<!--                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">-->
<!--                                    <i class="icon-bell"></i> Alerts </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">-->
<!--                                    <i class="icon-info"></i> Notifications </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">-->
<!--                                    <i class="icon-speech"></i> Activities </a>-->
<!--                            </li>-->
<!--                            <li class="divider"></li>-->
<!--                            <li>-->
<!--                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">-->
<!--                                    <i class="icon-settings"></i> Settings </a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                </ul>-->
<!--                <div class="tab-content">-->
<!--                    <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">-->
<!--                        <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">-->
<!--                            <h3 class="list-heading">Staff</h3>-->
<!--                            <ul class="media-list list-items">-->
<!--                                <li class="media">-->
<!--                                    <div class="media-status">-->
<!--                                        <span class="badge badge-success">8</span>-->
<!--                                    </div>-->
<!--                                    <img class="media-object" src="/cat-admin/assets/layouts/layout/img/avatar3.jpg" alt="...">-->
<!--                                    <div class="media-body">-->
<!--                                        <h4 class="media-heading">Bob Nilson</h4>-->
<!--                                        <div class="media-heading-sub"> Project Manager</div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li class="media">-->
<!--                                    <img class="media-object" src="/cat-admin/assets/layouts/layout/img/avatar1.jpg" alt="...">-->
<!--                                    <div class="media-body">-->
<!--                                        <h4 class="media-heading">Nick Larson</h4>-->
<!--                                        <div class="media-heading-sub"> Art Director</div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li class="media">-->
<!--                                    <div class="media-status">-->
<!--                                        <span class="badge badge-danger">3</span>-->
<!--                                    </div>-->
<!--                                    <img class="media-object" src="/cat-admin/assets/layouts/layout/img/avatar4.jpg" alt="...">-->
<!--                                    <div class="media-body">-->
<!--                                        <h4 class="media-heading">Deon Hubert</h4>-->
<!--                                        <div class="media-heading-sub"> CTO</div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li class="media">-->
<!--                                    <img class="media-object" src="/cat-admin/assets/layouts/layout/img/avatar2.jpg" alt="...">-->
<!--                                    <div class="media-body">-->
<!--                                        <h4 class="media-heading">Ella Wong</h4>-->
<!--                                        <div class="media-heading-sub"> CEO</div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                            <h3 class="list-heading">Customers</h3>-->
<!--                            <ul class="media-list list-items">-->
<!--                                <li class="media">-->
<!--                                    <div class="media-status">-->
<!--                                        <span class="badge badge-warning">2</span>-->
<!--                                    </div>-->
<!--                                    <img class="media-object" src="/cat-admin/assets/layouts/layout/img/avatar6.jpg" alt="...">-->
<!--                                    <div class="media-body">-->
<!--                                        <h4 class="media-heading">Lara Kunis</h4>-->
<!--                                        <div class="media-heading-sub"> CEO, Loop Inc</div>-->
<!--                                        <div class="media-heading-small"> Last seen 03:10 AM</div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li class="media">-->
<!--                                    <div class="media-status">-->
<!--                                        <span class="label label-sm label-success">new</span>-->
<!--                                    </div>-->
<!--                                    <img class="media-object" src="/cat-admin/assets/layouts/layout/img/avatar7.jpg" alt="...">-->
<!--                                    <div class="media-body">-->
<!--                                        <h4 class="media-heading">Ernie Kyllonen</h4>-->
<!--                                        <div class="media-heading-sub"> Project Manager, <br> SmartBizz PTL</div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li class="media">-->
<!--                                    <img class="media-object" src="/cat-admin/assets/layouts/layout/img/avatar8.jpg" alt="...">-->
<!--                                    <div class="media-body">-->
<!--                                        <h4 class="media-heading">Lisa Stone</h4>-->
<!--                                        <div class="media-heading-sub"> CTO, Keort Inc</div>-->
<!--                                        <div class="media-heading-small"> Last seen 13:10 PM</div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li class="media">-->
<!--                                    <div class="media-status">-->
<!--                                        <span class="badge badge-success">7</span>-->
<!--                                    </div>-->
<!--                                    <img class="media-object" src="/cat-admin/assets/layouts/layout/img/avatar9.jpg" alt="...">-->
<!--                                    <div class="media-body">-->
<!--                                        <h4 class="media-heading">Deon Portalatin</h4>-->
<!--                                        <div class="media-heading-sub"> CFO, H&D LTD</div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li class="media">-->
<!--                                    <img class="media-object" src="/cat-admin/assets/layouts/layout/img/avatar10.jpg" alt="...">-->
<!--                                    <div class="media-body">-->
<!--                                        <h4 class="media-heading">Irina Savikova</h4>-->
<!--                                        <div class="media-heading-sub"> CEO, Tizda Motors Inc</div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li class="media">-->
<!--                                    <div class="media-status">-->
<!--                                        <span class="badge badge-danger">4</span>-->
<!--                                    </div>-->
<!--                                    <img class="media-object" src="/cat-admin/assets/layouts/layout/img/avatar11.jpg" alt="...">-->
<!--                                    <div class="media-body">-->
<!--                                        <h4 class="media-heading">Maria Gomez</h4>-->
<!--                                        <div class="media-heading-sub"> Manager, Infomatic Inc</div>-->
<!--                                        <div class="media-heading-small"> Last seen 03:10 AM</div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                        <div class="page-quick-sidebar-item">-->
<!--                            <div class="page-quick-sidebar-chat-user">-->
<!--                                <div class="page-quick-sidebar-nav">-->
<!--                                    <a href="javascript:;" class="page-quick-sidebar-back-to-list">-->
<!--                                        <i class="icon-arrow-left"></i>Back</a>-->
<!--                                </div>-->
<!--                                <div class="page-quick-sidebar-chat-user-messages">-->
<!--                                    <div class="post out">-->
<!--                                        <img class="avatar" alt="" src="/cat-admin/assets/layouts/layout/img/avatar3.jpg" />-->
<!--                                        <div class="message">-->
<!--                                            <span class="arrow"></span> <a href="javascript:;" class="name">Bob-->
<!--                                                Nilson</a> <span class="datetime">20:15</span> <span class="body"> When could you send me the report ? </span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="post in">-->
<!--                                        <img class="avatar" alt="" src="/cat-admin/assets/layouts/layout/img/avatar2.jpg" />-->
<!--                                        <div class="message">-->
<!--                                            <span class="arrow"></span> <a href="javascript:;" class="name">Ella-->
<!--                                                Wong</a> <span class="datetime">20:15</span> <span class="body"> Its almost done. I will be sending it shortly </span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="post out">-->
<!--                                        <img class="avatar" alt="" src="/cat-admin/assets/layouts/layout/img/avatar3.jpg" />-->
<!--                                        <div class="message">-->
<!--                                            <span class="arrow"></span> <a href="javascript:;" class="name">Bob-->
<!--                                                Nilson</a> <span class="datetime">20:15</span> <span class="body"> Alright. Thanks! :) </span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="post in">-->
<!--                                        <img class="avatar" alt="" src="/cat-admin/assets/layouts/layout/img/avatar2.jpg" />-->
<!--                                        <div class="message">-->
<!--                                            <span class="arrow"></span> <a href="javascript:;" class="name">Ella-->
<!--                                                Wong</a> <span class="datetime">20:16</span> <span class="body"> You are most welcome. Sorry for the delay. </span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="post out">-->
<!--                                        <img class="avatar" alt="" src="/cat-admin/assets/layouts/layout/img/avatar3.jpg" />-->
<!--                                        <div class="message">-->
<!--                                            <span class="arrow"></span> <a href="javascript:;" class="name">Bob-->
<!--                                                Nilson</a> <span class="datetime">20:17</span> <span class="body"> No probs. Just take your time :) </span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="post in">-->
<!--                                        <img class="avatar" alt="" src="/cat-admin/assets/layouts/layout/img/avatar2.jpg" />-->
<!--                                        <div class="message">-->
<!--                                            <span class="arrow"></span> <a href="javascript:;" class="name">Ella-->
<!--                                                Wong</a> <span class="datetime">20:40</span> <span class="body"> Alright. I just emailed it to you. </span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="post out">-->
<!--                                        <img class="avatar" alt="" src="/cat-admin/assets/layouts/layout/img/avatar3.jpg" />-->
<!--                                        <div class="message">-->
<!--                                            <span class="arrow"></span> <a href="javascript:;" class="name">Bob-->
<!--                                                Nilson</a> <span class="datetime">20:17</span> <span class="body"> Great! Thanks. Will check it right away. </span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="post in">-->
<!--                                        <img class="avatar" alt="" src="/cat-admin/assets/layouts/layout/img/avatar2.jpg" />-->
<!--                                        <div class="message">-->
<!--                                            <span class="arrow"></span> <a href="javascript:;" class="name">Ella-->
<!--                                                Wong</a> <span class="datetime">20:40</span> <span class="body"> Please let me know if you have any comment. </span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="post out">-->
<!--                                        <img class="avatar" alt="" src="/cat-admin/assets/layouts/layout/img/avatar3.jpg" />-->
<!--                                        <div class="message">-->
<!--                                            <span class="arrow"></span> <a href="javascript:;" class="name">Bob-->
<!--                                                Nilson</a> <span class="datetime">20:17</span> <span class="body"> Sure. I will check and buzz you if anything needs to be corrected. </span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="page-quick-sidebar-chat-user-form">-->
<!--                                    <div class="input-group">-->
<!--                                        <input type="text" class="form-control" placeholder="Type a message here...">-->
<!--                                        <div class="input-group-btn">-->
<!--                                            <button type="button" class="btn green">-->
<!--                                                <i class="icon-paper-clip"></i>-->
<!--                                            </button>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">-->
<!--                        <div class="page-quick-sidebar-alerts-list">-->
<!--                            <h3 class="list-heading">General</h3>-->
<!--                            <ul class="feeds list-items">-->
<!--                                <li>-->
<!--                                    <div class="col1">-->
<!--                                        <div class="cont">-->
<!--                                            <div class="cont-col1">-->
<!--                                                <div class="label label-sm label-info">-->
<!--                                                    <i class="fa fa-check"></i>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="cont-col2">-->
<!--                                                <div class="desc"> You have 4 pending tasks.-->
<!--                                                    <span class="label label-sm label-warning "> Take action-->
<!--                                                            <i class="fa fa-share"></i>-->
<!--                                                        </span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col2">-->
<!--                                        <div class="date"> Just now</div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="javascript:;">-->
<!--                                        <div class="col1">-->
<!--                                            <div class="cont">-->
<!--                                                <div class="cont-col1">-->
<!--                                                    <div class="label label-sm label-success">-->
<!--                                                        <i class="fa fa-bar-chart-o"></i>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="cont-col2">-->
<!--                                                    <div class="desc"> Finance Report for year 2013 has been released.-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="col2">-->
<!--                                            <div class="date"> 20 mins</div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <div class="col1">-->
<!--                                        <div class="cont">-->
<!--                                            <div class="cont-col1">-->
<!--                                                <div class="label label-sm label-danger">-->
<!--                                                    <i class="fa fa-user"></i>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="cont-col2">-->
<!--                                                <div class="desc"> You have 5 pending membership that requires a quick-->
<!--                                                    review.-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col2">-->
<!--                                        <div class="date"> 24 mins</div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <div class="col1">-->
<!--                                        <div class="cont">-->
<!--                                            <div class="cont-col1">-->
<!--                                                <div class="label label-sm label-info">-->
<!--                                                    <i class="fa fa-shopping-cart"></i>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="cont-col2">-->
<!--                                                <div class="desc"> New order received with-->
<!--                                                    <span class="label label-sm label-success"> Reference Number: DR23923 </span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col2">-->
<!--                                        <div class="date"> 30 mins</div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <div class="col1">-->
<!--                                        <div class="cont">-->
<!--                                            <div class="cont-col1">-->
<!--                                                <div class="label label-sm label-success">-->
<!--                                                    <i class="fa fa-user"></i>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="cont-col2">-->
<!--                                                <div class="desc"> You have 5 pending membership that requires a quick-->
<!--                                                    review.-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col2">-->
<!--                                        <div class="date"> 24 mins</div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <div class="col1">-->
<!--                                        <div class="cont">-->
<!--                                            <div class="cont-col1">-->
<!--                                                <div class="label label-sm label-info">-->
<!--                                                    <i class="fa fa-bell-o"></i>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="cont-col2">-->
<!--                                                <div class="desc"> Web server hardware needs to be upgraded.-->
<!--                                                    <span class="label label-sm label-warning"> Overdue </span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col2">-->
<!--                                        <div class="date"> 2 hours</div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="javascript:;">-->
<!--                                        <div class="col1">-->
<!--                                            <div class="cont">-->
<!--                                                <div class="cont-col1">-->
<!--                                                    <div class="label label-sm label-default">-->
<!--                                                        <i class="fa fa-briefcase"></i>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="cont-col2">-->
<!--                                                    <div class="desc"> IPO Report for year 2013 has been released.</div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="col2">-->
<!--                                            <div class="date"> 20 mins</div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                            <h3 class="list-heading">System</h3>-->
<!--                            <ul class="feeds list-items">-->
<!--                                <li>-->
<!--                                    <div class="col1">-->
<!--                                        <div class="cont">-->
<!--                                            <div class="cont-col1">-->
<!--                                                <div class="label label-sm label-info">-->
<!--                                                    <i class="fa fa-check"></i>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="cont-col2">-->
<!--                                                <div class="desc"> You have 4 pending tasks.-->
<!--                                                    <span class="label label-sm label-warning "> Take action-->
<!--                                                            <i class="fa fa-share"></i>-->
<!--                                                        </span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col2">-->
<!--                                        <div class="date"> Just now</div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="javascript:;">-->
<!--                                        <div class="col1">-->
<!--                                            <div class="cont">-->
<!--                                                <div class="cont-col1">-->
<!--                                                    <div class="label label-sm label-danger">-->
<!--                                                        <i class="fa fa-bar-chart-o"></i>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="cont-col2">-->
<!--                                                    <div class="desc"> Finance Report for year 2013 has been released.-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="col2">-->
<!--                                            <div class="date"> 20 mins</div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <div class="col1">-->
<!--                                        <div class="cont">-->
<!--                                            <div class="cont-col1">-->
<!--                                                <div class="label label-sm label-default">-->
<!--                                                    <i class="fa fa-user"></i>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="cont-col2">-->
<!--                                                <div class="desc"> You have 5 pending membership that requires a quick-->
<!--                                                    review.-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col2">-->
<!--                                        <div class="date"> 24 mins</div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <div class="col1">-->
<!--                                        <div class="cont">-->
<!--                                            <div class="cont-col1">-->
<!--                                                <div class="label label-sm label-info">-->
<!--                                                    <i class="fa fa-shopping-cart"></i>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="cont-col2">-->
<!--                                                <div class="desc"> New order received with-->
<!--                                                    <span class="label label-sm label-success"> Reference Number: DR23923 </span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col2">-->
<!--                                        <div class="date"> 30 mins</div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <div class="col1">-->
<!--                                        <div class="cont">-->
<!--                                            <div class="cont-col1">-->
<!--                                                <div class="label label-sm label-success">-->
<!--                                                    <i class="fa fa-user"></i>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="cont-col2">-->
<!--                                                <div class="desc"> You have 5 pending membership that requires a quick-->
<!--                                                    review.-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col2">-->
<!--                                        <div class="date"> 24 mins</div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <div class="col1">-->
<!--                                        <div class="cont">-->
<!--                                            <div class="cont-col1">-->
<!--                                                <div class="label label-sm label-warning">-->
<!--                                                    <i class="fa fa-bell-o"></i>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="cont-col2">-->
<!--                                                <div class="desc"> Web server hardware needs to be upgraded.-->
<!--                                                    <span class="label label-sm label-default "> Overdue </span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col2">-->
<!--                                        <div class="date"> 2 hours</div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="javascript:;">-->
<!--                                        <div class="col1">-->
<!--                                            <div class="cont">-->
<!--                                                <div class="cont-col1">-->
<!--                                                    <div class="label label-sm label-info">-->
<!--                                                        <i class="fa fa-briefcase"></i>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="cont-col2">-->
<!--                                                    <div class="desc"> IPO Report for year 2013 has been released.</div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="col2">-->
<!--                                            <div class="date"> 20 mins</div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">-->
<!--                        <div class="page-quick-sidebar-settings-list">-->
<!--                            <h3 class="list-heading">General Settings</h3>-->
<!--                            <ul class="list-items borderless">-->
<!--                                <li> Enable Notifications-->
<!--                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">-->
<!--                                </li>-->
<!--                                <li> Allow Tracking-->
<!--                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF">-->
<!--                                </li>-->
<!--                                <li> Log Errors-->
<!--                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">-->
<!--                                </li>-->
<!--                                <li> Auto Sumbit Issues-->
<!--                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">-->
<!--                                </li>-->
<!--                                <li> Enable SMS Alerts-->
<!--                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                            <h3 class="list-heading">System Settings</h3>-->
<!--                            <ul class="list-items borderless">-->
<!--                                <li> Security Level <select class="form-control input-inline input-sm input-small">-->
<!--                                        <option value="1">Normal</option>-->
<!--                                        <option value="2" selected>Medium</option>-->
<!--                                        <option value="e">High</option>-->
<!--                                    </select>-->
<!--                                </li>-->
<!--                                <li> Failed Email Attempts-->
<!--                                    <input class="form-control input-inline input-sm input-small" value="5" /></li>-->
<!--                                <li> Secondary SMTP Port-->
<!--                                    <input class="form-control input-inline input-sm input-small" value="3560" /></li>-->
<!--                                <li> Notify On System Error-->
<!--                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">-->
<!--                                </li>-->
<!--                                <li> Notify On SMTP Error-->
<!--                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                            <div class="inner-content">-->
<!--                                <button class="btn btn-success">-->
<!--                                    <i class="icon-settings"></i> Save Changes-->
<!--                                </button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <!-- END QUICK SIDEBAR -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <div class="page-footer">
        <div class="page-footer-inner">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?> by <a target="_blank" href="http://thecatdev.com">TheCatDev</a>
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <!-- END FOOTER -->
    <!-- BEGIN QUICK NAV -->
<!--    <nav class="quick-nav">-->
<!--        <a class="quick-nav-trigger" href="#0"> <span aria-hidden="true"></span> </a>-->
<!--        <ul>-->
<!--            <li>-->
<!--                <a href="" target="_blank" class="active">-->
<!--                    <span>Purchase Metronic</span> <i class="icon-basket"></i> </a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a href="" target="_blank">-->
<!--                    <span>Customer Reviews</span> <i class="icon-users"></i> </a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a href="" target="_blank"> <span>Showcase</span>-->
<!--                    <i class="icon-user"></i> </a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a href="" target="_blank"> <span>Changelog</span>-->
<!--                    <i class="icon-graph"></i> </a>-->
<!--            </li>-->
<!--        </ul>-->
<!--        <span aria-hidden="true" class="quick-nav-bg"></span>-->
<!--    </nav>-->
<!--    <div class="quick-nav-overlay"></div>-->
    <!-- END QUICK NAV -->
    <script src="/cat-admin/assets/global/plugins/jquery.min.js"></script>
    <?php $this->endBody() ?>
    <script>$(document).ready(function(){$('#clickmewow').click(function(){$('#radio1003').attr('checked','checked');});}</script>
    </body>
    </html>
<?php $this->endPage() ?>
<!-- Copyright 2018 by Thecatdev -->

<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);
$modules = require __DIR__ . '/modules.php';
$rules = require __DIR__ . '/rules.php';
$theme = require __DIR__ . '/theme.php';
return [
    'id'                  => 'app-comingsoon',
    'basePath'            => dirname(__DIR__),
    'controllerNamespace' => 'comingsoon\controllers',
    'bootstrap'           => ['log'],
    'modules'             => $modules,
    'components'          => [
        'request'      => [
            'csrfParam' => '_csrf-comingsoon',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        /**
         * User
         */
        'user' => [
            'identityClass' => '\thienhungho\UserManagement\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity', 'httpOnly' => true],
        ],
        /**
         * Session
         */
        'session'      => [
            // this is the name of the session cookie used for login on the backend
            'name' => '_session',
            'savePath' => dirname(dirname(__DIR__)) . '/tmp',
        ],
        /**
         * COMPRESS VIEW
         * See more at: https://github.com/rmrevin/yii2-minify-view
         */
        'view' => [
            'class' => '\rmrevin\yii\minify\View',
            'enableMinify' => true,
            'concatCss' => true,
            'minifyCss' => true,
            'concatJs' => false,
            'minifyJs' => false,
            'minifyOutput' => true,
            'webPath' => '@web',
            'basePath' => '@webroot',
            'minifyPath' => '@webroot/minify',
            'jsPosition' => [ \yii\web\View::POS_END ],
            'forceCharset' => 'UTF-8',
            'expandImports' => true,
            'compressOptions' => ['extra' => true],
        ],
        'urlManager' => [
            'rules' => $rules,
        ],
    ],
    'params'              => $params,
];

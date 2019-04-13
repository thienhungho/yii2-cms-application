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
    'id'                  => 'app-backend',
    'basePath'            => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap'           => ['log'],
    'modules'             => $modules,
    'components'          => [
        'request'      => [
            'csrfParam' => '_csrf-backend',
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
            'enableMinify' => !YII_DEBUG,
            'concatCss' => true,
            'minifyCss' => true,
            'concatJs' => false,
            'minifyJs' => false,
            'minifyOutput' => true,
            'webPath' => '@web',
            'basePath' => '@webroot', // path alias to web base
            'minifyPath' => '@webroot/minify', // path alias to save minify result
            'jsPosition' => [ \yii\web\View::POS_END ], // positions of js files to be minified
            'forceCharset' => 'UTF-8', // charset forcibly assign, otherwise will use all of the files found charset
            'expandImports' => true, // whether to change @import on content
            'compressOptions' => ['extra' => true], // options for compress
            'excludeFiles' => ['ace.js'],
            'excludeBundles' => [],
            'theme' => $theme,
        ],
        /**
         *
         */
        'urlManager' => [
            'rules' => $rules,
        ],
        /**
         * Remove all Yii Bootstrap Jquery Asset
         */
        'assetManager' => [
            'bundles' => [
                'yii\web\JqueryAsset'                => [
                    'js' => [],
                ],
                'yii\bootstrap\BootstrapPluginAsset' => [
                    'js' => [],
                ],
                'yii\bootstrap\BootstrapAsset'       => [
                    'css' => [],
                ],
            ],
        ],
    ],
    'params'              => $params,
    /**
     * Before request check user login or not
     */
    'as beforeRequest'    => [
        'class'        => 'yii\filters\AccessControl',
        'rules'        => [
            [
                'allow'   => true,
                'actions' => [
                    'login',
                    'signup',
                    'request-password-reset',
                    'reset-password',
                    'maintenance'
                ],
            ],
            [
                'allow' => true,
                'roles' => ['@'],
            ],
        ],
        'denyCallback' => function() {
            return Yii::$app->response->redirect(['site/login']);
        },
    ],
    /**
     *
     */
    'on beforeAction' => function () {
        if (is_login()) {
            if (!is_role(['admin', 'manager', 'dev'])) {
                return Yii::$app->response->redirect(['../']);
            }
        }
    },
];

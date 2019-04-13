<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);
$modules = require __DIR__ . '/modules.php';
$rules = require __DIR__ . '/rules.php';
return [
    'id'                  => 'app-api',
    'basePath'            => dirname(__DIR__),
    'controllerNamespace' => 'api\controllers',
    'bootstrap'           => ['log'],
    'modules'             => $modules,
    'components'          => [
        'request'      => [
            'csrfParam' => '_csrf-api',
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ]
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        /**
         *
         */
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => true,
            'showScriptName' => false,
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
];

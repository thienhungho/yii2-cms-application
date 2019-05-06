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
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'modules'             => $modules,
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
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
        'urlManager' => [
            'rules' => $rules,
        ],
        'view' => [
//            'theme' => $theme,
        ],
    ],
    'params' => $params,
];

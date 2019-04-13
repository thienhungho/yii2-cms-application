<?php

$config = [
    'components' => [
        'request' => [
            'cookieValidationKey' => 'HM0XeqJ8hznJo_qSdCG52ACZPKVIRUr9',
        ],
    ],
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'generators' => [
            'job' => [
                'class' => '\yii\queue\gii\Generator',
            ],
        ],
    ];
}

return $config;

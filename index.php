<?php

require __DIR__ . '/_coming-soon.php';
require __DIR__ . '/_debug.php';
require __DIR__ . '/_dev.php';

require __DIR__ . '/_protected/vendor/autoload.php';
require __DIR__ . '/_protected/vendor/yiisoft/yii2/Yii.php';
require __DIR__ . '/_protected/common/config/bootstrap.php';
// App Bootstrap
require __DIR__ . '/_protected/frontend/config/bootstrap.php';

$config = yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/_protected/common/config/main.php',
    require __DIR__ . '/_protected/common/config/main-local.php',
    // App Config
    require __DIR__ . '/_protected/frontend/config/main.php',
    require __DIR__ . '/_protected/frontend/config/main-local.php',
    require '_modules.php'
);

$config['components']['view']['theme'] = [
    'basePath' => '@app/themes/cinagro',
    'baseUrl' => '@app/themes/cinagro',
    'pathMap' => [
        '@frontend/views' => '@themes/cinagro/views',
        '@frontend/modules' => '@themes/cinagro/modules',
        '@frontend/widgets' => '@themes/cinagro/widgets',
    ],
];

require __DIR__ . '/_protected/common/components/const.php';
require __DIR__ . '/_protected/common/components/functions.php';
require __DIR__ . '/_protected/frontend/components/const.php';
require __DIR__ . '/_protected/frontend/components/functions.php';

(new yii\web\Application($config))->run();

<?php

require dirname(__DIR__) . '/_debug.php';
require dirname(__DIR__) . '/_dev.php';

require __DIR__ . '/../_protected/vendor/autoload.php';
require __DIR__ . '/../_protected/vendor/yiisoft/yii2/Yii.php';
require __DIR__ . '/../_protected/common/config/bootstrap.php';
require __DIR__ . '/../_protected/backend/config/bootstrap.php';

$config = yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/../_protected/common/config/main.php',
    require __DIR__ . '/../_protected/common/config/main-local.php',
    require __DIR__ . '/../_protected/backend/config/main.php',
    require __DIR__ . '/../_protected/backend/config/main-local.php',
    require '_modules.php'
);

require __DIR__ . '/../_protected/common/components/const.php';
require __DIR__ . '/../_protected/common/components/functions.php';
require __DIR__ . '/../_protected/backend/components/const.php';
require __DIR__ . '/../_protected/backend/components/functions.php';

(new yii\web\Application($config))->run();

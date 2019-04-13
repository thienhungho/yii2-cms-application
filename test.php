<?php

require __DIR__ . '/_debug.php';
require __DIR__ . '/_dev.php';


require __DIR__ . '/_protected/vendor/autoload.php';
require __DIR__ . '/_protected/vendor/yiisoft/yii2/Yii.php';
require __DIR__ . '/_protected/common/config/bootstrap.php';
require __DIR__ . '/_protected/frontend/config/bootstrap.php';

$config = yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/_protected/common/config/main.php',
    require __DIR__ . '/_protected/common/config/main-local.php'
);

require __DIR__ . '/_protected/common/components/const.php';
require __DIR__ . '/_protected/common/components/functions.php';


//function is_new_file($file, $previous_update_time) {
//    return filemtime($file) >= strtotime($previous_update_time);
//}
//
//$previous_update_time = '01-08-1975';
//$common_components = \yii\helpers\FileHelper::findFiles('_protected/common/components', [
//    'recursive' => true,
//]);
//
//$common_components_update_file = [];
//foreach ($common_components as $file) {
//    if (is_new_file($file, $previous_update_time)) {
//        $common_components_update_file[] = $file;
////        copy($file, 'update/' . $file);
//    }
//}
//
//print_r($common_components_update_file);
<?php

return [
    'class' => '\rmrevin\yii\minify\View',
    'enableMinify' => true,
    'concatCss' => true,
    'minifyCss' => true,
    'concatJs' => false,
    'minifyJs' => true,
    'minifyOutput' => true,
    'webPath' => '@web',
    'basePath' => '@webroot',
    'minifyPath' => '@webroot/minify',
    'jsPosition' => [ \yii\web\View::POS_END ],
    'forceCharset' => 'UTF-8',
    'expandImports' => true,
    'compressOptions' => ['extra' => true],
    'excludeFiles' => [],
    'excludeBundles' => [],
];
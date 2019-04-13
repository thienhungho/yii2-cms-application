<?php
return [
    [
        'class' => 'yii\rest\UrlRule',
        'controller' => [
//            'v1/user',
//            'v1/block',
//            'v1/post',
//            'v1/post-type',
//            'v1/term-type',
//            'v1/term'
        ],
        'except' => ['delete', 'create', 'update'],
    ],
];
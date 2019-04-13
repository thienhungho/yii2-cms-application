<?php

return [
    'dashboard' => 'site/index',
    'login' => 'site/login',
    'logout' => 'site/logout',
    'reset-password' => 'site/reset-password',
    'request-password-reset' => 'site/request-password-reset',

    'media/settings' => 'site-configuration/media',

    'template/settings/custom-css' => 'template-configuration/custom-css',
    'template/settings/custom-js' => 'template-configuration/custom-js',

    'media' => 'media-manage/media',
    'media/<action:\w+>/<id:\d+>' => 'media-manage/media/<action>',
    'media/<action:\w+>' => 'media-manage/media/<action>',

    'user' => 'user-manage/user',
    'user/<action:\w+>/<id:\d+>' => 'user-manage/user/<action>',
    'user/<action:\w+>' => 'user-manage/user/<action>',

    'auth/role' => 'user-manage/auth',
    'auth/<action:\w+>/<id:\d+>' => 'user-manage/auth/<action>',
    'auth/<action:\w+>' => 'user-manage/auth/<action>',

    'content/<type:>' => 'post-manage/post',
    'content/<type:>/create' => 'post-manage/post/create',
    'content/save-as-new-language/<id:\d+>' => 'post-manage/post/save-as-new-language',
    'content/<action:\w+>/<id:\d+>' => 'post-manage/post/<action>',
    'content/<type:>/<action:\w+>' => 'post-manage/post/<action>',

    'content-type' => 'post-manage/post-type',
    'content-type/<action:\w+>/<id:\d+>' => 'post-manage/post-type/<action>',
    'content-type/<action:\w+>' => 'post-manage/post-type/<action>',

    'term-content/<type:>' => 'post-manage/term-of-post-type',
    'term-content/<type:>/create' => 'post-manage/term-of-post-type/create',
    'term-content/<action:\w+>/<id:\d+>' => 'post-manage/term-of-post-type/<action>',
    'term-content/<action:\w+>' => 'post-manage/term-of-post-type/<action>',

    'product/<slug:>' => 'product-manage/product',
    'product/<slug:>/create' => 'product-manage/product/create',
    'product/<action:\w+>/<id:\d+>' => 'product-manage/product/<action>',
    'product/<type:>/<action:\w+>' => 'product-manage/product/<action>',

    'product-type' => 'product-manage/product-type',
    'product-type/<action:\w+>/<id:\d+>' => 'product-manage/product-type/<action>',
    'product-type/<action:\w+>' => 'product-manage/product-type/<action>',

    'product-type-meta/<type:>' => 'product-manage/product-type-meta',
    'product-type-meta/<type:>/create' => 'product-manage/product-type-meta/create',
    'product-type-meta/<action:\w+>/<id:\d+>' => 'product-manage/product-type-meta/<action>',
    'product-type-meta/<action:\w+>' => 'product-manage/product-type-meta/<action>',

    'term-product/<type:>' => 'product-manage/term-of-product-type',
    'term-product/<type:>/create' => 'product-manage/term-of-product-type/create',
    'term-product/<action:\w+>/<id:\d+>' => 'product-manage/term-of-product-type/<action>',
    'term-product/<action:\w+>' => 'product-manage/term-of-product-type/<action>',

    'term/<slug:>' => 'term-manage/term',
    'term/<action:\w+>/<id:\d+>' => 'term-manage/term/<action>',
    'term/<type:>/<action:\w+>' => 'term-manage/term/<action>',

    'term-type' => 'term-manage/term-type',
    'term-type/<action:\w+>/<id:\d+>' => 'term-manage/term-type/<action>',
    'term-type/<action:\w+>' => 'term-manage/term-type/<action>',
    'term-type/<type:>/<action:\w+>' => 'term-manage/term-type/<action>',

    'comment/<type:>' => 'comment-manage/comment',
    'comment/<action:\w+>/<id:\d+>' => 'comment-manage/comment/<action>',
    'comment/<type:>/<action:\w+>' => 'comment-manage/comment/<action>',

    'block' => 'block-manage/block',
    'block/<action:\w+>/<id:\d+>' => 'block-manage/block/<action>',
    'block/<action:\w+>' => 'block-manage/block/<action>',

    'subscribe' => 'subscribe-manage/subscribe',
    'subscribe/<action:\w+>/<id:\d+>' => 'subscribe-manage/subscribe/<action>',
    'subscribe/<action:\w+>' => 'subscribe-manage/subscribe/<action>',

    'contact' => 'contact-manage/contact',
    'contact/<action:\w+>/<id:\d+>' => 'contact-manage/contact/<action>',
    'contact/<action:\w+>' => 'contact-manage/contact/<action>',

    'mail/mail-transport' => 'mail-transport-manage/mail-transport',
    'mail/mail-transport/<action:\w+>/<id:\d+>' => 'mail-transport-manage/mail-transport/<action>',
    'mail/mail-transport/<action:\w+>' => 'mail-transport-manage/mail-transport/<action>',
];
<?php

return [
    'modules' => [
        /**
         *  Seo
         */
        'seo' => [
            'class' => 'common\modules\seo\SeoModule',
        ],
        /**
         *  Post
         */
        'post' => [
            'class' => 'frontend\modules\posts\PostModule',
        ],
        /**
         * Product
         */
        'product' => [
            'class' => 'frontend\modules\products\ProductModule',
        ],
        /**
         * Comment
         */
        'comment' => [
            'class' => 'frontend\modules\comments\CommentModule',
        ],
        /**
         * Favorite
         */
        'favorite' => [
            'class' => 'thienhungho\Favorites\modules\Favorites\FavoriteModule',
        ],
        /**
         * Subscribe Frontend
         */
        'subscribe-frontend' => [
            'class' => 'thienhungho\Subscribes\modules\SubscribeFrontend\SubscribeFrontend',
        ]
    ]
];
<?php

return [
    'modules' => [
        /**
         * Site Configuration
         */
        'site-configuration' => [
            'class' => 'backend\modules\SiteConfiguration\SiteConfiguration',
        ],
        /**
         * Template Configuration
         */
        'template-configuration' => [
            'class' => 'thienhungho\TemplateConfiguration\modules\ScriptConfiguration\ScriptConfiguration',
        ],
        /**
         * SEO Configuration
         */
        'seo-configuration' => [
            'class' => 'backend\modules\SeoConfiguration\SeoConfiguration',
        ],
        /**
         * Dev Configuration
         */
        'dev-configuration' => [
            'class' => 'backend\modules\DevConfiguration\DevConfiguration',
        ],
        /**
         * Plugin Configuration
         */
        'plugin-configuration' => [
            'class' => 'backend\modules\PluginConfiguration\PluginConfiguration',
        ],
        /**
         * Optimize Configuration
         */
        'optimize-configuration' => [
            'class' => 'backend\modules\OptimizeConfiguration\OptimizeConfiguration',
        ],
        /**
         * Custom Modules User Manage
         */
        'user-manage' => [
            'class' => '\thienhungho\UserManagement\modules\UserManage\UserManage',
        ],
        /**
         * User Profile
         */
        'user-profile' => [
            'class' => '\thienhungho\UserManagement\modules\UserProfile\UserProfile',
            'layout' => '@backend/views/layouts/main2',
        ],
        /**
         * Category Manage
         */
        'term-manage' => [
            'class' => 'thienhungho\TermManagement\modules\TermManage\TermManage',
        ],
        /**
         * Post Manage
         */
        'post-manage' => [
            'class' => 'thienhungho\PostManagement\modules\PostManage\PostManage',
        ],
        /**
         * Product Manage
         */
        'product-manage' => [
            'class' => 'thienhungho\ProductManagement\modules\ProductManage\ProductManage',
        ],
        /**
         * Order Manage
         */
        'order-manage' => [
            'class' => 'thienhungho\OrderManagement\modules\OrderManage\OrderManage',
        ],
        /**
         * My order
         */
        'my-order' => [
            'class' => 'thienhungho\OrderManagement\modules\MyOrder\MyOrder',
        ],
        /**
         * Comment Manage
         */
        'comment-manage' => [
            'class' => 'thienhungho\CommentManagement\modules\CommentManage\CommentManage',
        ],
        /**
         * Block Manage
         */
        'block-manage' => [
            'class' => 'thienhungho\Block\modules\BlockManage\BlockManage',
        ],
        /**
         * Subscribe Manage
         */
        'subscribe-manage' => [
            'class' => 'thienhungho\Subscribes\modules\SubscribeManage\SubscribeManage',
        ],
        /**
         * Contact Manage
         */
        'contact-manage' => [
            'class' => 'thienhungho\ContactManagement\modules\ContactManage\ContactManage',
        ],
        /**
         * Media Manage
         */
        'media-manage' => [
            'class' => 'thienhungho\MediaManagement\modules\MediaManage\MediaManage',
        ],
        /**
         * Mail Transport Manage
         */
        'mail-transport-manage' => [
            'class' => 'thienhungho\Mail\modules\MailTransportManage\MailTransportManageModules',
        ],
    ]
];
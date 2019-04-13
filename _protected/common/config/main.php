<?php

return [
    'aliases'       => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    /**
     *
     */
    'name' => require __DIR__ . '/name.php',
    /**
     * Setting Vendor Path
     */
    'vendorPath'    => dirname(dirname(__DIR__)) . '/vendor',
    /**
     * Setting Language
     */
    'language'      => require __DIR__ . '/language.php',
    /**
     * Components
     */
    'components'    => [
        /**
         * Queue
         */
        'queue' => [
            'class' => '\yii\queue\db\Queue',
            'db' => 'db',
            'tableName' => '{{%queue}}',
            'channel' => 'default',
            'mutex' => '\yii\mutex\MysqlMutex',
        ],
        /**
         * Custom Mailer Module
         */
        'mailer' => [
            'class' => 'BaseApp\mail\modules\Mail\Mailer',
            'useFileTransport' => false,
        ],
        /**
         * Cache Config
         */
        'cache'       => [
            'class' => 'yii\caching\FileCache',
        ],
        /**
         * Log
         */
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        /**
         * il8b Setting
         * See more at: https://github.com/lajax/yii2-translate-manager
         */
        'i18n'        => [
            'translations' => [
                '*'    => [
                    'class'              => 'yii\i18n\DbMessageSource',
                    'db'                 => 'db',
                    'sourceLanguage'     => 'en-US',
                    // Developer language
                    'sourceMessageTable' => '{{%language_source}}',
                    'messageTable'       => '{{%language_translate}}',
                    'forceTranslation'   => true,
                    'cachingDuration'    => 86400,
                    'enableCaching'      => false,
                ],
                'app*' => [
                    'class'              => 'yii\i18n\DbMessageSource',
                    'db'                 => 'db',
                    'sourceLanguage'     => 'en-US',
                    'sourceMessageTable' => '{{%language_source}}',
                    'messageTable'       => '{{%language_translate}}',
                    'forceTranslation'   => true,
                    'cachingDuration'    => 86400,
                    'enableCaching'      => false,
                ],
            ],
        ],
        /**
         * COMPRESS VIEW
         * See more at: https://github.com/rmrevin/yii2-minify-view
         */
        'view' => require __DIR__ . '/view.php',
        /**
         * URL MULTIPLE LANGUAGE
         * See more at: https://github.com/codemix/yii2-localeurls
         */
        'urlManager'  => [
            'class'               => 'codemix\localeurls\UrlManager',
            'languages'           => require __DIR__ . '/other-languages.php',
            'enablePrettyUrl'     => true,
            'showScriptName'      => false,
            'enableStrictParsing' => false,
            'rules'               => require __DIR__ . '/rule.php',
        ],
        /**
         * Yii2Mod RBAC Module
         * See more at: https://github.com/yii2mod/yii2-rbac
         */
        'authManager' => [
            'class'        => 'yii\rbac\DbManager',
            'defaultRoles' => [
                'guest',
                'user',
            ],
        ],
        /**
         * Yii2 auth Module
         * See more at: https://www.yiiframework.com/extension/yiisoft/yii2-authclient
         */
        'authClientCollection' => [
            'class' => 'yii\authclient\Collection',
            'clients' => [
                'google' => [
                    'class' => 'yii\authclient\clients\GoogleOpenId'
                ],
            ],
        ],
        /**
         * Edit Response
         */
        'response'    => [
            'on beforeSend' => function($event) {
                $event->sender->headers->add('X-Hello-Human', 'Looking for a girl :) thienhungho@gmail.com');
                $event->sender->headers->add('X-Powered-By', 'ASP.NET');
                $event->sender->headers->add('X-Served-By', 'cache-sin18020-SIN');
            },
        ],
        /**
         * Setting Module
         * See more at: https://github.com/yii2mod/yii2-settings
         */
        'settings' => [
            'class' => 'yii2mod\settings\components\Settings',
        ],
        /**
         * reCaptcha Module
         * See more at: https://github.com/himiklab/yii2-recaptcha-widget
         */
        'reCaptcha' => require __DIR__ . '/reCaptcha.php',
    ],
    /**
     * Modules
     */
    'modules'       => [
        /**
         * Yii2Mod RBAC Module
         * See more at: https://github.com/yii2mod/yii2-rbac
         */
        'rbac'             => [
            'class'     => 'yii2mod\rbac\Module',
            'as access' => [
                'class' => yii2mod\rbac\filters\AccessControl::class,
            ],
        ],
        /**
         * il8b Setting
         * See more at: https://github.com/lajax/yii2-translate-manager
         */
        'translatemanager' => [
            'class'             => 'lajax\translatemanager\Module',
            'root'              => '@app',
            'phpTranslators'    => ['::t'],
            // list of the php function for translating messages.
            'jsTranslators'     => ['lajax.t'],
            'patterns'          => [
                '*.js',
                '*.php',
            ],
            'ignoredCategories' => ['yii'],
            'scanTimeLimit'     => null,
            'roles'             => ['admin'],
        ],
        /**
         * Kartik Grid View
         * See more at: https://github.com/kartik-v/yii2-grid
         */
        'gridview'         => [
            'class' => '\kartik\grid\Module',
            // see settings on http://demos.krajee.com/grid#module
        ],
        /**
         * Setting Module
         * See more at: https://github.com/yii2mod/yii2-settings
         *
         */
        'settings' => [
            'class' => 'yii2mod\settings\Module',
        ],
        /**
         * Date Control Module
         * See more at: http://demos.krajee.com/datecontrol#module
         *
         */
        'datecontrol'      => [
            'class' => '\kartik\datecontrol\Module',
        ],
        /**
         * Custom Upload Module
         */
        'uploads' => [
            'class' => 'common\modules\uploads\Uploads',
        ],
    ],
];

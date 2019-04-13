Yii2 Subscribe Management System
====================
Subscribe Management System for Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist thienhungho/yii2-subscribe-management "*"
```

or add

```
"thienhungho/yii2-subscribe-management": "*"
```

to the require section of your `composer.json` file.

### Migration

Run the following command in Terminal for database migration:

```
yii migrate/up --migrationPath=@vendor/thienhungho/Subscribes/migrations
```

Or use the [namespaced migration](http://www.yiiframework.com/doc-2.0/guide-db-migrations.html#namespaced-migrations) (requires at least Yii 2.0.10):

```php
// Add namespace to console config:
'controllerMap' => [
    'migrate' => [
        'class' => 'yii\console\controllers\MigrateController',
        'migrationNamespaces' => [
            'thienhungho\Subscribes\migrations\namespaced',
        ],
    ],
],
```

Then run:
```
yii migrate/up
```

Config
------------

Add modules to your `AppConfig` file.

```php
...
'modules'          => [
    ...
    /**
     * Subscribe Manage
     */
    'subscribe-manage' => [
        'class' => 'thienhungho\Subscribes\modules\SubscribeManage\SubscribeManage',
    ],
    /**
     * Subscribe Frontend 
     */
    'subscribe-frontend' => [
        'class' => 'thienhungho\Subscribes\modules\SubscribeFrontend\SubscribeFrontend',
    ],
    ...
],
...
```

Modules
------------

[SubscribeBase](https://github.com/thienhungho/yii2-subscribe-management/tree/master/src/modules/SubscribeBase), [SubscribeManage](https://github.com/thienhungho/yii2-subscribe-management/tree/master/src/modules/SubscribeManage), [SubscribeFrontend](https://github.com/thienhungho/yii2-subscribe-frontend/tree/master/src/modules/SubscribeFrontend)

Functions
------------

[Core](https://github.com/thienhungho/yii2-subscribe-management/tree/master/src/functions/core.php)

Models
------------

[Subscribe](https://github.com/thienhungho/yii2-subscribe-management/tree/master/src/models/Subscribe.php)
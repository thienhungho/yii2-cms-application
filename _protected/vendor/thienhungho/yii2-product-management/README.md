Yii2 Product Management System
====================
Product Management System for Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist thienhungho/yii2-product-management "*"
```

or add

```
"thienhungho/yii2-product-management": "*"
```

to the require section of your `composer.json` file.

### Migration

Run the following command in Terminal for database migration:

```
yii migrate/up --migrationPath=@vendor/thienhungho/ProductManagement/migrations
```

Or use the [namespaced migration](http://www.yiiframework.com/doc-2.0/guide-db-migrations.html#namespaced-migrations) (requires at least Yii 2.0.10):

```php
// Add namespace to console config:
'controllerMap' => [
    'migrate' => [
        'class' => 'yii\console\controllers\MigrateController',
        'migrationNamespaces' => [
            'thienhungho\ProductManagement\migrations\namespaced',
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

Add module ProductManage to your `AppConfig` file.

```php
...
'modules'          => [
    ...
    /**
     * Product Manage
     */
    'product-manage' => [
        'class' => 'thienhungho\ProductManagement\modules\ProductManage\ProductManage',
    ],
    ...
],
...
```

Modules
------------

[ProductBase](https://github.com/thienhungho/yii2-product-management/tree/master/src/modules/ProductBase), [ProductManage](https://github.com/thienhungho/yii2-product-management/tree/master/src/modules/ProductManage), [ProductManageForCustomer](https://github.com/thienhungho/yii2-product-management/tree/master/src/modules/ProductManageForCustomer)

Functions
------------

[Core](https://github.com/thienhungho/yii2-comment-management/tree/master/src/functions/core.php)

Constant
------------

[Core](https://github.com/thienhungho/yii2-comment-management/tree/master/src/const/core.php)
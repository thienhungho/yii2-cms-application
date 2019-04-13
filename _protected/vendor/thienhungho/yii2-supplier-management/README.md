Yii2 Supplier Management System
====================
Supplier Management System for Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist thienhungho/yii2-supplier-management "*"
```

or add

```
"thienhungho/yii2-supplier-management": "*"
```

to the require section of your `composer.json` file.

Config
------------

Add module SupplierManage to your `AppConfig` file.

```php
...
'modules'          => [
    ...
    /**
     * Supplier Manage
     */
     'supplier-manage' => [
        'class' => 'thienhungho\SupplierManagement\modules\SupplierManage\SupplierManageModules',
     ],
    ...
],
...
```

### Migration

Run the following command in Terminal for database migration:

```
yii migrate/up --migrationPath=@vendor/thienhungho/yii2-supplier-management/migrations
```

Or use the [namespaced migration](http://www.yiiframework.com/doc-2.0/guide-db-migrations.html#namespaced-migrations) (requires at least Yii 2.0.10):

```php
// Add namespace to console config:
'controllerMap' => [
    'migrate' => [
        'class' => 'yii\console\controllers\MigrateController',
        'migrationNamespaces' => [
            'thienhungho\SupplierManagement\migrations\namespaced',
        ],
    ],
],
```

Then run:
```
yii migrate/up
```

Modules
------------

[SupplierBase](https://github.com/thienhungho/yii2-supplier-management/tree/master/src/modules/SupplierBase), [SupplierManage](https://github.com/thienhungho/yii2-supplier-management/tree/master/src/modules/SupplierManage), 

Functions
------------

[Core](https://github.com/thienhungho/yii2-supplier-management/tree/master/src/functions/core.php)

Constant
------------

[Core](https://github.com/thienhungho/yii2-supplier-management/tree/master/src/const/core.php)

Models
------------

[Supplier](https://github.com/thienhungho/yii2-supplier-management/tree/master/src/models/Supplier.php)
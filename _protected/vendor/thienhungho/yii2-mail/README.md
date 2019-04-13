Yii2 Mail System
====================
Mail System for Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist thienhungho/yii2-mail "*"
```

or add

```
"thienhungho/yii2-mail": "*"
```

to the require section of your `composer.json` file.

### Migration

Run the following command in Terminal for database migration:

```
yii migrate/up --migrationPath=@vendor/thienhungho/Mail/migrations
```

Or use the [namespaced migration](http://www.yiiframework.com/doc-2.0/guide-db-migrations.html#namespaced-migrations) (requires at least Yii 2.0.10):

```php
// Add namespace to console config:
'controllerMap' => [
    'migrate' => [
        'class' => 'yii\console\controllers\MigrateController',
        'migrationNamespaces' => [
            'thienhungho\Mail\migrations\namespaced',
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

Add module MailTransportManage to your `AppConfig` file.

```php
...
'modules'          => [
    ...
    /**
     * Mail Transport Manage
     */
     'mail-transport-manage' => [
        'class' => 'thienhungho\Mail\modules\MailTransportManage\MailTransportManageModules',
     ],
    ...
],
...
```

Modules
------------

[Mail](https://github.com/thienhungho/yii2-mail/tree/master/src/modules/Mail), [MailTransport](https://github.com/thienhungho/yii2-mail/tree/master/src/modules/MailTransport), [MailTransportManage](https://github.com/thienhungho/yii2-mail/tree/master/src/modules/MailTransportManage)

Functions
------------

[Core](https://github.com/thienhungho/yii2-mail/tree/master/src/functions/core.php)

Models
------------

[Mailer](https://github.com/thienhungho/yii2-mail/tree/master/src/models/Mailer.php), [MailTransport](https://github.com/thienhungho/yii2-mail/tree/master/src/models/MailTransport.php)
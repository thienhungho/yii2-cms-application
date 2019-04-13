Yii2 flag-icon-css
==================
flag-icon-css extension for Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist powerkernel/yii2-flag-icon-css "*"
```

or add

```
"powerkernel/yii2-flag-icon-css": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= 
	\powerkernel\flagiconcss\Flag::widget([
	    	'tag' => 'span', // flag tag
		'country' => 'xx', // where xx is the ISO 3166-1-alpha-2 code of a country,
		'squared' => false, // set to true if you want to have a squared version flag
		'options' => [] // tag html options
	]); 
?>
```

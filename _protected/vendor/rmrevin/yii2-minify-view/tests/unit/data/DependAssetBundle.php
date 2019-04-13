<?php
/**
 * DependAssetBundle.php
 * @author Revin Roman
 * @link https://rmrevin.ru
 */

namespace rmrevin\yii\minify\tests\unit\data;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class DependAssetBundle
 * @package rmrevin\yii\minify\tests\unit\data
 */
class DependAssetBundle extends AssetBundle
{

    public $js = [
        'depend.js',
    ];

    public $css = [
        'depend.css',
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];

    public $depends = [
        'rmrevin\yii\minify\tests\unit\data\JQueryAssetBundle',
    ];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/source';

        parent::init();
    }
}

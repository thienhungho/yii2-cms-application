<?php
/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2017 Power Kernel
 */

namespace powerkernel\flagiconcss;


use yii\web\AssetBundle;

/**
 * Class FlagiconcssAsset
 * @package powerkernel\flagiconcss
 */
class FlagiconcssAsset extends AssetBundle
{
    public $sourcePath = '@bower/flag-icon-css';
    public $css = [
        'css/flag-icon.min.css',
    ];


} 

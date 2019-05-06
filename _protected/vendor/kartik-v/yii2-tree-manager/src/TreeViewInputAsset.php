<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2015 - 2019
 * @package   yii2-tree-manager
 * @version   1.1.2
 */

namespace kartik\tree;

use kartik\base\AssetBundle;

/**
 * Asset bundle for TreeViewInput widget.
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since  1.0
 */
class TreeViewInputAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $depends = [
        'kartik\tree\TreeViewAsset'
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('css', ['css/kv-tree-input']);
        $this->setupAssets('js', ['js/kv-tree-input']);
        parent::init();
    }
}

<?php

namespace thienhungho\Widgets\models;

use kartik\grid\GridView as BaseGridView;

/**
 * Class GridView
 * @package thienhungho\Widgets\models
 */
class GridView extends BaseGridView
{
    public $responsiveWrap = false;
    public $condensed = true;
    public $hover = true;
    public $floatHeader = true;
    public $floatHeaderOptions = ['top' => 74];
}
